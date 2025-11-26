<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \DateTime;

class DefaultController extends AbstractController
{
    public function index()
    {
        $nombre = "Gabriel";
        $saludo = "Qué dise ";
        $nombres = [ 'Ana','Enrique','Laura','Pablo' ];
        

        return $this->render('prueba.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha'=> new DateTime() 
        ]);
    }
}