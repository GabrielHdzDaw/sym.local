<?php

namespace App\Entity;

use App\Entity\IEntity;


class Asociado implements IEntity
{
    private $id;
    private $nombre;
    private $logo;
    private $descripcion;
    const RUTA_LOGOS_ASOCIADOS = "/public/images/asociados/";

    /**
     * @param string $nombre 
     * @param string $logo
     * @param string $descripcion
     */
    function __construct($nombre = "", $logo = "", $descripcion = "")
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
    }

    /*
        * @return int
    */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Asociado
     */
    public function setNombre($nombre): ?Asociado
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return Asociado
     */
    public function setLogo($logo): ?Asociado
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /**
     * @param string $Descripcion
     * @return Asociado
     */
    public function setDescripcion($descripcion): ?Asociado
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return self::RUTA_LOGOS_ASOCIADOS . $this->logo;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'logo' => $this->getLogo(),
            'descripcion' => $this->getDescripcion()
        ];
    }

    public function __toString()
    {
        return $this->descripcion;
    }
}