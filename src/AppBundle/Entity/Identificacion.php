<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identificacion
 *
 * @ORM\Table(name="identificacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IdentificacionRepository")
 */
class Identificacion
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direc", type="string", length=255)
     */
    private $direc;

    /**
     * @var int
     *
     * @ORM\Column(name="codcomun", type="integer")
     */
    private $codcomun;

    /**
     * @var int
     *
     * @ORM\Column(name="tiporut", type="integer")
     */
    private $tiporut;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=255)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="dvrunt", type="string", length=1)
     */
    private $dvrunt;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Identificacion
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
     * Set direc
     *
     * @param string $direc
     *
     * @return Identificacion
     */
    public function setDirec($direc)
    {
        $this->direc = $direc;

        return $this;
    }

    /**
     * Get direc
     *
     * @return string
     */
    public function getDirec()
    {
        return $this->direc;
    }

    /**
     * Set codcomun
     *
     * @param integer $codcomun
     *
     * @return Identificacion
     */
    public function setCodcomun($codcomun)
    {
        $this->codcomun = $codcomun;

        return $this;
    }

    /**
     * Get codcomun
     *
     * @return int
     */
    public function getCodcomun()
    {
        return $this->codcomun;
    }

    /**
     * Set tiporut
     *
     * @param integer $tiporut
     *
     * @return Identificacion
     */
    public function setTiporut($tiporut)
    {
        $this->tiporut = $tiporut;

        return $this;
    }

    /**
     * Get tiporut
     *
     * @return int
     */
    public function getTiporut()
    {
        return $this->tiporut;
    }

    /**
     * Set rut
     *
     * @param string $rut
     *
     * @return Identificacion
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set dvrunt
     *
     * @param string $dvrunt
     *
     * @return Identificacion
     */
    public function setDvrunt($dvrunt)
    {
        $this->dvrunt = $dvrunt;

        return $this;
    }

    /**
     * Get dvrunt
     *
     * @return string
     */
    public function getDvrunt()
    {
        return $this->dvrunt;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Identificacion
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

