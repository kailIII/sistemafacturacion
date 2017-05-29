<?php

namespace DataBundle\Entity;

/**
 * DetalleAsignacion
 */
class DetalleAsignacion
{
    /**
     * @var integer
     */
    private $detasiId;

    /**
     * @var integer
     */
    private $detasiCantidad;

    /**
     * @var \DataBundle\Entity\AsignacionProducto
     */
    private $asipro;

    /**
     * @var \DataBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detasiId
     *
     * @return integer
     */
    public function getDetasiId()
    {
        return $this->detasiId;
    }

    /**
     * Set detasiCantidad
     *
     * @param integer $detasiCantidad
     *
     * @return DetalleAsignacion
     */
    public function setDetasiCantidad($detasiCantidad)
    {
        $this->detasiCantidad = $detasiCantidad;

        return $this;
    }

    /**
     * Get detasiCantidad
     *
     * @return integer
     */
    public function getDetasiCantidad()
    {
        return $this->detasiCantidad;
    }

    /**
     * Set asipro
     *
     * @param \DataBundle\Entity\AsignacionProducto $asipro
     *
     * @return DetalleAsignacion
     */
    public function setAsipro(\DataBundle\Entity\AsignacionProducto $asipro = null)
    {
        $this->asipro = $asipro;

        return $this;
    }

    /**
     * Get asipro
     *
     * @return \DataBundle\Entity\AsignacionProducto
     */
    public function getAsipro()
    {
        return $this->asipro;
    }

    /**
     * Set pro2
     *
     * @param \DataBundle\Entity\Producto $pro2
     *
     * @return DetalleAsignacion
     */
    public function setPro2(\DataBundle\Entity\Producto $pro2 = null)
    {
        $this->pro2 = $pro2;

        return $this;
    }

    /**
     * Get pro2
     *
     * @return \DataBundle\Entity\Producto
     */
    public function getPro2()
    {
        return $this->pro2;
    }
}

