<?php

namespace BackBundle\Entity;

/**
 * DetalleGasto
 */
class DetalleGasto
{
    /**
     * @var integer
     */
    private $detgasId;

    /**
     * @var integer
     */
    private $detgasCantidad;

    /**
     * @var float
     */
    private $detgasValorunitario;

    /**
     * @var float
     */
    private $detgasValortotal;

    /**
     * @var \BackBundle\Entity\Gasto
     */
    private $gas;

    /**
     * @var \BackBundle\Entity\ProductoExtra
     */
    private $proext;


    /**
     * Get detgasId
     *
     * @return integer
     */
    public function getDetgasId()
    {
        return $this->detgasId;
    }

    /**
     * Set detgasCantidad
     *
     * @param integer $detgasCantidad
     *
     * @return DetalleGasto
     */
    public function setDetgasCantidad($detgasCantidad)
    {
        $this->detgasCantidad = $detgasCantidad;

        return $this;
    }

    /**
     * Get detgasCantidad
     *
     * @return integer
     */
    public function getDetgasCantidad()
    {
        return $this->detgasCantidad;
    }

    /**
     * Set detgasValorunitario
     *
     * @param float $detgasValorunitario
     *
     * @return DetalleGasto
     */
    public function setDetgasValorunitario($detgasValorunitario)
    {
        $this->detgasValorunitario = $detgasValorunitario;

        return $this;
    }

    /**
     * Get detgasValorunitario
     *
     * @return float
     */
    public function getDetgasValorunitario()
    {
        return $this->detgasValorunitario;
    }

    /**
     * Set detgasValortotal
     *
     * @param float $detgasValortotal
     *
     * @return DetalleGasto
     */
    public function setDetgasValortotal($detgasValortotal)
    {
        $this->detgasValortotal = $detgasValortotal;

        return $this;
    }

    /**
     * Get detgasValortotal
     *
     * @return float
     */
    public function getDetgasValortotal()
    {
        return $this->detgasValortotal;
    }

    /**
     * Set gas
     *
     * @param \BackBundle\Entity\Gasto $gas
     *
     * @return DetalleGasto
     */
    public function setGas(\BackBundle\Entity\Gasto $gas = null)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return \BackBundle\Entity\Gasto
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set proext
     *
     * @param \BackBundle\Entity\ProductoExtra $proext
     *
     * @return DetalleGasto
     */
    public function setProext(\BackBundle\Entity\ProductoExtra $proext = null)
    {
        $this->proext = $proext;

        return $this;
    }

    /**
     * Get proext
     *
     * @return \BackBundle\Entity\ProductoExtra
     */
    public function getProext()
    {
        return $this->proext;
    }
}

