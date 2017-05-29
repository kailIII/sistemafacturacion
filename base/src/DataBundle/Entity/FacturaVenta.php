<?php

namespace DataBundle\Entity;

/**
 * FacturaVenta
 */
class FacturaVenta
{
    /**
     * @var integer
     */
    private $facvenId;

    /**
     * @var string
     */
    private $facvenNumerofactura;

    /**
     * @var float
     */
    private $facvenSubtotal;

    /**
     * @var float
     */
    private $facvenIva;

    /**
     * @var float
     */
    private $facvenValoriva;

    /**
     * @var float
     */
    private $facvenValoriva0;

    /**
     * @var float
     */
    private $facvenIce;

    /**
     * @var float
     */
    private $facvenValorice;

    /**
     * @var float
     */
    private $facvenDescuento;

    /**
     * @var float
     */
    private $facvenTotal;

    /**
     * @var \DateTime
     */
    private $facvenFecha;

    /**
     * @var integer
     */
    private $facvenNumeroproductos;

    /**
     * @var string
     */
    private $facvenEstado;

    /**
     * @var string
     */
    private $facvenSerie;

    /**
     * @var \DataBundle\Entity\Cliente
     */
    private $cli;

    /**
     * @var \DataBundle\Entity\FormaPago
     */
    private $forpag;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get facvenId
     *
     * @return integer
     */
    public function getFacvenId()
    {
        return $this->facvenId;
    }

    /**
     * Set facvenNumerofactura
     *
     * @param string $facvenNumerofactura
     *
     * @return FacturaVenta
     */
    public function setFacvenNumerofactura($facvenNumerofactura)
    {
        $this->facvenNumerofactura = $facvenNumerofactura;

        return $this;
    }

    /**
     * Get facvenNumerofactura
     *
     * @return string
     */
    public function getFacvenNumerofactura()
    {
        return $this->facvenNumerofactura;
    }

    /**
     * Set facvenSubtotal
     *
     * @param float $facvenSubtotal
     *
     * @return FacturaVenta
     */
    public function setFacvenSubtotal($facvenSubtotal)
    {
        $this->facvenSubtotal = $facvenSubtotal;

        return $this;
    }

    /**
     * Get facvenSubtotal
     *
     * @return float
     */
    public function getFacvenSubtotal()
    {
        return $this->facvenSubtotal;
    }

    /**
     * Set facvenIva
     *
     * @param float $facvenIva
     *
     * @return FacturaVenta
     */
    public function setFacvenIva($facvenIva)
    {
        $this->facvenIva = $facvenIva;

        return $this;
    }

    /**
     * Get facvenIva
     *
     * @return float
     */
    public function getFacvenIva()
    {
        return $this->facvenIva;
    }

    /**
     * Set facvenValoriva
     *
     * @param float $facvenValoriva
     *
     * @return FacturaVenta
     */
    public function setFacvenValoriva($facvenValoriva)
    {
        $this->facvenValoriva = $facvenValoriva;

        return $this;
    }

    /**
     * Get facvenValoriva
     *
     * @return float
     */
    public function getFacvenValoriva()
    {
        return $this->facvenValoriva;
    }

    /**
     * Set facvenValoriva0
     *
     * @param float $facvenValoriva0
     *
     * @return FacturaVenta
     */
    public function setFacvenValoriva0($facvenValoriva0)
    {
        $this->facvenValoriva0 = $facvenValoriva0;

        return $this;
    }

    /**
     * Get facvenValoriva0
     *
     * @return float
     */
    public function getFacvenValoriva0()
    {
        return $this->facvenValoriva0;
    }

    /**
     * Set facvenIce
     *
     * @param float $facvenIce
     *
     * @return FacturaVenta
     */
    public function setFacvenIce($facvenIce)
    {
        $this->facvenIce = $facvenIce;

        return $this;
    }

    /**
     * Get facvenIce
     *
     * @return float
     */
    public function getFacvenIce()
    {
        return $this->facvenIce;
    }

    /**
     * Set facvenValorice
     *
     * @param float $facvenValorice
     *
     * @return FacturaVenta
     */
    public function setFacvenValorice($facvenValorice)
    {
        $this->facvenValorice = $facvenValorice;

        return $this;
    }

    /**
     * Get facvenValorice
     *
     * @return float
     */
    public function getFacvenValorice()
    {
        return $this->facvenValorice;
    }

    /**
     * Set facvenDescuento
     *
     * @param float $facvenDescuento
     *
     * @return FacturaVenta
     */
    public function setFacvenDescuento($facvenDescuento)
    {
        $this->facvenDescuento = $facvenDescuento;

        return $this;
    }

    /**
     * Get facvenDescuento
     *
     * @return float
     */
    public function getFacvenDescuento()
    {
        return $this->facvenDescuento;
    }

    /**
     * Set facvenTotal
     *
     * @param float $facvenTotal
     *
     * @return FacturaVenta
     */
    public function setFacvenTotal($facvenTotal)
    {
        $this->facvenTotal = $facvenTotal;

        return $this;
    }

    /**
     * Get facvenTotal
     *
     * @return float
     */
    public function getFacvenTotal()
    {
        return $this->facvenTotal;
    }

    /**
     * Set facvenFecha
     *
     * @param \DateTime $facvenFecha
     *
     * @return FacturaVenta
     */
    public function setFacvenFecha($facvenFecha)
    {
        $this->facvenFecha = $facvenFecha;

        return $this;
    }

    /**
     * Get facvenFecha
     *
     * @return \DateTime
     */
    public function getFacvenFecha()
    {
        return $this->facvenFecha;
    }

    /**
     * Set facvenNumeroproductos
     *
     * @param integer $facvenNumeroproductos
     *
     * @return FacturaVenta
     */
    public function setFacvenNumeroproductos($facvenNumeroproductos)
    {
        $this->facvenNumeroproductos = $facvenNumeroproductos;

        return $this;
    }

    /**
     * Get facvenNumeroproductos
     *
     * @return integer
     */
    public function getFacvenNumeroproductos()
    {
        return $this->facvenNumeroproductos;
    }

    /**
     * Set facvenEstado
     *
     * @param string $facvenEstado
     *
     * @return FacturaVenta
     */
    public function setFacvenEstado($facvenEstado)
    {
        $this->facvenEstado = $facvenEstado;

        return $this;
    }

    /**
     * Get facvenEstado
     *
     * @return string
     */
    public function getFacvenEstado()
    {
        return $this->facvenEstado;
    }

    /**
     * Set facvenSerie
     *
     * @param string $facvenSerie
     *
     * @return FacturaVenta
     */
    public function setFacvenSerie($facvenSerie)
    {
        $this->facvenSerie = $facvenSerie;

        return $this;
    }

    /**
     * Get facvenSerie
     *
     * @return string
     */
    public function getFacvenSerie()
    {
        return $this->facvenSerie;
    }

    /**
     * Set cli
     *
     * @param \DataBundle\Entity\Cliente $cli
     *
     * @return FacturaVenta
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
     * Set forpag
     *
     * @param \DataBundle\Entity\FormaPago $forpag
     *
     * @return FacturaVenta
     */
    public function setForpag(\DataBundle\Entity\FormaPago $forpag = null)
    {
        $this->forpag = $forpag;

        return $this;
    }

    /**
     * Get forpag
     *
     * @return \DataBundle\Entity\FormaPago
     */
    public function getForpag()
    {
        return $this->forpag;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return FacturaVenta
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

