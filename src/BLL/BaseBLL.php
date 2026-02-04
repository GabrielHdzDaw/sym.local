<?php

namespace App\BLL;

use App\Entity\Imagen;
use App\Repository\ImagenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

abstract class BaseBLL
{
    protected UserPasswordHasherInterface $encoder;
    protected EntityManagerInterface $em;
    protected ValidatorInterface $validator;
    protected RequestStack $requestStack;
    protected Security $security;
    protected ImagenRepository $imagenRepository;
    public function __construct(
        EntityManagerInterface $em,
        ValidatorInterface $validator,
        UserPasswordHasherInterface $encoder,
        RequestStack $requestStack,
        Security $security
    ) {
        $this->em = $em;
        $this->validator = $validator;
        $this->encoder = $encoder;
        $this->requestStack = $requestStack;
        $this->security = $security;
    }

    private function validate($entity)
    {
        $errors = $this->validator->validate($entity);
        if (count($errors) > 0) {
            $strError = '';
            foreach ($errors as $error) {
                if (!empty($strError))
                    $strError .= '\n';
                $strError .= $error->getMessage();
            }
            throw new BadRequestHttpException($strError);
        }
    }

    protected function guardaValidando($entity): array
    {
        $this->validate($entity); // Validación de los datos 
        $this->em->persist($entity); // Se guardan los datos 
        $this->em->flush();
        return $this->toArray($entity); // Devolvemos la entidad en forma de array 
    }

    public function toArray(Imagen $imagen)
    {
        if (is_null($imagen))
            return null;

        return [
            'id' => $imagen->getId(),
            'nombre' => $imagen->getNombre(),
            'descripcion' => $imagen->getDescripcion(),
            'categoria' => $imagen->getCategoria()->getNombre(),
            'numLikes' => $imagen->getNumLikes(),
            'numVisualizaciones' => $imagen->getNumVisualizaciones(),
            'numDownloads' => $imagen->getNumDownloads(),
            'fecha' => is_null($imagen->getFecha()) ? '' : $imagen->getFecha()->format('d/m/Y'),
            'usuario' => $imagen->getUsuario()->getId()
        ];
    }

    public function entitiesToArray(array $entities)
    {
        if (is_null($entities))
            return null;
        $arr = [];
        foreach ($entities as $entity)
            $arr[] = $this->toArray($entity);
        return $arr;
    }

    public function delete($entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}