<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", indexes={@ORM\Index(name="IDX_64C19C1727ACA70", columns={"id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria
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
     * @var string
     *
     * @ORM\Column(name="tipoevento", type="string", length=255, nullable=false)
     */
    private $tipoevento;



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
     * Set tipoevento
     *
     * @param string $tipoevento
     *
     * @return Categoria
     */
    public function setTipoevento($tipoevento)
    {
        $this->tipoevento = $tipoevento;

        return $this;
    }

    /**
     * Get tipoevento
     *
     * @return string
     */
    public function getTipoevento()
    {
        return $this->tipoevento;
    }

       public function __toString() {

      return $this->tipoevento;
    }
}
