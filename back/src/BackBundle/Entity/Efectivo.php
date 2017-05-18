<?php

namespace BackBundle\Entity;

/**
 * Efectivo
 */
class Efectivo
{
    /**
     * @var integer
     */
    private $efeId;

    /**
     * @var float
     */
    private $efeValor;


    /**
     * Get efeId
     *
     * @return integer
     */
    public function getEfeId()
    {
        return $this->efeId;
    }

    /**
     * Set efeValor
     *
     * @param float $efeValor
     *
     * @return Efectivo
     */
    public function setEfeValor($efeValor)
    {
        $this->efeValor = $efeValor;

        return $this;
    }

    /**
     * Get efeValor
     *
     * @return float
     */
    public function getEfeValor()
    {
        return $this->efeValor;
    }
}

