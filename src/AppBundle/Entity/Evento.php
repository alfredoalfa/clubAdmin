<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento", indexes={@ORM\Index(name="fk_evento_1_idx", columns={"idcategoria"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creado", type="datetime", nullable=false)
     */
    private $creado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finaliza", type="datetime", nullable=false)
     */
    private $finaliza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=false)
     */
    private $imagen;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=255, nullable=false)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text", nullable=false)
     */
    private $contenido;

    /**
     * @var array
     *
     * @ORM\Column(name="caracteristicas", type="array", nullable=false)
     */
    private $caracteristicas;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcategoria", referencedColumnName="id")
     * })
     */
    private $idcategoria;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return Evento
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set finaliza
     *
     * @param \DateTime $finaliza
     *
     * @return Evento
     */
    public function setFinaliza($finaliza)
    {
        $this->finaliza = $finaliza;

        return $this;
    }

    /**
     * Get finaliza
     *
     * @return \DateTime
     */
    public function getFinaliza()
    {
        return $this->finaliza;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Evento
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Evento
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Evento
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Evento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     *
     * @return Evento
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Evento
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set caracteristicas
     *
     * @param array $caracteristicas
     *
     * @return Evento
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Get caracteristicas
     *
     * @return array
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set idcategoria
     *
     * @param \AppBundle\Entity\Categoria $idcategoria
     *
     * @return Evento
     */
    public function setIdcategoria(\AppBundle\Entity\Categoria $idcategoria = null)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
