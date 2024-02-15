<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LogRepository")
 */
class Log
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
     * @var int
     *
     * @ORM\Column(name="secuencia", type="integer")
     */
    private $secuencia;

    /**
     * @var int
     *
     * @ORM\Column(name="aduana", type="integer")
     */
    private $aduana;

    /**
     * @var string
     *
     * @ORM\Column(name="sobre", type="string", length=255)
     */
    private $sobre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="van", type="string", length=255)
     */
    private $van;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=255)
     */
    private $destino;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="TipoEnvio")
     * @ORM\JoinColumn(name="id_tipoenvio", referencedColumnName="id")
     */
    private $idTipoenvio;


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
     * Set secuencia
     *
     * @param integer $secuencia
     *
     * @return Log
     */
    public function setSecuencia($secuencia)
    {
        $this->secuencia = $secuencia;

        return $this;
    }

    /**
     * Get secuencia
     *
     * @return int
     */
    public function getSecuencia()
    {
        return $this->secuencia;
    }

    /**
     * Set aduana
     *
     * @param integer $aduana
     *
     * @return Log
     */
    public function setAduana($aduana)
    {
        $this->aduana = $aduana;

        return $this;
    }

    /**
     * Get aduana
     *
     * @return int
     */
    public function getAduana()
    {
        return $this->aduana;
    }

    /**
     * Set sobre
     *
     * @param string $sobre
     *
     * @return Log
     */
    public function setSobre($sobre)
    {
        $this->sobre = $sobre;

        return $this;
    }

    /**
     * Get sobre
     *
     * @return string
     */
    public function getSobre()
    {
        return $this->sobre;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Log
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Log
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set van
     *
     * @param string $van
     *
     * @return Log
     */
    public function setVan($van)
    {
        $this->van = $van;

        return $this;
    }

    /**
     * Get van
     *
     * @return string
     */
    public function getVan()
    {
        return $this->van;
    }

    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return Log
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set destino
     *
     * @param string $destino
     *
     * @return Log
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set idTipoenvio
     *
     * @param string $id_tipoenvio
     *
     * @return Log
     */
    public function setIdTipoEnvio($idTipoenvio)
    {
        $this->idTipoenvio = $idTipoenvio;

        return $this;
    }

    /**
     * Get idTipoenvio
     *
     * @return int
     */
    public function getIdTipoEnvio()
    {
        return $this->idTipoenvio;
    }
}

