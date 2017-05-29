<?php

namespace DataBundle\Entity;

/**
 * DetalleEgreso
 */
class DetalleEgreso
{
    /**
     * @var integer
     */
    private $detegrId;

    /**
     * @var \DataBundle\Entity\Compra
     */
    private $com;


    /**
     * Get detegrId
     *
     * @return integer
     */
    public function getDetegrId()
    {
        return $this->detegrId;
    }

    /**
     * Set com
     *
     * @param \DataBundle\Entity\Compra $com
     *
     * @return DetalleEgreso
     */
    public function setCom(\DataBundle\Entity\Compra $com = null)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get com
     *
     * @return \DataBundle\Entity\Compra
     */
    public function getCom()
    {
        return $this->com;
    }
}

