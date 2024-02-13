<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RespuestaRepository")
 */
class Respuesta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaceptacion", type="datetime")
     */
    private $fechaceptacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroencriptado", type="string", length=255)
     */
    private $numeroencriptado;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="tiposeleccion", type="integer")
     */
    private $tiposeleccion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Cabeza")
     * @ORM\JoinColumn(name="idCabeza", referencedColumnName="id")
     */
    private $idCabeza;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaceptacion
     *
     * @param \DateTime $fechaceptacion
     *
     * @return Respuesta
     */
    public function setFechaceptacion($fechaceptacion)
    {
        $this->fechaceptacion = $fechaceptacion;

        return $this;
    }

    /**
     * Get fechaceptacion
     *
     * @return \DateTime
     */
    public function getFechaceptacion()
    {
        return $this->fechaceptacion;
    }

    /**
     * Set numeroencriptado
     *
     * @param string $numeroencriptado
     *
     * @return Respuesta
     */
    public function setNumeroencriptado($numeroencriptado)
    {
        $this->numeroencriptado = $numeroencriptado;

        return $this;
    }

    /**
     * Get numeroencriptado
     *
     * @return string
     */
    public function getNumeroencriptado()
    {
        return $this->numeroencriptado;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Respuesta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tiposeleccion
     *
     * @param integer $tiposeleccion
     *
     * @return Respuesta
     */
    public function setTiposeleccion($tiposeleccion)
    {
        $this->tiposeleccion = $tiposeleccion;

        return $this;
    }

    /**
     * Get tiposeleccion
     *
     * @return int
     */
    public function getTiposeleccion()
    {
        return $this->tiposeleccion;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Respuesta
     */
    public function setIdCabeza($idCabeza)
    {
        $this->idCabeza = $idCabeza;

        return $this;
    }

    /**
     * Get idCabeza
     *
     * @return int
     */
    public function getIdCabeza()
    {
        return $this->idCabeza;
    }
}

