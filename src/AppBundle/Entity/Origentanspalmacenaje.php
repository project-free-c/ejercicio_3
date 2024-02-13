<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Origentanspalmacenaje
 *
 * @ORM\Table(name="origentanspalmacenaje")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrigentanspalmacenajeRepository")
 */
class Origentanspalmacenaje
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
     * @ORM\Column(name="paorig", type="integer")
     */
    private $paorig;

    /**
     * @var string
     *
     * @ORM\Column(name="gpaorig", type="string", length=255)
     */
    private $gpaorig;

    /**
     * @var int
     *
     * @ORM\Column(name="paadq", type="integer")
     */
    private $paadq;

    /**
     * @var string
     *
     * @ORM\Column(name="gpaadq", type="string", length=255)
     */
    private $gpaadq;

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
     * Set paorig
     *
     * @param int $paorig
     *
     * @return Origentanspalmacenaje
     */
    public function setPaorig($paorig)
    {
        $this->paorig = $paorig;

        return $this;
    }

    /**
     * Get paorig
     *
     * @return string
     */
    public function getPaorig()
    {
        return $this->paorig;
    }

    /**
     * Set gpaorig
     *
     * @param string $gpaorig
     *
     * @return Origentanspalmacenaje
     */
    public function setGpaorig($gpaorig)
    {
        $this->gpaorig = $gpaorig;

        return $this;
    }

    /**
     * Get gpaorig
     *
     * @return string
     */
    public function getGpaorig()
    {
        return $this->gpaorig;
    }

    /**
     * Set paadq
     *
     * @param integer $paadq
     *
     * @return Origentanspalmacenaje
     */
    public function setPaadq($paadq)
    {
        $this->paadq = $paadq;

        return $this;
    }

    /**
     * Get paadq
     *
     * @return int
     */
    public function getPaadq()
    {
        return $this->paadq;
    }

    /**
     * Set gpaadq
     *
     * @param string $gpaadq
     *
     * @return Origentanspalmacenaje
     */
    public function setGpaadq($gpaadq)
    {
        $this->gpaadq = $gpaadq;

        return $this;
    }

    /**
     * Get gpaadq
     *
     * @return string
     */
    public function getGpaadq()
    {
        return $this->gpaadq;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Origentanspalmacenaje
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

