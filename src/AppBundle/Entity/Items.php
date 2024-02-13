<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemsRepository")
 */
class Items
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
     * @ORM\Column(name="numutem", type="integer")
     */
    private $numutem;

    /**
     * @var string
     *
     * @ORM\Column(name="dnombre", type="string", length=255)
     */
    private $dnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="dmarca", type="string", length=255)
     */
    private $dmarca;

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
     * Set numutem
     *
     * @param integer $numutem
     *
     * @return Items
     */
    public function setNumutem($numutem)
    {
        $this->numutem = $numutem;

        return $this;
    }

    /**
     * Get numutem
     *
     * @return int
     */
    public function getNumutem()
    {
        return $this->numutem;
    }

    /**
     * Set dnombre
     *
     * @param string $dnombre
     *
     * @return Items
     */
    public function setDnombre($dnombre)
    {
        $this->dnombre = $dnombre;

        return $this;
    }

    /**
     * Get dnombre
     *
     * @return string
     */
    public function getDnombre()
    {
        return $this->dnombre;
    }

    /**
     * Set dmarca
     *
     * @param string $dmarca
     *
     * @return Items
     */
    public function setDmarca($dmarca)
    {
        $this->dmarca = $dmarca;

        return $this;
    }

    /**
     * Get dmarca
     *
     * @return string
     */
    public function getDmarca()
    {
        return $this->dmarca;
    }

    /**
     * Set idCabeza
     *
     * @param integer $idCabeza
     *
     * @return Items
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

