<?php

namespace BackBundle\Entity;

/**
 * Vehiculo
 */
class Vehiculo
{
    /**
     * @var integer
     */
    private $vehId;

    /**
     * @var string
     */
    private $vehTipo;

    /**
     * @var string
     */
    private $vehModelo;

    /**
     * @var string
     */
    private $vehCilindraje;

    /**
     * @var string
     */
    private $vehTonelaje;


    /**
     * Get vehId
     *
     * @return integer
     */
    public function getVehId()
    {
        return $this->vehId;
    }

    /**
     * Set vehTipo
     *
     * @param string $vehTipo
     *
     * @return Vehiculo
     */
    public function setVehTipo($vehTipo)
    {
        $this->vehTipo = $vehTipo;

        return $this;
    }

    /**
     * Get vehTipo
     *
     * @return string
     */
    public function getVehTipo()
    {
        return $this->vehTipo;
    }

    /**
     * Set vehModelo
     *
     * @param string $vehModelo
     *
     * @return Vehiculo
     */
    public function setVehModelo($vehModelo)
    {
        $this->vehModelo = $vehModelo;

        return $this;
    }

    /**
     * Get vehModelo
     *
     * @return string
     */
    public function getVehModelo()
    {
        return $this->vehModelo;
    }

    /**
     * Set vehCilindraje
     *
     * @param string $vehCilindraje
     *
     * @return Vehiculo
     */
    public function setVehCilindraje($vehCilindraje)
    {
        $this->vehCilindraje = $vehCilindraje;

        return $this;
    }

    /**
     * Get vehCilindraje
     *
     * @return string
     */
    public function getVehCilindraje()
    {
        return $this->vehCilindraje;
    }

    /**
     * Set vehTonelaje
     *
     * @param string $vehTonelaje
     *
     * @return Vehiculo
     */
    public function setVehTonelaje($vehTonelaje)
    {
        $this->vehTonelaje = $vehTonelaje;

        return $this;
    }

    /**
     * Get vehTonelaje
     *
     * @return string
     */
    public function getVehTonelaje()
    {
        return $this->vehTonelaje;
    }
}

