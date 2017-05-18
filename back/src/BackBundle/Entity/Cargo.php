<?php

namespace BackBundle\Entity;

/**
 * Cargo
 */
class Cargo
{
    /**
     * @var integer
     */
    private $carId;

    /**
     * @var string
     */
    private $carNombre;

    /**
     * @var string
     */
    private $carDescripcion;


    /**
     * Get carId
     *
     * @return integer
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Set carNombre
     *
     * @param string $carNombre
     *
     * @return Cargo
     */
    public function setCarNombre($carNombre)
    {
        $this->carNombre = $carNombre;

        return $this;
    }

    /**
     * Get carNombre
     *
     * @return string
     */
    public function getCarNombre()
    {
        return $this->carNombre;
    }

    /**
     * Set carDescripcion
     *
     * @param string $carDescripcion
     *
     * @return Cargo
     */
    public function setCarDescripcion($carDescripcion)
    {
        $this->carDescripcion = $carDescripcion;

        return $this;
    }

    /**
     * Get carDescripcion
     *
     * @return string
     */
    public function getCarDescripcion()
    {
        return $this->carDescripcion;
    }
}

