<?php

namespace DataBundle\Entity;

/**
 * FacturaCompra
 */
class FacturaCompra
{
    /**
     * @var integer
     */
    private $faccomId;

    /**
     * @var string
     */
    private $faccomNumerofactura;

    /**
     * @var float
     */
    private $faccomSubtotal;

    /**
     * @var float
     */
    private $faccomIva;

    /**
     * @var float
     */
    private $faccomValoriva;

    /**
     * @var float
     */
    private $faccomValoriva0;

    /**
     * @var float
     */
    private $faccomIce;

    /**
     * @var float
     */
    private $faccomValorice;

    /**
     * @var float
     */
    private $faccomDescuento;

    /**
     * @var float
     */
    private $faccomTotal;

    /**
     * @var \DateTime
     */
    private $faccomFecha;

    /**
     * @var integer
     */
    private $faccomNumeroproductos;

    /**
     * @var string
     */
    private $faccomEstado;

    /**
     * @var string
     */
    private $faccomSerie;

    /**
     * @var string
     */
    private $faccomTipodoc;

    /**
     * @var \DataBundle\Entity\EmpresaProveedora
     */
    private $emppro;

    /**
     * @var \DataBundle\Entity\FormaPago
     */
    private $forpag;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get faccomId
     *
     * @return integer
     */
    public function getFaccomId()
    {
        return $this->faccomId;
    }

    /**
     * Set faccomNumerofactura
     *
     * @param string $faccomNumerofactura
     *
     * @return FacturaCompra
     */
    public function setFaccomNumerofactura($faccomNumerofactura)
    {
        $this->faccomNumerofactura = $faccomNumerofactura;

        return $this;
    }

    /**
     * Get faccomNumerofactura
     *
     * @return string
     */
    public function getFaccomNumerofactura()
    {
        return $this->faccomNumerofactura;
    }

    /**
     * Set faccomSubtotal
     *
     * @param float $faccomSubtotal
     *
     * @return FacturaCompra
     */
    public function setFaccomSubtotal($faccomSubtotal)
    {
        $this->faccomSubtotal = $faccomSubtotal;

        return $this;
    }

    /**
     * Get faccomSubtotal
     *
     * @return float
     */
    public function getFaccomSubtotal()
    {
        return $this->faccomSubtotal;
    }

    /**
     * Set faccomIva
     *
     * @param float $faccomIva
     *
     * @return FacturaCompra
     */
    public function setFaccomIva($faccomIva)
    {
        $this->faccomIva = $faccomIva;

        return $this;
    }

    /**
     * Get faccomIva
     *
     * @return float
     */
    public function getFaccomIva()
    {
        return $this->faccomIva;
    }

    /**
     * Set faccomValoriva
     *
     * @param float $faccomValoriva
     *
     * @return FacturaCompra
     */
    public function setFaccomValoriva($faccomValoriva)
    {
        $this->faccomValoriva = $faccomValoriva;

        return $this;
    }

    /**
     * Get faccomValoriva
     *
     * @return float
     */
    public function getFaccomValoriva()
    {
        return $this->faccomValoriva;
    }

    /**
     * Set faccomValoriva0
     *
     * @param float $faccomValoriva0
     *
     * @return FacturaCompra
     */
    public function setFaccomValoriva0($faccomValoriva0)
    {
        $this->faccomValoriva0 = $faccomValoriva0;

        return $this;
    }

    /**
     * Get faccomValoriva0
     *
     * @return float
     */
    public function getFaccomValoriva0()
    {
        return $this->faccomValoriva0;
    }

    /**
     * Set faccomIce
     *
     * @param float $faccomIce
     *
     * @return FacturaCompra
     */
    public function setFaccomIce($faccomIce)
    {
        $this->faccomIce = $faccomIce;

        return $this;
    }

    /**
     * Get faccomIce
     *
     * @return float
     */
    public function getFaccomIce()
    {
        return $this->faccomIce;
    }

    /**
     * Set faccomValorice
     *
     * @param float $faccomValorice
     *
     * @return FacturaCompra
     */
    public function setFaccomValorice($faccomValorice)
    {
        $this->faccomValorice = $faccomValorice;

        return $this;
    }

    /**
     * Get faccomValorice
     *
     * @return float
     */
    public function getFaccomValorice()
    {
        return $this->faccomValorice;
    }

    /**
     * Set faccomDescuento
     *
     * @param float $faccomDescuento
     *
     * @return FacturaCompra
     */
    public function setFaccomDescuento($faccomDescuento)
    {
        $this->faccomDescuento = $faccomDescuento;

        return $this;
    }

    /**
     * Get faccomDescuento
     *
     * @return float
     */
    public function getFaccomDescuento()
    {
        return $this->faccomDescuento;
    }

    /**
     * Set faccomTotal
     *
     * @param float $faccomTotal
     *
     * @return FacturaCompra
     */
    public function setFaccomTotal($faccomTotal)
    {
        $this->faccomTotal = $faccomTotal;

        return $this;
    }

    /**
     * Get faccomTotal
     *
     * @return float
     */
    public function getFaccomTotal()
    {
        return $this->faccomTotal;
    }

    /**
     * Set faccomFecha
     *
     * @param \DateTime $faccomFecha
     *
     * @return FacturaCompra
     */
    public function setFaccomFecha($faccomFecha)
    {
        $this->faccomFecha = $faccomFecha;

        return $this;
    }

    /**
     * Get faccomFecha
     *
     * @return \DateTime
     */
    public function getFaccomFecha()
    {
        return $this->faccomFecha;
    }

    /**
     * Set faccomNumeroproductos
     *
     * @param integer $faccomNumeroproductos
     *
     * @return FacturaCompra
     */
    public function setFaccomNumeroproductos($faccomNumeroproductos)
    {
        $this->faccomNumeroproductos = $faccomNumeroproductos;

        return $this;
    }

    /**
     * Get faccomNumeroproductos
     *
     * @return integer
     */
    public function getFaccomNumeroproductos()
    {
        return $this->faccomNumeroproductos;
    }

    /**
     * Set faccomEstado
     *
     * @param string $faccomEstado
     *
     * @return FacturaCompra
     */
    public function setFaccomEstado($faccomEstado)
    {
        $this->faccomEstado = $faccomEstado;

        return $this;
    }

    /**
     * Get faccomEstado
     *
     * @return string
     */
    public function getFaccomEstado()
    {
        return $this->faccomEstado;
    }

    /**
     * Set faccomSerie
     *
     * @param string $faccomSerie
     *
     * @return FacturaCompra
     */
    public function setFaccomSerie($faccomSerie)
    {
        $this->faccomSerie = $faccomSerie;

        return $this;
    }

    /**
     * Get faccomSerie
     *
     * @return string
     */
    public function getFaccomSerie()
    {
        return $this->faccomSerie;
    }

    /**
     * Set faccomTipodoc
     *
     * @param string $faccomTipodoc
     *
     * @return FacturaCompra
     */
    public function setFaccomTipodoc($faccomTipodoc)
    {
        $this->faccomTipodoc = $faccomTipodoc;

        return $this;
    }

    /**
     * Get faccomTipodoc
     *
     * @return string
     */
    public function getFaccomTipodoc()
    {
        return $this->faccomTipodoc;
    }

    /**
     * Set emppro
     *
     * @param \DataBundle\Entity\EmpresaProveedora $emppro
     *
     * @return FacturaCompra
     */
    public function setEmppro(\DataBundle\Entity\EmpresaProveedora $emppro = null)
    {
        $this->emppro = $emppro;

        return $this;
    }

    /**
     * Get emppro
     *
     * @return \DataBundle\Entity\EmpresaProveedora
     */
    public function getEmppro()
    {
        return $this->emppro;
    }

    /**
     * Set forpag
     *
     * @param \DataBundle\Entity\FormaPago $forpag
     *
     * @return FacturaCompra
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
     * @return FacturaCompra
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

