<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vistosbuenos
 *
 * @ORM\Table(name="vistosbuenos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VistosbuenosRepository")
 */
class Vistosbuenos
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
     * @ORM\Column(name="nuregr", type="integer")
     */
    private $nuregr;

    /**
     * @var int
     *
     * @ORM\Column(name="anoreg", type="integer")
     */
    private $anoreg;

    /**
     * @var int
     *
     * @ORM\Column(name="codvisbuen", type="integer")
     */
    private $codvisbuen;

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
     * Set nuregr
     *
     * @param integer $nuregr
     *
     * @return Vistosbuenos
     */
    public function setNuregr($nuregr)
    {
        $this->nuregr = $nuregr;

        return $this;
    }

    /**
     * Get nuregr
     *
     * @return int
     */
    public function getNuregr()
    {
        return $this->nuregr;
    }

    /**
     * Set anoreg
     *
     * @param integer $anoreg
     *
     * @return Vistosbuenos
     */
    public function setAnoreg($anoreg)
    {
        $this->anoreg = $anoreg;

        return $this;
    }

    /**
     * Get anoreg
     *
     * @return int
     */
    public function getAnoreg()
    {
        return $this->anoreg;
    }

    /**
     * Set codvisbuen
     *
     * @param integer $codvisbuen
     *
     * @return Vistosbuenos
     */
    public function setCodvisbuen($codvisbuen)
    {
        $this->codvisbuen = $codvisbuen;

        return $this;
    }

    /**
     * Get codvisbuen
     *
     * @return int
     */
    public function getCodvisbuen()
    {
        return $this->codvisbuen;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Vistosbuenos
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

