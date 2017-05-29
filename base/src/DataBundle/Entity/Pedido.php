<?php

namespace DataBundle\Entity;

/**
 * Pedido
 */
class Pedido
{
    /**
     * @var integer
     */
    private $pedId;

    /**
     * @var \DateTime
     */
    private $pedFechaemision;

    /**
     * @var string
     */
    private $pedObservacion;

    /**
     * @var integer
     */
    private $locDestino;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get pedId
     *
     * @return integer
     */
    public function getPedId()
    {
        return $this->pedId;
    }

    /**
     * Set pedFechaemision
     *
     * @param \DateTime $pedFechaemision
     *
     * @return Pedido
     */
    public function setPedFechaemision($pedFechaemision)
    {
        $this->pedFechaemision = $pedFechaemision;

        return $this;
    }

    /**
     * Get pedFechaemision
     *
     * @return \DateTime
     */
    public function getPedFechaemision()
    {
        return $this->pedFechaemision;
    }

    /**
     * Set pedObservacion
     *
     * @param string $pedObservacion
     *
     * @return Pedido
     */
    public function setPedObservacion($pedObservacion)
    {
        $this->pedObservacion = $pedObservacion;

        return $this;
    }

    /**
     * Get pedObservacion
     *
     * @return string
     */
    public function getPedObservacion()
    {
        return $this->pedObservacion;
    }

    /**
     * Set locDestino
     *
     * @param integer $locDestino
     *
     * @return Pedido
     */
    public function setLocDestino($locDestino)
    {
        $this->locDestino = $locDestino;

        return $this;
    }

    /**
     * Get locDestino
     *
     * @return integer
     */
    public function getLocDestino()
    {
        return $this->locDestino;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return Pedido
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

