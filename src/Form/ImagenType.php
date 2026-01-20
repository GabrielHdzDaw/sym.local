<?php

namespace App\Form;

use App\Entity\Imagen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Categoria;

class ImagenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', FileType::class, [
                'label' => 'Nombre imagen (JPG o PNG)',
                'label_attr' => ['class' => 'etiqueta'],
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Por favor, seleccione un archivo jpg o png',
                    ])
                ],
            ])
            ->add('descripcion', TextType::class)
            ->add('numDownloads', IntegerType::class)
            ->add('numVisualizaciones', IntegerType::class)
            ->add('numLikes', IntegerType::class)
            ->add('categoria', EntityType::class, [
                'class' => Categoria::class,
                'label' => 'Categoria:',
                'label_attr' => ['class' => 'etiqueta'],
            ])
            ->add('fecha', DateType::class, [
                'widget' => 'single_text'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Imagen::class,
        ]);
    }
}