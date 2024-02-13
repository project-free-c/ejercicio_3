<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bulto
 *
 * @ORM\Table(name="bulto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BultoRepository")
 */
class Bulto
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
     * @ORM\Column(name="destipbul", type="string", length=255)
     */
    private $destipbul;

    /**
     * @var int
     *
     * @ORM\Column(name="tpobul", type="integer")
     */
    private $tpobul;

    /**
     * @var int
     *
     * @ORM\Column(name="cantbul", type="integer")
     */
    private $cantbul;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Bultos")
     * @ORM\JoinColumn(name="idBultos", referencedColumnName="id")
     */
    private $idBultos;


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
     * Set destipbul
     *
     * @param string $destipbul
     *
     * @return Bulto
     */
    public function setDestipbul($destipbul)
    {
        $this->destipbul = $destipbul;

        return $this;
    }

    /**
     * Get destipbul
     *
     * @return string
     */
    public function getDestipbul()
    {
        return $this->destipbul;
    }

    /**
     * Set tpobul
     *
     * @param integer $tpobul
     *
     * @return Bulto
     */
    public function setTpobul($tpobul)
    {
        $this->tpobul = $tpobul;

        return $this;
    }

    /**
     * Get tpobul
     *
     * @return int
     */
    public function getTpobul()
    {
        return $this->tpobul;
    }

    /**
     * Set cantbul
     *
     * @param integer $cantbul
     *
     * @return Bulto
     */
    public function setCantbul($cantbul)
    {
        $this->cantbul = $cantbul;

        return $this;
    }

    /**
     * Get cantbul
     *
     * @return int
     */
    public function getCantbul()
    {
        return $this->cantbul;
    }

    /**
     * Set idBultos
     *
     * @param integer $idBultos
     *
     * @return Bulto
     */
    public function setIdBultos($idBultos)
    {
        $this->idBultos = $idBultos;

        return $this;
    }

    /**
     * Get idBultos
     *
     * @return int
     */
    public function getIdBultos()
    {
        return $this->idBultos;
    }
}

