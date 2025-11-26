<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Imagen;

class ProyectoController extends AbstractController
{
    public function index()
    {
        $imagenesHome[] = new Imagen('1.jpg', 'descripción imagen 1', 1, 46, 61, 135);
        $imagenesHome[] = new Imagen('2.jpg', 'descripción imagen 2', 1, 256, 21, 131);
        $imagenesHome[] = new Imagen('3.jpg', 'descripción imagen 3', 1, 34, 31, 2);
        $imagenesHome[] = new Imagen('4.jpg', 'descripción imagen 4', 1, 465, 615, 25148);
        $imagenesHome[] = new Imagen('5.jpg', 'descripción imagen 5', 1, 4665, 6167, 145);
        $imagenesHome[] = new Imagen('6.jpg', 'descripción imagen 6', 1, 746, 6123, 18);
        $imagenesHome[] = new Imagen('7.jpg', 'descripción imagen 7', 1, 546, 1261, 59);
        $imagenesHome[] = new Imagen('7.jpg', 'descripción imagen 8', 1, 7846, 961, 63);
        $imagenesHome[] = new Imagen('8.jpg', 'descripción imagen 9', 1, 46888, 561, 48);
        $imagenesHome[] = new Imagen('9.jpg', 'descripción imagen 10', 1, 463, 616, 1548);
        $imagenesHome[] = new Imagen('10.jpg', 'descripción imagen 11', 1, 4646, 6541, 7895);
        $imagenesHome[] = new Imagen('11.jpg', 'descripción imagen 12', 1, 12, 62111, 33);
        $imagenesHome[] = new Imagen('12.jpg', 'descripción imagen 13 ', 1, 67, 61, 999);

        return $this->render('imagenes.html.twig', [
            'imagenes' => $imagenesHome
        ]);
    }
}