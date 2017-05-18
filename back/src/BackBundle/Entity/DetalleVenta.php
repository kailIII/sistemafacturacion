<?php

namespace BackBundle\Entity;

/**
 * DetalleVenta
 */
class DetalleVenta
{
    /**
     * @var integer
     */
    private $detvenId;

    /**
     * @var integer
     */
    private $detvenCantidad;

    /**
     * @var float
     */
    private $detvenValorunitario;

    /**
     * @var float
     */
    private $detvenValortotal;

    /**
     * @var \BackBundle\Entity\FacturaVenta
     */
    private $facven;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detvenId
     *
     * @return integer
     */
    public function getDetvenId()
    {
        return $this->detvenId;
    }

    /**
     * Set detvenCantidad
     *
     * @param integer $detvenCantidad
     *
     * @return DetalleVenta
     */
    public function setDetvenCantidad($detvenCantidad)
    {
        $this->detvenCantidad = $detvenCantidad;

        return $this;
    }

    /**
     * Get detvenCantidad
     *
     * @return integer
     */
    public function getDetvenCantidad()
    {
        return $this->detvenCantidad;
    }

    /**
     * Set detvenValorunitario
     *
     * @param float $detvenValorunitario
     *
     * @return DetalleVenta
     */
    public function setDetvenValorunitario($detvenValorunitario)
    {
        $this->detvenValorunitario = $detvenValorunitario;

        return $this;
    }

    /**
     * Get detvenValorunitario
     *
     * @return float
     */
    public function getDetvenValorunitario()
    {
        return $this->detvenValorunitario;
    }

    /**
     * Set detvenValortotal
     *
     * @param float $detvenValortotal
     *
     * @return DetalleVenta
     */
    public function setDetvenValortotal($detvenValortotal)
    {
        $this->detvenValortotal = $detvenValortotal;

        return $this;
    }

    /**
     * Get detvenValortotal
     *
     * @return float
     */
    public function getDetvenValortotal()
    {
        return $this->detvenValortotal;
    }

    /**
     * Set facven
     *
     * @param \BackBundle\Entity\FacturaVenta $facven
     *
     * @return DetalleVenta
     */
    public function setFacven(\BackBundle\Entity\FacturaVenta $facven = null)
    {
        $this->facven = $facven;

        return $this;
    }

    /**
     * Get facven
     *
     * @return \BackBundle\Entity\FacturaVenta
     */
    public function getFacven()
    {
        return $this->facven;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleVenta
     */
    public function setPro2(\BackBundle\Entity\Producto $pro2 = null)
    {
        $this->pro2 = $pro2;

        return $this;
    }

    /**
     * Get pro2
     *
     * @return \BackBundle\Entity\Producto
     */
    public function getPro2()
    {
        return $this->pro2;
    }
}

