<?php

namespace BackBundle\Entity;

/**
 * DetalleIngreso
 */
class DetalleIngreso
{
    /**
     * @var integer
     */
    private $detingId;

    /**
     * @var \BackBundle\Entity\Venta
     */
    private $ven;


    /**
     * Get detingId
     *
     * @return integer
     */
    public function getDetingId()
    {
        return $this->detingId;
    }

    /**
     * Set ven
     *
     * @param \BackBundle\Entity\Venta $ven
     *
     * @return DetalleIngreso
     */
    public function setVen(\BackBundle\Entity\Venta $ven = null)
    {
        $this->ven = $ven;

        return $this;
    }

    /**
     * Get ven
     *
     * @return \BackBundle\Entity\Venta
     */
    public function getVen()
    {
        return $this->ven;
    }
}

