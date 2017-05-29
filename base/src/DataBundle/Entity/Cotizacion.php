<?php

namespace DataBundle\Entity;

/**
 * Cotizacion
 */
class Cotizacion
{
    /**
     * @var integer
     */
    private $cotId;

    /**
     * @var string
     */
    private $cotNumerocotizacion;

    /**
     * @var float
     */
    private $cotSubtotal;

    /**
     * @var integer
     */
    private $cotIva;

    /**
     * @var float
     */
    private $cotValoriva;

    /**
     * @var float
     */
    private $cotValoriva0;

    /**
     * @var integer
     */
    private $cotIce;

    /**
     * @var float
     */
    private $cotValorice;

    /**
     * @var float
     */
    private $cotDescuento;

    /**
     * @var float
     */
    private $cotTotal;

    /**
     * @var \DateTime
     */
    private $cotFechaemision;

    /**
     * @var \DateTime
     */
    private $cotFechavalidez;

    /**
     * @var integer
     */
    private $cotNumeroproducto;

    /**
     * @var string
     */
    private $cotEstado;

    /**
     * @var string
     */
    private $cotSerie;

    /**
     * @var \DataBundle\Entity\Cliente
     */
    private $cli;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get cotId
     *
     * @return integer
     */
    public function getCotId()
    {
        return $this->cotId;
    }

    /**
     * Set cotNumerocotizacion
     *
     * @param string $cotNumerocotizacion
     *
     * @return Cotizacion
     */
    public function setCotNumerocotizacion($cotNumerocotizacion)
    {
        $this->cotNumerocotizacion = $cotNumerocotizacion;

        return $this;
    }

    /**
     * Get cotNumerocotizacion
     *
     * @return string
     */
    public function getCotNumerocotizacion()
    {
        return $this->cotNumerocotizacion;
    }

    /**
     * Set cotSubtotal
     *
     * @param float $cotSubtotal
     *
     * @return Cotizacion
     */
    public function setCotSubtotal($cotSubtotal)
    {
        $this->cotSubtotal = $cotSubtotal;

        return $this;
    }

    /**
     * Get cotSubtotal
     *
     * @return float
     */
    public function getCotSubtotal()
    {
        return $this->cotSubtotal;
    }

    /**
     * Set cotIva
     *
     * @param integer $cotIva
     *
     * @return Cotizacion
     */
    public function setCotIva($cotIva)
    {
        $this->cotIva = $cotIva;

        return $this;
    }

    /**
     * Get cotIva
     *
     * @return integer
     */
    public function getCotIva()
    {
        return $this->cotIva;
    }

    /**
     * Set cotValoriva
     *
     * @param float $cotValoriva
     *
     * @return Cotizacion
     */
    public function setCotValoriva($cotValoriva)
    {
        $this->cotValoriva = $cotValoriva;

        return $this;
    }

    /**
     * Get cotValoriva
     *
     * @return float
     */
    public function getCotValoriva()
    {
        return $this->cotValoriva;
    }

    /**
     * Set cotValoriva0
     *
     * @param float $cotValoriva0
     *
     * @return Cotizacion
     */
    public function setCotValoriva0($cotValoriva0)
    {
        $this->cotValoriva0 = $cotValoriva0;

        return $this;
    }

    /**
     * Get cotValoriva0
     *
     * @return float
     */
    public function getCotValoriva0()
    {
        return $this->cotValoriva0;
    }

    /**
     * Set cotIce
     *
     * @param integer $cotIce
     *
     * @return Cotizacion
     */
    public function setCotIce($cotIce)
    {
        $this->cotIce = $cotIce;

        return $this;
    }

    /**
     * Get cotIce
     *
     * @return integer
     */
    public function getCotIce()
    {
        return $this->cotIce;
    }

    /**
     * Set cotValorice
     *
     * @param float $cotValorice
     *
     * @return Cotizacion
     */
    public function setCotValorice($cotValorice)
    {
        $this->cotValorice = $cotValorice;

        return $this;
    }

    /**
     * Get cotValorice
     *
     * @return float
     */
    public function getCotValorice()
    {
        return $this->cotValorice;
    }

    /**
     * Set cotDescuento
     *
     * @param float $cotDescuento
     *
     * @return Cotizacion
     */
    public function setCotDescuento($cotDescuento)
    {
        $this->cotDescuento = $cotDescuento;

        return $this;
    }

    /**
     * Get cotDescuento
     *
     * @return float
     */
    public function getCotDescuento()
    {
        return $this->cotDescuento;
    }

    /**
     * Set cotTotal
     *
     * @param float $cotTotal
     *
     * @return Cotizacion
     */
    public function setCotTotal($cotTotal)
    {
        $this->cotTotal = $cotTotal;

        return $this;
    }

    /**
     * Get cotTotal
     *
     * @return float
     */
    public function getCotTotal()
    {
        return $this->cotTotal;
    }

    /**
     * Set cotFechaemision
     *
     * @param \DateTime $cotFechaemision
     *
     * @return Cotizacion
     */
    public function setCotFechaemision($cotFechaemision)
    {
        $this->cotFechaemision = $cotFechaemision;

        return $this;
    }

    /**
     * Get cotFechaemision
     *
     * @return \DateTime
     */
    public function getCotFechaemision()
    {
        return $this->cotFechaemision;
    }

    /**
     * Set cotFechavalidez
     *
     * @param \DateTime $cotFechavalidez
     *
     * @return Cotizacion
     */
    public function setCotFechavalidez($cotFechavalidez)
    {
        $this->cotFechavalidez = $cotFechavalidez;

        return $this;
    }

    /**
     * Get cotFechavalidez
     *
     * @return \DateTime
     */
    public function getCotFechavalidez()
    {
        return $this->cotFechavalidez;
    }

    /**
     * Set cotNumeroproducto
     *
     * @param integer $cotNumeroproducto
     *
     * @return Cotizacion
     */
    public function setCotNumeroproducto($cotNumeroproducto)
    {
        $this->cotNumeroproducto = $cotNumeroproducto;

        return $this;
    }

    /**
     * Get cotNumeroproducto
     *
     * @return integer
     */
    public function getCotNumeroproducto()
    {
        return $this->cotNumeroproducto;
    }

    /**
     * Set cotEstado
     *
     * @param string $cotEstado
     *
     * @return Cotizacion
     */
    public function setCotEstado($cotEstado)
    {
        $this->cotEstado = $cotEstado;

        return $this;
    }

    /**
     * Get cotEstado
     *
     * @return string
     */
    public function getCotEstado()
    {
        return $this->cotEstado;
    }

    /**
     * Set cotSerie
     *
     * @param string $cotSerie
     *
     * @return Cotizacion
     */
    public function setCotSerie($cotSerie)
    {
        $this->cotSerie = $cotSerie;

        return $this;
    }

    /**
     * Get cotSerie
     *
     * @return string
     */
    public function getCotSerie()
    {
        return $this->cotSerie;
    }

    /**
     * Set cli
     *
     * @param \DataBundle\Entity\Cliente $cli
     *
     * @return Cotizacion
     */
    public function setCli(\DataBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \DataBundle\Entity\Cliente
     */
    public function getCli()
    {
        return $this->cli;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return Cotizacion
     */
    public function setLoc(\DataBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \DataBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }
}

