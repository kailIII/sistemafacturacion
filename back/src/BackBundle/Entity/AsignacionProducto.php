<?php

namespace BackBundle\Entity;

/**
 * AsignacionProducto
 */
class AsignacionProducto
{
    /**
     * @var integer
     */
    private $asiproId;

    /**
     * @var string
     */
    private $asiproObservacion;

    /**
     * @var \BackBundle\Entity\Pedido
     */
    private $ped;


    /**
     * Get asiproId
     *
     * @return integer
     */
    public function getAsiproId()
    {
        return $this->asiproId;
    }

    /**
     * Set asiproObservacion
     *
     * @param string $asiproObservacion
     *
     * @return AsignacionProducto
     */
    public function setAsiproObservacion($asiproObservacion)
    {
        $this->asiproObservacion = $asiproObservacion;

        return $this;
    }

    /**
     * Get asiproObservacion
     *
     * @return string
     */
    public function getAsiproObservacion()
    {
        return $this->asiproObservacion;
    }

    /**
     * Set ped
     *
     * @param \BackBundle\Entity\Pedido $ped
     *
     * @return AsignacionProducto
     */
    public function setPed(\BackBundle\Entity\Pedido $ped = null)
    {
        $this->ped = $ped;

        return $this;
    }

    /**
     * Get ped
     *
     * @return \BackBundle\Entity\Pedido
     */
    public function getPed()
    {
        return $this->ped;
    }
}

