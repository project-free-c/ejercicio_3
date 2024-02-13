<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * observacionesitem
 *
 * @ORM\Table(name="observacionesitem")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\observacionesitemRepository")
 */
class Observacionesitem
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
     * @ORM\Column(name="codobs", type="integer")
     */
    private $codobs;

    /**
     * @var string
     *
     * @ORM\Column(name="desobs", type="string", length=255)
     */
    private $desobs;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Items")
     * @ORM\JoinColumn(name="idItems", referencedColumnName="id")
     */
    private $idItem;


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
     * Set codobs
     *
     * @param integer $codobs
     *
     * @return observacionesitem
     */
    public function setCodobs($codobs)
    {
        $this->codobs = $codobs;

        return $this;
    }

    /**
     * Get codobs
     *
     * @return int
     */
    public function getCodobs()
    {
        return $this->codobs;
    }

    /**
     * Set desobs
     *
     * @param string $desobs
     *
     * @return observacionesitem
     */
    public function setDesobs($desobs)
    {
        $this->desobs = $desobs;

        return $this;
    }

    /**
     * Get desobs
     *
     * @return string
     */
    public function getDesobs()
    {
        return $this->desobs;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     *
     * @return observacionesitem
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return int
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}

