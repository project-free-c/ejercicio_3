<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentasitem
 *
 * @ORM\Table(name="cuentasitem")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CuentasitemRepository")
 */
class Cuentasitem
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
     * @ORM\Column(name="otro", type="decimal", precision=10, scale=0)
     */
    private $otro;

    /**
     * @var int
     *
     * @ORM\Column(name="cta", type="integer")
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="sigval", type="string", length=255)
     */
    private $sigval;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=0)
     */
    private $valor;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Items")
     * @ORM\JoinColumn(name="idItem", referencedColumnName="id")
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
     * Set otro
     *
     * @param string $otro
     *
     * @return Cuentasitem
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    /**
     * Get otro
     *
     * @return string
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * Set cta
     *
     * @param integer $cta
     *
     * @return Cuentasitem
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return int
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set sigval
     *
     * @param string $sigval
     *
     * @return Cuentasitem
     */
    public function setSigval($sigval)
    {
        $this->sigval = $sigval;

        return $this;
    }

    /**
     * Get sigval
     *
     * @return string
     */
    public function getSigval()
    {
        return $this->sigval;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Cuentasitem
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     *
     * @return Cuentasitem
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

