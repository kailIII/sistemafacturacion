<?php

namespace BackBundle\Entity;

/**
 * Devolucion
 */
class Devolucion
{
    /**
     * @var integer
     */
    private $devId;

    /**
     * @var \DateTime
     */
    private $devFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $devMotivos;

    /**
     * @var \BackBundle\Entity\Cliente
     */
    private $cli;

    /**
     * @var \BackBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get devId
     *
     * @return integer
     */
    public function getDevId()
    {
        return $this->devId;
    }

    /**
     * Set devFecha
     *
     * @param \DateTime $devFecha
     *
     * @return Devolucion
     */
    public function setDevFecha($devFecha)
    {
        $this->devFecha = $devFecha;

        return $this;
    }

    /**
     * Get devFecha
     *
     * @return \DateTime
     */
    public function getDevFecha()
    {
        return $this->devFecha;
    }

    /**
     * Set devMotivos
     *
     * @param string $devMotivos
     *
     * @return Devolucion
     */
    public function setDevMotivos($devMotivos)
    {
        $this->devMotivos = $devMotivos;

        return $this;
    }

    /**
     * Get devMotivos
     *
     * @return string
     */
    public function getDevMotivos()
    {
        return $this->devMotivos;
    }

    /**
     * Set cli
     *
     * @param \BackBundle\Entity\Cliente $cli
     *
     * @return Devolucion
     */
    public function setCli(\BackBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \BackBundle\Entity\Cliente
     */
    public function getCli()
    {
        return $this->cli;
    }

    /**
     * Set loc
     *
     * @param \BackBundle\Entity\LocalSucursal $loc
     *
     * @return Devolucion
     */
    public function setLoc(\BackBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \BackBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }
}

