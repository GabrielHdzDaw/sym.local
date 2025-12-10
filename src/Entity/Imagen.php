<?php

namespace App\Entity;

use App\Repository\ImagenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagenRepository::class)]
class Imagen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: false)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: false)]
    private ?int $categoria = null;

    #[ORM\Column(length: 100, nullable: false)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: false)]
    private ?int $numVisualizaciones = null;

    #[ORM\Column(nullable: false)]
    private ?int $numLikes = null;

    #[ORM\Column(nullable: false)]
    private ?int $numDescargas = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCategoria(): ?int
    {
        return $this->categoria;
    }

    public function setCategoria(?int $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getNumVisualizaciones(): ?int
    {
        return $this->numVisualizaciones;
    }

    public function setNumVisualizaciones(?int $numVisualizaciones): static
    {
        $this->numVisualizaciones = $numVisualizaciones;

        return $this;
    }

    public function getNumLikes(): ?int
    {
        return $this->numLikes;
    }

    public function setNumLikes(?int $numLikes): static
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    public function getNumDescargas(): ?int
    {
        return $this->numDescargas;
    }

    public function setNumDescargas(?int $numDescargas): static
    {
        $this->numDescargas = $numDescargas;

        return $this;
    }
}