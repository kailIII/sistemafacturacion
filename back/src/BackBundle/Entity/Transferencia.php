<?php

namespace BackBundle\Entity;

/**
 * Transferencia
 */
class Transferencia
{
    /**
     * @var integer
     */
    private $traId;

    /**
     * @var string
     */
    private $traNumerodocumento;

    /**
     * @var \DateTime
     */
    private $traFecha;

    /**
     * @var float
     */
    private $traValor;

    /**
     * @var \BackBundle\Entity\Cuenta
     */
    private $cue;


    /**
     * Get traId
     *
     * @return integer
     */
    public function getTraId()
    {
        return $this->traId;
    }

    /**
     * Set traNumerodocumento
     *
     * @param string $traNumerodocumento
     *
     * @return Transferencia
     */
    public function setTraNumerodocumento($traNumerodocumento)
    {
        $this->traNumerodocumento = $traNumerodocumento;

        return $this;
    }

    /**
     * Get traNumerodocumento
     *
     * @return string
     */
    public function getTraNumerodocumento()
    {
        return $this->traNumerodocumento;
    }

    /**
     * Set traFecha
     *
     * @param \DateTime $traFecha
     *
     * @return Transferencia
     */
    public function setTraFecha($traFecha)
    {
        $this->traFecha = $traFecha;

        return $this;
    }

    /**
     * Get traFecha
     *
     * @return \DateTime
     */
    public function getTraFecha()
    {
        return $this->traFecha;
    }

    /**
     * Set traValor
     *
     * @param float $traValor
     *
     * @return Transferencia
     */
    public function setTraValor($traValor)
    {
        $this->traValor = $traValor;

        return $this;
    }

    /**
     * Get traValor
     *
     * @return float
     */
    public function getTraValor()
    {
        return $this->traValor;
    }

    /**
     * Set cue
     *
     * @param \BackBundle\Entity\Cuenta $cue
     *
     * @return Transferencia
     */
    public function setCue(\BackBundle\Entity\Cuenta $cue = null)
    {
        $this->cue = $cue;

        return $this;
    }

    /**
     * Get cue
     *
     * @return \BackBundle\Entity\Cuenta
     */
    public function getCue()
    {
        return $this->cue;
    }
}

