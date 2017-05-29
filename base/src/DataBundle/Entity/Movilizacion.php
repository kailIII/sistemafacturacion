<?php

namespace DataBundle\Entity;

/**
 * Movilizacion
 */
class Movilizacion
{
    /**
     * @var integer
     */
    private $movId;

    /**
     * @var string
     */
    private $movRuta;

    /**
     * @var string
     */
    private $movEstado;

    /**
     * @var \DataBundle\Entity\Calendario
     */
    private $cal;

    /**
     * @var \DataBundle\Entity\Localidad
     */
    private $loca;

    /**
     * @var \DataBundle\Entity\Vehiculo
     */
    private $veh;


    /**
     * Get movId
     *
     * @return integer
     */
    public function getMovId()
    {
        return $this->movId;
    }

    /**
     * Set movRuta
     *
     * @param string $movRuta
     *
     * @return Movilizacion
     */
    public function setMovRuta($movRuta)
    {
        $this->movRuta = $movRuta;

        return $this;
    }

    /**
     * Get movRuta
     *
     * @return string
     */
    public function getMovRuta()
    {
        return $this->movRuta;
    }

    /**
     * Set movEstado
     *
     * @param string $movEstado
     *
     * @return Movilizacion
     */
    public function setMovEstado($movEstado)
    {
        $this->movEstado = $movEstado;

        return $this;
    }

    /**
     * Get movEstado
     *
     * @return string
     */
    public function getMovEstado()
    {
        return $this->movEstado;
    }

    /**
     * Set cal
     *
     * @param \DataBundle\Entity\Calendario $cal
     *
     * @return Movilizacion
     */
    public function setCal(\DataBundle\Entity\Calendario $cal = null)
    {
        $this->cal = $cal;

        return $this;
    }

    /**
     * Get cal
     *
     * @return \DataBundle\Entity\Calendario
     */
    public function getCal()
    {
        return $this->cal;
    }

    /**
     * Set loca
     *
     * @param \DataBundle\Entity\Localidad $loca
     *
     * @return Movilizacion
     */
    public function setLoca(\DataBundle\Entity\Localidad $loca = null)
    {
        $this->loca = $loca;

        return $this;
    }

    /**
     * Get loca
     *
     * @return \DataBundle\Entity\Localidad
     */
    public function getLoca()
    {
        return $this->loca;
    }

    /**
     * Set veh
     *
     * @param \DataBundle\Entity\Vehiculo $veh
     *
     * @return Movilizacion
     */
    public function setVeh(\DataBundle\Entity\Vehiculo $veh = null)
    {
        $this->veh = $veh;

        return $this;
    }

    /**
     * Get veh
     *
     * @return \DataBundle\Entity\Vehiculo
     */
    public function getVeh()
    {
        return $this->veh;
    }
}

