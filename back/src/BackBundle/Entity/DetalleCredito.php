<?php

namespace BackBundle\Entity;

/**
 * DetalleCredito
 */
class DetalleCredito
{
    /**
     * @var integer
     */
    private $detcreId;

    /**
     * @var integer
     */
    private $detcreNumerocuota;

    /**
     * @var float
     */
    private $detcreValorpagado;

    /**
     * @var \DateTime
     */
    private $detcreFechapagado = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $detcreSaldodeuda;

    /**
     * @var \BackBundle\Entity\Credito
     */
    private $cre;

    /**
     * @var \BackBundle\Entity\FormaPago
     */
    private $forpag;


    /**
     * Get detcreId
     *
     * @return integer
     */
    public function getDetcreId()
    {
        return $this->detcreId;
    }

    /**
     * Set detcreNumerocuota
     *
     * @param integer $detcreNumerocuota
     *
     * @return DetalleCredito
     */
    public function setDetcreNumerocuota($detcreNumerocuota)
    {
        $this->detcreNumerocuota = $detcreNumerocuota;

        return $this;
    }

    /**
     * Get detcreNumerocuota
     *
     * @return integer
     */
    public function getDetcreNumerocuota()
    {
        return $this->detcreNumerocuota;
    }

    /**
     * Set detcreValorpagado
     *
     * @param float $detcreValorpagado
     *
     * @return DetalleCredito
     */
    public function setDetcreValorpagado($detcreValorpagado)
    {
        $this->detcreValorpagado = $detcreValorpagado;

        return $this;
    }

    /**
     * Get detcreValorpagado
     *
     * @return float
     */
    public function getDetcreValorpagado()
    {
        return $this->detcreValorpagado;
    }

    /**
     * Set detcreFechapagado
     *
     * @param \DateTime $detcreFechapagado
     *
     * @return DetalleCredito
     */
    public function setDetcreFechapagado($detcreFechapagado)
    {
        $this->detcreFechapagado = $detcreFechapagado;

        return $this;
    }

    /**
     * Get detcreFechapagado
     *
     * @return \DateTime
     */
    public function getDetcreFechapagado()
    {
        return $this->detcreFechapagado;
    }

    /**
     * Set detcreSaldodeuda
     *
     * @param float $detcreSaldodeuda
     *
     * @return DetalleCredito
     */
    public function setDetcreSaldodeuda($detcreSaldodeuda)
    {
        $this->detcreSaldodeuda = $detcreSaldodeuda;

        return $this;
    }

    /**
     * Get detcreSaldodeuda
     *
     * @return float
     */
    public function getDetcreSaldodeuda()
    {
        return $this->detcreSaldodeuda;
    }

    /**
     * Set cre
     *
     * @param \BackBundle\Entity\Credito $cre
     *
     * @return DetalleCredito
     */
    public function setCre(\BackBundle\Entity\Credito $cre = null)
    {
        $this->cre = $cre;

        return $this;
    }

    /**
     * Get cre
     *
     * @return \BackBundle\Entity\Credito
     */
    public function getCre()
    {
        return $this->cre;
    }

    /**
     * Set forpag
     *
     * @param \BackBundle\Entity\FormaPago $forpag
     *
     * @return DetalleCredito
     */
    public function setForpag(\BackBundle\Entity\FormaPago $forpag = null)
    {
        $this->forpag = $forpag;

        return $this;
    }

    /**
     * Get forpag
     *
     * @return \BackBundle\Entity\FormaPago
     */
    public function getForpag()
    {
        return $this->forpag;
    }
}

