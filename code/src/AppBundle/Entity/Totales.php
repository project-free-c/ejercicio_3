<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Totales
 *
 * @ORM\Table(name="totales")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TotalesRepository")
 */
class Totales
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
     * @ORM\Column(name="totitems", type="integer")
     */
    private $totitems;

    /**
     * @var string
     *
     * @ORM\Column(name="Fob", type="decimal", precision=10, scale=0)
     */
    private $fob;

    /**
     * @var int
     *
     * @ORM\Column(name="tothojas", type="integer")
     */
    private $tothojas;

    /**
     * @var int
     *
     * @ORM\Column(name="codfle", type="integer")
     */
    private $codfle;

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
     * Set totitems
     *
     * @param integer $totitems
     *
     * @return Totales
     */
    public function setTotitems($totitems)
    {
        $this->totitems = $totitems;

        return $this;
    }

    /**
     * Get totitems
     *
     * @return int
     */
    public function getTotitems()
    {
        return $this->totitems;
    }

    /**
     * Set fob
     *
     * @param string $fob
     *
     * @return Totales
     */
    public function setFob($fob)
    {
        $this->fob = $fob;

        return $this;
    }

    /**
     * Get fob
     *
     * @return string
     */
    public function getFob()
    {
        return $this->fob;
    }

    /**
     * Set tothojas
     *
     * @param integer $tothojas
     *
     * @return Totales
     */
    public function setTothojas($tothojas)
    {
        $this->tothojas = $tothojas;

        return $this;
    }

    /**
     * Get tothojas
     *
     * @return int
     */
    public function getTothojas()
    {
        return $this->tothojas;
    }

    /**
     * Set codfle
     *
     * @param integer $codfle
     *
     * @return Totales
     */
    public function setCodfle($codfle)
    {
        $this->codfle = $codfle;

        return $this;
    }

    /**
     * Get codfle
     *
     * @return int
     */
    public function getCodfle()
    {
        return $this->codfle;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Totales
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

