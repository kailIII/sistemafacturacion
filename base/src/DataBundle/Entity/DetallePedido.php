<?php

namespace DataBundle\Entity;

/**
 * DetallePedido
 */
class DetallePedido
{
    /**
     * @var integer
     */
    private $detpedId;

    /**
     * @var integer
     */
    private $detpedCantidad;

    /**
     * @var \DataBundle\Entity\Pedido
     */
    private $ped;

    /**
     * @var \DataBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detpedId
     *
     * @return integer
     */
    public function getDetpedId()
    {
        return $this->detpedId;
    }

    /**
     * Set detpedCantidad
     *
     * @param integer $detpedCantidad
     *
     * @return DetallePedido
     */
    public function setDetpedCantidad($detpedCantidad)
    {
        $this->detpedCantidad = $detpedCantidad;

        return $this;
    }

    /**
     * Get detpedCantidad
     *
     * @return integer
     */
    public function getDetpedCantidad()
    {
        return $this->detpedCantidad;
    }

    /**
     * Set ped
     *
     * @param \DataBundle\Entity\Pedido $ped
     *
     * @return DetallePedido
     */
    public function setPed(\DataBundle\Entity\Pedido $ped = null)
    {
        $this->ped = $ped;

        return $this;
    }

    /**
     * Get ped
     *
     * @return \DataBundle\Entity\Pedido
     */
    public function getPed()
    {
        return $this->ped;
    }

    /**
     * Set pro2
     *
     * @param \DataBundle\Entity\Producto $pro2
     *
     * @return DetallePedido
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

