<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Venta
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
     * @param \DataBundle\Entity\Venta $ven
     *
     * @return DetalleIngreso
     */
    public function setVen(\DataBundle\Entity\Venta $ven = null)
    {
        $this->ven = $ven;

        return $this;
    }

    /**
     * Get ven
     *
     * @return \DataBundle\Entity\Venta
     */
    public function getVen()
    {
        return $this->ven;
    }
}

