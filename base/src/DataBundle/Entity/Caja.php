<?php

namespace DataBundle\Entity;

/**
 * Caja
 */
class Caja
{
    /**
     * @var integer
     */
    private $cajId;

    /**
     * @var \DateTime
     */
    private $cajFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $cajValor;

    /**
     * @var string
     */
    private $cajEstado;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get cajId
     *
     * @return integer
     */
    public function getCajId()
    {
        return $this->cajId;
    }

    /**
     * Set cajFecha
     *
     * @param \DateTime $cajFecha
     *
     * @return Caja
     */
    public function setCajFecha($cajFecha)
    {
        $this->cajFecha = $cajFecha;

        return $this;
    }

    /**
     * Get cajFecha
     *
     * @return \DateTime
     */
    public function getCajFecha()
    {
        return $this->cajFecha;
    }

    /**
     * Set cajValor
     *
     * @param float $cajValor
     *
     * @return Caja
     */
    public function setCajValor($cajValor)
    {
        $this->cajValor = $cajValor;

        return $this;
    }

    /**
     * Get cajValor
     *
     * @return float
     */
    public function getCajValor()
    {
        return $this->cajValor;
    }

    /**
     * Set cajEstado
     *
     * @param string $cajEstado
     *
     * @return Caja
     */
    public function setCajEstado($cajEstado)
    {
        $this->cajEstado = $cajEstado;

        return $this;
    }

    /**
     * Get cajEstado
     *
     * @return string
     */
    public function getCajEstado()
    {
        return $this->cajEstado;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return Caja
     */
    public function setLoc(\DataBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \DataBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }
}

