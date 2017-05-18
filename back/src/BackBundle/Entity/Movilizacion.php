<?php

namespace BackBundle\Entity;

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
     * @var \BackBundle\Entity\Calendario
     */
    private $cal;

    /**
     * @var \BackBundle\Entity\Localidad
     */
    private $loca;

    /**
     * @var \BackBundle\Entity\Vehiculo
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
     * @param \BackBundle\Entity\Calendario $cal
     *
     * @return Movilizacion
     */
    public function setCal(\BackBundle\Entity\Calendario $cal = null)
    {
        $this->cal = $cal;

        return $this;
    }

    /**
     * Get cal
     *
     * @return \BackBundle\Entity\Calendario
     */
    public function getCal()
    {
        return $this->cal;
    }

    /**
     * Set loca
     *
     * @param \BackBundle\Entity\Localidad $loca
     *
     * @return Movilizacion
     */
    public function setLoca(\BackBundle\Entity\Localidad $loca = null)
    {
        $this->loca = $loca;

        return $this;
    }

    /**
     * Get loca
     *
     * @return \BackBundle\Entity\Localidad
     */
    public function getLoca()
    {
        return $this->loca;
    }

    /**
     * Set veh
     *
     * @param \BackBundle\Entity\Vehiculo $veh
     *
     * @return Movilizacion
     */
    public function setVeh(\BackBundle\Entity\Vehiculo $veh = null)
    {
        $this->veh = $veh;

        return $this;
    }

    /**
     * Get veh
     *
     * @return \BackBundle\Entity\Vehiculo
     */
    public function getVeh()
    {
        return $this->veh;
    }
}

