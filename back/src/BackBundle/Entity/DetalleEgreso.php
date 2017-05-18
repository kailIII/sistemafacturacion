<?php

namespace BackBundle\Entity;

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
     * @var \BackBundle\Entity\Compra
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
     * @param \BackBundle\Entity\Compra $com
     *
     * @return DetalleEgreso
     */
    public function setCom(\BackBundle\Entity\Compra $com = null)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get com
     *
     * @return \BackBundle\Entity\Compra
     */
    public function getCom()
    {
        return $this->com;
    }
}

