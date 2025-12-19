<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Imagen;
use App\Repository\ImagenRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;

class ProyectoController extends AbstractController
{
    public function index(ManagerRegistry $doctrine): Response
    {
        $imagenes = $doctrine->getRepository(Imagen::class)->findAll();

        return $this->render('imagenes.html.twig', [
            'imagenes' => $imagenes
        ]);
    }
}