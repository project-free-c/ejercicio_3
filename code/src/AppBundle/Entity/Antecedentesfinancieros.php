<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedentesfinancieros
 *
 * @ORM\Table(name="antecedentesfinancieros")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AntecedentesfinancierosRepository")
 */
class Antecedentesfinancieros
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
     * @ORM\Column(name="gregimp", type="string", length=255)
     */
    private $gregimp;

    /**
     * @var int
     *
     * @ORM\Column(name="regimp", type="integer")
     */
    private $regimp;

    /**
     * @var int
     *
     * @ORM\Column(name="bcocom", type="integer")
     */
    private $bcocom;

    /**
     * @var int
     *
     * @ORM\Column(name="codordiv", type="integer")
     */
    private $codordiv;

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
     * Set gregimp
     *
     * @param string $gregimp
     *
     * @return Antecedentesfinancieros
     */
    public function setGregimp($gregimp)
    {
        $this->gregimp = $gregimp;

        return $this;
    }

    /**
     * Get gregimp
     *
     * @return string
     */
    public function getGregimp()
    {
        return $this->gregimp;
    }

    /**
     * Set regimp
     *
     * @param integer $regimp
     *
     * @return Antecedentesfinancieros
     */
    public function setRegimp($regimp)
    {
        $this->regimp = $regimp;

        return $this;
    }

    /**
     * Get regimp
     *
     * @return int
     */
    public function getRegimp()
    {
        return $this->regimp;
    }

    /**
     * Set bcocom
     *
     * @param integer $bcocom
     *
     * @return Antecedentesfinancieros
     */
    public function setBcocom($bcocom)
    {
        $this->bcocom = $bcocom;

        return $this;
    }

    /**
     * Get bcocom
     *
     * @return int
     */
    public function getBcocom()
    {
        return $this->bcocom;
    }

    /**
     * Set codordiv
     *
     * @param integer $codordiv
     *
     * @return Antecedentesfinancieros
     */
    public function setCodordiv($codordiv)
    {
        $this->codordiv = $codordiv;

        return $this;
    }

    /**
     * Get codordiv
     *
     * @return int
     */
    public function getCodordiv()
    {
        return $this->codordiv;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Antecedentesfinancieros
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

