<?php
// Atributos privados: id, nombre, descripción, categoría, numVisualizaciones, numLikes y 
// numDownloads. 
// • Crea el constructor que se le pueda pasar todos los atributos y que por defecto coja el 
// valor 0 para los campos numéricos (el id no se pasará) 
// • Crea los getters y setters de los atritubos (excepto setId() que no se creará) 
// Para los settters, hay que devolver un objeto de la misma clase. Por ejemplo: 
// public function setNombre(string $nombre): Imagen 
// { 
// $this->nombre = $nombre; 
// return $this; 
// } 
// • Crea el método _toString() que devuelva solamente la descripción como un string. 
// • Crea las siguientes constantes que guardan las rutas hacia imágenes guardadas: 
// const RUTA_IMAGENES_PORTFOLIO = '/public/images/index/portfolio/'; 
// const RUTA_IMAGENES_GALERIA = '/public/images/index/gallery/'; 
// const RUTA_IMAGENES_CLIENTES = '/public/images/clients/'; 
// • Por último, crea los métodos getUrlPortfolio, getUrlGaleria y getUrlClientes que 
// devuelvan un string con la unión de la ruta más el nombre de la imagen, como: 
// return self::RUTA_IMAGENES_CLIENTES . $this->getNombre();
namespace App\Entity;

use App\entity\IEntity;

class Imagen implements IEntity
{
    /*
    * @var int
    */
    private $id;
    /*
    * @var string
    */
    private $nombre;
    /*
    * @var string
    */
    private $descripcion;
    /*
    * @var string
    */
    private $categoria;
    /*
    * @var int
    */
    private $numVisualizaciones;
    /*
    * @var int
    */
    private $numLikes;
    /*
    * @var int
    */
    private $numDownloads;

    /**
     * @param string $nombre
     * @param string $descripcion
     * @param string $categoria
     * @param int $numVisualizaciones
     * @param int $numLikes
     * @param int $numDownloads
     */

    const RUTA_IMAGENES_PORTFOLIO = '/public/images/galeria/';
    const RUTA_IMAGENES_GALERIA = '/public/images/index/gallery';
    const RUTA_IMAGENES_CLIENTES = '/public/images/clients/';
    const RUTA_IMAGENES_SUBIDAS = '/public/images/galeria/';

    public function __construct(string $nombre = "", string $descripcion = "", string $categoria = "", int $numVisualizaciones = 0, int $numLikes = 0, int $numDownloads = 0)
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->numVisualizaciones = $numVisualizaciones;
        $this->numLikes = $numLikes;
        $this->numDownloads = $numDownloads;
    }

    /*
        * @return int
    */
    public function getId(): ?int
    {
        return $this->id;
    }

    /*
        * @return string
    */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /*
        * @param string $nombre
        * @return Imagen
    */
    public function setNombre(string $nombre): Imagen
    {
        $this->nombre = $nombre;
        return $this;
    }

    /*
        * @return string
    */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /*
        * @param string $descripcion
        * @return Imagen
    */
    public function setDescripcion(string $descripcion): Imagen
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /*
        * @return string
    */
    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    /*
        * @param string $categoria
        * @return Imagen
    */
    public function setCategoria(string $categoria): Imagen
    {
        $this->categoria = $categoria;
        return $this;
    }

    /*
        * @return string
    */
    public function getNumVisualizaciones(): ?int
    {
        return $this->numVisualizaciones;
    }

    /*
        * @param int $numVisualizaciones
        * @return Imagen
    */
    public function setNumVisualizaciones(int $numVisualizaciones): Imagen
    {
        $this->numVisualizaciones = $numVisualizaciones;
        return $this;
    }

    /*
        * @return string
    */
    public function getNumLikes(): ?int
    {
        return $this->numLikes;
    }

    /*
        * @param int $numLikes
        * @return Imagen
    */
    public function setNumLikes(int $numLikes): Imagen
    {
        $this->numLikes = $numLikes;
        return $this;
    }

    /*
        * @return string
    */
    public function getNumDownloads(): ?int
    {
        return $this->numDownloads;
    }

    /*
        * @param int $numDownloads
        * @return Imagen
    */
    public function setNumDownloads(int $numDownloads): Imagen
    {
        $this->numDownloads = $numDownloads;
        return $this;
    }


    public function getUrlPortfolio(): ?string
    {
        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
    }

    public function getUrlGaleria(): ?string
    {
        return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
    }

    public function getUrlClientes(): ?string
    {
        return self::RUTA_IMAGENES_CLIENTES . $this->getNombre();
    }

    public function getUrlSubidas(): ?string
    {
        return self::RUTA_IMAGENES_SUBIDAS . $this->getNombre();
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'descripcion' => $this->getDescripcion(),
            'numVisualizaciones' => $this->getNumVisualizaciones(),
            'numLikes' => $this->getNumLikes(),
            'numDownloads' => $this->getNumDownloads(),
            'categoria' => $this->getCategoria()
        ];
    }

    public function __toString(): string
    {
        return $this->descripcion;
    }
}