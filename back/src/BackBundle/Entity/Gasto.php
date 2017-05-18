<?php

namespace BackBundle\Entity;

/**
 * Gasto
 */
class Gasto
{
    /**
     * @var integer
     */
    private $gasId;

    /**
     * @var string
     */
    private $gasNumero;

    /**
     * @var \DateTime
     */
    private $gasFecha;

    /**
     * @var float
     */
    private $gasSubtotal;

    /**
     * @var integer
     */
    private $gasIva;

    /**
     * @var float
     */
    private $gasValoriva;

    /**
     * @var float
     */
    private $gasValoriva0;

    /**
     * @var integer
     */
    private $gasIce;

    /**
     * @var float
     */
    private $gasValorice;

    /**
     * @var float
     */
    private $gasDescuento;

    /**
     * @var float
     */
    private $gasTotal;

    /**
     * @var string
     */
    private $gasEstado;

    /**
     * @var \BackBundle\Entity\EmpleadoLocal
     */
    private $emploc;

    /**
     * @var \BackBundle\Entity\LocalSucursal
     */
    private $loc;

    /**
     * @var \BackBundle\Entity\Localidad
     */
    private $loca;


    /**
     * Get gasId
     *
     * @return integer
     */
    public function getGasId()
    {
        return $this->gasId;
    }

    /**
     * Set gasNumero
     *
     * @param string $gasNumero
     *
     * @return Gasto
     */
    public function setGasNumero($gasNumero)
    {
        $this->gasNumero = $gasNumero;

        return $this;
    }

    /**
     * Get gasNumero
     *
     * @return string
     */
    public function getGasNumero()
    {
        return $this->gasNumero;
    }

    /**
     * Set gasFecha
     *
     * @param \DateTime $gasFecha
     *
     * @return Gasto
     */
    public function setGasFecha($gasFecha)
    {
        $this->gasFecha = $gasFecha;

        return $this;
    }

    /**
     * Get gasFecha
     *
     * @return \DateTime
     */
    public function getGasFecha()
    {
        return $this->gasFecha;
    }

    /**
     * Set gasSubtotal
     *
     * @param float $gasSubtotal
     *
     * @return Gasto
     */
    public function setGasSubtotal($gasSubtotal)
    {
        $this->gasSubtotal = $gasSubtotal;

        return $this;
    }

    /**
     * Get gasSubtotal
     *
     * @return float
     */
    public function getGasSubtotal()
    {
        return $this->gasSubtotal;
    }

    /**
     * Set gasIva
     *
     * @param integer $gasIva
     *
     * @return Gasto
     */
    public function setGasIva($gasIva)
    {
        $this->gasIva = $gasIva;

        return $this;
    }

    /**
     * Get gasIva
     *
     * @return integer
     */
    public function getGasIva()
    {
        return $this->gasIva;
    }

    /**
     * Set gasValoriva
     *
     * @param float $gasValoriva
     *
     * @return Gasto
     */
    public function setGasValoriva($gasValoriva)
    {
        $this->gasValoriva = $gasValoriva;

        return $this;
    }

    /**
     * Get gasValoriva
     *
     * @return float
     */
    public function getGasValoriva()
    {
        return $this->gasValoriva;
    }

    /**
     * Set gasValoriva0
     *
     * @param float $gasValoriva0
     *
     * @return Gasto
     */
    public function setGasValoriva0($gasValoriva0)
    {
        $this->gasValoriva0 = $gasValoriva0;

        return $this;
    }

    /**
     * Get gasValoriva0
     *
     * @return float
     */
    public function getGasValoriva0()
    {
        return $this->gasValoriva0;
    }

    /**
     * Set gasIce
     *
     * @param integer $gasIce
     *
     * @return Gasto
     */
    public function setGasIce($gasIce)
    {
        $this->gasIce = $gasIce;

        return $this;
    }

    /**
     * Get gasIce
     *
     * @return integer
     */
    public function getGasIce()
    {
        return $this->gasIce;
    }

    /**
     * Set gasValorice
     *
     * @param float $gasValorice
     *
     * @return Gasto
     */
    public function setGasValorice($gasValorice)
    {
        $this->gasValorice = $gasValorice;

        return $this;
    }

    /**
     * Get gasValorice
     *
     * @return float
     */
    public function getGasValorice()
    {
        return $this->gasValorice;
    }

    /**
     * Set gasDescuento
     *
     * @param float $gasDescuento
     *
     * @return Gasto
     */
    public function setGasDescuento($gasDescuento)
    {
        $this->gasDescuento = $gasDescuento;

        return $this;
    }

    /**
     * Get gasDescuento
     *
     * @return float
     */
    public function getGasDescuento()
    {
        return $this->gasDescuento;
    }

    /**
     * Set gasTotal
     *
     * @param float $gasTotal
     *
     * @return Gasto
     */
    public function setGasTotal($gasTotal)
    {
        $this->gasTotal = $gasTotal;

        return $this;
    }

    /**
     * Get gasTotal
     *
     * @return float
     */
    public function getGasTotal()
    {
        return $this->gasTotal;
    }

    /**
     * Set gasEstado
     *
     * @param string $gasEstado
     *
     * @return Gasto
     */
    public function setGasEstado($gasEstado)
    {
        $this->gasEstado = $gasEstado;

        return $this;
    }

    /**
     * Get gasEstado
     *
     * @return string
     */
    public function getGasEstado()
    {
        return $this->gasEstado;
    }

    /**
     * Set emploc
     *
     * @param \BackBundle\Entity\EmpleadoLocal $emploc
     *
     * @return Gasto
     */
    public function setEmploc(\BackBundle\Entity\EmpleadoLocal $emploc = null)
    {
        $this->emploc = $emploc;

        return $this;
    }

    /**
     * Get emploc
     *
     * @return \BackBundle\Entity\EmpleadoLocal
     */
    public function getEmploc()
    {
        return $this->emploc;
    }

    /**
     * Set loc
     *
     * @param \BackBundle\Entity\LocalSucursal $loc
     *
     * @return Gasto
     */
    public function setLoc(\BackBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \BackBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set loca
     *
     * @param \BackBundle\Entity\Localidad $loca
     *
     * @return Gasto
     */
    public function setLoca(\BackBundle\Entity\Localidad $loca = null)
    {
        $this->loca = $loca;

        return $this;
    }

    /**
     * Get loca
     *
     * @return \BackBundle\Entity\Localidad
     */
    public function getLoca()
    {
        return $this->loca;
    }
}

