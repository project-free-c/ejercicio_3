<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentasyvalores
 *
 * @ORM\Table(name="cuentasyvalores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CuentasyvaloresRepository")
 */
class Cuentasyvalores
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
     * @ORM\Column(name="montype", type="integer")
     */
    private $montype;

    /**
     * @var string
     *
     * @ORM\Column(name="mon", type="decimal", precision=10, scale=0)
     */
    private $mon;

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
     * Set montype
     *
     * @param integer $montype
     *
     * @return Cuentasyvalores
     */
    public function setMontype($montype)
    {
        $this->montype = $montype;

        return $this;
    }

    /**
     * Get montype
     *
     * @return int
     */
    public function getMontype()
    {
        return $this->montype;
    }

    /**
     * Set mon
     *
     * @param string $mon
     *
     * @return Cuentasyvalores
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Get mon
     *
     * @return string
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Set idCabeza
     *
     * @param int $idCabeza
     *
     * @return Cuentasyvalores
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

