<?php

namespace BackBundle\Entity;

/**
 * DetalleConsignacion
 */
class DetalleConsignacion
{
    /**
     * @var integer
     */
    private $detconId;

    /**
     * @var integer
     */
    private $detconCantidad;

    /**
     * @var float
     */
    private $detconValorunitario;

    /**
     * @var float
     */
    private $detconValortotal;

    /**
     * @var \BackBundle\Entity\Consignacion
     */
    private $con;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detconId
     *
     * @return integer
     */
    public function getDetconId()
    {
        return $this->detconId;
    }

    /**
     * Set detconCantidad
     *
     * @param integer $detconCantidad
     *
     * @return DetalleConsignacion
     */
    public function setDetconCantidad($detconCantidad)
    {
        $this->detconCantidad = $detconCantidad;

        return $this;
    }

    /**
     * Get detconCantidad
     *
     * @return integer
     */
    public function getDetconCantidad()
    {
        return $this->detconCantidad;
    }

    /**
     * Set detconValorunitario
     *
     * @param float $detconValorunitario
     *
     * @return DetalleConsignacion
     */
    public function setDetconValorunitario($detconValorunitario)
    {
        $this->detconValorunitario = $detconValorunitario;

        return $this;
    }

    /**
     * Get detconValorunitario
     *
     * @return float
     */
    public function getDetconValorunitario()
    {
        return $this->detconValorunitario;
    }

    /**
     * Set detconValortotal
     *
     * @param float $detconValortotal
     *
     * @return DetalleConsignacion
     */
    public function setDetconValortotal($detconValortotal)
    {
        $this->detconValortotal = $detconValortotal;

        return $this;
    }

    /**
     * Get detconValortotal
     *
     * @return float
     */
    public function getDetconValortotal()
    {
        return $this->detconValortotal;
    }

    /**
     * Set con
     *
     * @param \BackBundle\Entity\Consignacion $con
     *
     * @return DetalleConsignacion
     */
    public function setCon(\BackBundle\Entity\Consignacion $con = null)
    {
        $this->con = $con;

        return $this;
    }

    /**
     * Get con
     *
     * @return \BackBundle\Entity\Consignacion
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleConsignacion
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

