<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bultos
 *
 * @ORM\Table(name="bultos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BultosRepository")
 */
class Bultos
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
     * @ORM\Column(name="idbultos", type="string", length=255)
     */
    private $idbultos;

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
     * Set idbultos
     *
     * @param string $idbultos
     *
     * @return Bultos
     */
    public function setIdbultos($idbultos)
    {
        $this->idbultos = $idbultos;

        return $this;
    }

    /**
     * Get idbultos
     *
     * @return string
     */
    public function getIdbultos()
    {
        return $this->idbultos;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Bultos
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

