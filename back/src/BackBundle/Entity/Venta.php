<?php

namespace BackBundle\Entity;

/**
 * Venta
 */
class Venta
{
    /**
     * @var integer
     */
    private $venId;

    /**
     * @var \DateTime
     */
    private $venFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $venTotal;


    /**
     * Get venId
     *
     * @return integer
     */
    public function getVenId()
    {
        return $this->venId;
    }

    /**
     * Set venFecha
     *
     * @param \DateTime $venFecha
     *
     * @return Venta
     */
    public function setVenFecha($venFecha)
    {
        $this->venFecha = $venFecha;

        return $this;
    }

    /**
     * Get venFecha
     *
     * @return \DateTime
     */
    public function getVenFecha()
    {
        return $this->venFecha;
    }

    /**
     * Set venTotal
     *
     * @param float $venTotal
     *
     * @return Venta
     */
    public function setVenTotal($venTotal)
    {
        $this->venTotal = $venTotal;

        return $this;
    }

    /**
     * Get venTotal
     *
     * @return float
     */
    public function getVenTotal()
    {
        return $this->venTotal;
    }
}

