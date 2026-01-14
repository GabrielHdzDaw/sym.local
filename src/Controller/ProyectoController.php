<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Imagen;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class ProyectoController extends AbstractController
{
    #[Route('/', name: 'sym_index')]
    public function index(): Response
    {
        $imagenesHome[] = new Imagen('1.jpg', 'descripción imagen 1', 1, 456, 610, 130);
        $imagenesHome[] = new Imagen('2.jpg', 'descripción imagen 2', 1, 345, 555, 231);
        $imagenesHome[] = new Imagen('3.jpg', 'descripción imagen 3', 1, 654, 287, 987);
        $imagenesHome[] = new Imagen('4.jpg', 'descripción imagen 4', 1, 895, 471, 213);
        $imagenesHome[] = new Imagen('5.jpg', 'descripción imagen 5', 1, 321, 434, 657);
        $imagenesHome[] = new Imagen('6.jpg', 'descripción imagen 6', 1, 765, 345, 897);
        $imagenesHome[] = new Imagen('7.jpg', 'descripción imagen 7', 1, 543, 675, 221);
        $imagenesHome[] = new Imagen('8.jpg', 'descripción imagen 8', 1, 321, 434, 657);
        $imagenesHome[] = new Imagen('9.jpg', 'descripción imagen 9', 1, 324, 564, 768);
        $imagenesHome[] = new Imagen('10.jpg', 'descripción imagen 10', 1, 452, 324, 675);
        $imagenesHome[] = new Imagen('11.jpg', 'descripción imagen 11', 1, 657, 786, 980);
        $imagenesHome[] = new Imagen('12.jpg', 'descripción imagen 12', 1, 123, 456, 789);
        return $this->render('index.view.html.twig', ['imagenes' => $imagenesHome]);
    }

    #[Route('/blog', name: 'sym_blog')]
    public function blog(): Response
    {
        return $this->render('blog.view.html.twig');
    }
}
