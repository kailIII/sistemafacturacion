<?php

namespace BackBundle\Entity;

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
     * @var \BackBundle\Entity\Pedido
     */
    private $ped;

    /**
     * @var \BackBundle\Entity\Producto
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
     * @param \BackBundle\Entity\Pedido $ped
     *
     * @return DetallePedido
     */
    public function setPed(\BackBundle\Entity\Pedido $ped = null)
    {
        $this->ped = $ped;

        return $this;
    }

    /**
     * Get ped
     *
     * @return \BackBundle\Entity\Pedido
     */
    public function getPed()
    {
        return $this->ped;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetallePedido
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

