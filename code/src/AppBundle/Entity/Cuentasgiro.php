<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentasgiro
 *
 * @ORM\Table(name="cuentasgiro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CuentasgiroRepository")
 */
class Cuentasgiro
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
     * @ORM\Column(name="ctaotro", type="integer")
     */
    private $ctaotro;

    /**
     * @var string
     *
     * @ORM\Column(name="monotro", type="decimal", precision=10, scale=0)
     */
    private $monotro;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Cuentasyvalores")
     * @ORM\JoinColumn(name="idCuentasyvalores", referencedColumnName="id")
     */
    private $idCuentasyvalores;


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
     * Set ctaotro
     *
     * @param integer $ctaotro
     *
     * @return Cuentasgiro
     */
    public function setCtaotro($ctaotro)
    {
        $this->ctaotro = $ctaotro;

        return $this;
    }

    /**
     * Get ctaotro
     *
     * @return int
     */
    public function getCtaotro()
    {
        return $this->ctaotro;
    }

    /**
     * Set monotro
     *
     * @param string $monotro
     *
     * @return Cuentasgiro
     */
    public function setMonotro($monotro)
    {
        $this->monotro = $monotro;

        return $this;
    }

    /**
     * Get monotro
     *
     * @return string
     */
    public function getMonotro()
    {
        return $this->monotro;
    }

    /**
     * Set idCuentasyvalores
     *
     * @param integer $idCuentasyvalores
     *
     * @return Cuentasgiro
     */
    public function setIdCuentasyvalores($idCuentasyvalores)
    {
        $this->idCuentasyvalores = $idCuentasyvalores;

        return $this;
    }

    /**
     * Get idCuentasyvalores
     *
     * @return int
     */
    public function getIdCuentasyvalores()
    {
        return $this->idCuentasyvalores;
    }
}

