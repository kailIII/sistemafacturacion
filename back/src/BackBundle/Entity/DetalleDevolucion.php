<?php

namespace BackBundle\Entity;

/**
 * DetalleDevolucion
 */
class DetalleDevolucion
{
    /**
     * @var integer
     */
    private $detdevId;

    /**
     * @var integer
     */
    private $detdevCantidad;

    /**
     * @var string
     */
    private $detdevMotivo;

    /**
     * @var \BackBundle\Entity\Devolucion
     */
    private $dev;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detdevId
     *
     * @return integer
     */
    public function getDetdevId()
    {
        return $this->detdevId;
    }

    /**
     * Set detdevCantidad
     *
     * @param integer $detdevCantidad
     *
     * @return DetalleDevolucion
     */
    public function setDetdevCantidad($detdevCantidad)
    {
        $this->detdevCantidad = $detdevCantidad;

        return $this;
    }

    /**
     * Get detdevCantidad
     *
     * @return integer
     */
    public function getDetdevCantidad()
    {
        return $this->detdevCantidad;
    }

    /**
     * Set detdevMotivo
     *
     * @param string $detdevMotivo
     *
     * @return DetalleDevolucion
     */
    public function setDetdevMotivo($detdevMotivo)
    {
        $this->detdevMotivo = $detdevMotivo;

        return $this;
    }

    /**
     * Get detdevMotivo
     *
     * @return string
     */
    public function getDetdevMotivo()
    {
        return $this->detdevMotivo;
    }

    /**
     * Set dev
     *
     * @param \BackBundle\Entity\Devolucion $dev
     *
     * @return DetalleDevolucion
     */
    public function setDev(\BackBundle\Entity\Devolucion $dev = null)
    {
        $this->dev = $dev;

        return $this;
    }

    /**
     * Get dev
     *
     * @return \BackBundle\Entity\Devolucion
     */
    public function getDev()
    {
        return $this->dev;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleDevolucion
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

