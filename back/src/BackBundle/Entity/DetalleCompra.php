<?php

namespace BackBundle\Entity;

/**
 * DetalleCompra
 */
class DetalleCompra
{
    /**
     * @var integer
     */
    private $detcomId;

    /**
     * @var integer
     */
    private $proId;

    /**
     * @var integer
     */
    private $detcomCantidad;

    /**
     * @var float
     */
    private $detcomCostounitario;

    /**
     * @var float
     */
    private $detcomCostototal;

    /**
     * @var \BackBundle\Entity\FacturaCompra
     */
    private $faccom;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Set detcomId
     *
     * @param integer $detcomId
     *
     * @return DetalleCompra
     */
    public function setDetcomId($detcomId)
    {
        $this->detcomId = $detcomId;

        return $this;
    }

    /**
     * Get detcomId
     *
     * @return integer
     */
    public function getDetcomId()
    {
        return $this->detcomId;
    }

    /**
     * Set proId
     *
     * @param integer $proId
     *
     * @return DetalleCompra
     */
    public function setProId($proId)
    {
        $this->proId = $proId;

        return $this;
    }

    /**
     * Get proId
     *
     * @return integer
     */
    public function getProId()
    {
        return $this->proId;
    }

    /**
     * Set detcomCantidad
     *
     * @param integer $detcomCantidad
     *
     * @return DetalleCompra
     */
    public function setDetcomCantidad($detcomCantidad)
    {
        $this->detcomCantidad = $detcomCantidad;

        return $this;
    }

    /**
     * Get detcomCantidad
     *
     * @return integer
     */
    public function getDetcomCantidad()
    {
        return $this->detcomCantidad;
    }

    /**
     * Set detcomCostounitario
     *
     * @param float $detcomCostounitario
     *
     * @return DetalleCompra
     */
    public function setDetcomCostounitario($detcomCostounitario)
    {
        $this->detcomCostounitario = $detcomCostounitario;

        return $this;
    }

    /**
     * Get detcomCostounitario
     *
     * @return float
     */
    public function getDetcomCostounitario()
    {
        return $this->detcomCostounitario;
    }

    /**
     * Set detcomCostototal
     *
     * @param float $detcomCostototal
     *
     * @return DetalleCompra
     */
    public function setDetcomCostototal($detcomCostototal)
    {
        $this->detcomCostototal = $detcomCostototal;

        return $this;
    }

    /**
     * Get detcomCostototal
     *
     * @return float
     */
    public function getDetcomCostototal()
    {
        return $this->detcomCostototal;
    }

    /**
     * Set faccom
     *
     * @param \BackBundle\Entity\FacturaCompra $faccom
     *
     * @return DetalleCompra
     */
    public function setFaccom(\BackBundle\Entity\FacturaCompra $faccom = null)
    {
        $this->faccom = $faccom;

        return $this;
    }

    /**
     * Get faccom
     *
     * @return \BackBundle\Entity\FacturaCompra
     */
    public function getFaccom()
    {
        return $this->faccom;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleCompra
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

