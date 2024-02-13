<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabeza
 *
 * @ORM\Table(name="cabeza")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CabezaRepository")
 */
class Cabeza
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
     * @ORM\Column(name="form", type="integer")
     */
    private $form;

    /**
     * @var string
     *
     * @ORM\Column(name="numdentif", type="string", length=255)
     */
    private $numdentif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecvenci", type="datetime")
     */
    private $fecvenci;

    /**
     * @var int
     *
     * @ORM\Column(name="adu", type="integer")
     */
    private $adu;

    /**
     * @var string
     *
     * @ORM\Column(name="agente", type="string", length=255)
     */
    private $agente;

    /**
     * @var int
     *
     * @ORM\Column(name="tpodocto", type="integer")
     */
    private $tpodocto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoingr", type="string", length=255)
     */
    private $tipoingr;

    /**
     * @var string
     *
     * @ORM\Column(name="numaut", type="string", length=255)
     */
    private $numaut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecaut", type="datetime")
     */
    private $fecaut;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Log")
     * @ORM\JoinColumn(name="idlog", referencedColumnName="id")
     */
    private $idLog;


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
     * Set form
     *
     * @param integer $form
     *
     * @return Cabeza
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return int
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set numdentif
     *
     * @param string $numdentif
     *
     * @return Cabeza
     */
    public function setNumdentif($numdentif)
    {
        $this->numdentif = $numdentif;

        return $this;
    }

    /**
     * Get numdentif
     *
     * @return string
     */
    public function getNumdentif()
    {
        return $this->numdentif;
    }

    /**
     * Set fecvenci
     *
     * @param \DateTime $fecvenci
     *
     * @return Cabeza
     */
    public function setFecvenci($fecvenci)
    {
        $this->fecvenci = $fecvenci;

        return $this;
    }

    /**
     * Get fecvenci
     *
     * @return \DateTime
     */
    public function getFecvenci()
    {
        return $this->fecvenci;
    }

    /**
     * Set adu
     *
     * @param integer $adu
     *
     * @return Cabeza
     */
    public function setAdu($adu)
    {
        $this->adu = $adu;

        return $this;
    }

    /**
     * Get adu
     *
     * @return int
     */
    public function getAdu()
    {
        return $this->adu;
    }

    /**
     * Set agente
     *
     * @param string $agente
     *
     * @return Cabeza
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente
     *
     * @return string
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * Set tpodocto
     *
     * @param integer $tpodocto
     *
     * @return Cabeza
     */
    public function setTpodocto($tpodocto)
    {
        $this->tpodocto = $tpodocto;

        return $this;
    }

    /**
     * Get tpodocto
     *
     * @return int
     */
    public function getTpodocto()
    {
        return $this->tpodocto;
    }

    /**
     * Set tipoingr
     *
     * @param string $tipoingr
     *
     * @return Cabeza
     */
    public function setTipoingr($tipoingr)
    {
        $this->tipoingr = $tipoingr;

        return $this;
    }

    /**
     * Get tipoingr
     *
     * @return string
     */
    public function getTipoingr()
    {
        return $this->tipoingr;
    }

    /**
     * Set numaut
     *
     * @param string $numaut
     *
     * @return Cabeza
     */
    public function setNumaut($numaut)
    {
        $this->numaut = $numaut;

        return $this;
    }

    /**
     * Get numaut
     *
     * @return string
     */
    public function getNumaut()
    {
        return $this->numaut;
    }

    /**
     * Set fecaut
     *
     * @param \DateTime $fecaut
     *
     * @return Cabeza
     */
    public function setFecaut($fecaut)
    {
        $this->fecaut = $fecaut;

        return $this;
    }

    /**
     * Get fecaut
     *
     * @return \DateTime
     */
    public function getFecaut()
    {
        return $this->fecaut;
    }

    /**
     * Set idLog
     *
     * @param integer $idLog
     *
     * @return Cabeza
     */
    public function setIdLog($idLog)
    {
        $this->idLog = $idLog;

        return $this;
    }

    /**
     * Get idLog
     *
     * @return int
     */
    public function getIdLog()
    {
        return $this->idLog;
    }
}

