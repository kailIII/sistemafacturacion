<?php

namespace DataBundle\Entity;

/**
 * Baja
 */
class Baja
{
    /**
     * @var integer
     */
    private $bajId;

    /**
     * @var \DateTime
     */
    private $bajFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $bajObservacion;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get bajId
     *
     * @return integer
     */
    public function getBajId()
    {
        return $this->bajId;
    }

    /**
     * Set bajFecha
     *
     * @param \DateTime $bajFecha
     *
     * @return Baja
     */
    public function setBajFecha($bajFecha)
    {
        $this->bajFecha = $bajFecha;

        return $this;
    }

    /**
     * Get bajFecha
     *
     * @return \DateTime
     */
    public function getBajFecha()
    {
        return $this->bajFecha;
    }

    /**
     * Set bajObservacion
     *
     * @param string $bajObservacion
     *
     * @return Baja
     */
    public function setBajObservacion($bajObservacion)
    {
        $this->bajObservacion = $bajObservacion;

        return $this;
    }

    /**
     * Get bajObservacion
     *
     * @return string
     */
    public function getBajObservacion()
    {
        return $this->bajObservacion;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return Baja
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

