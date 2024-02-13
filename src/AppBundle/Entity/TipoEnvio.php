<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEnvio
 *
 * @ORM\Table(name="tipo_envio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoEnvioRepository")
 */
class TipoEnvio
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
     * @ORM\Column(name="tipoenvio", type="string", length=255)
     */
    private $tipoenvio;


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
     * Set tipoenvio
     *
     * @param string $tipoenvio
     *
     * @return TipoEnvio
     */
    public function setTipoenvio($tipoenvio)
    {
        $this->tipoenvio = $tipoenvio;

        return $this;
    }

    /**
     * Get tipoenvio
     *
     * @return string
     */
    public function getTipoenvio()
    {
        return $this->tipoenvio;
    }
}

