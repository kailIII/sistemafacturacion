<?php

namespace DataBundle\Entity;

/**
 * Credito
 */
class Credito
{
    /**
     * @var integer
     */
    private $creId;

    /**
     * @var integer
     */
    private $creNumerocuotas;

    /**
     * @var \DateTime
     */
    private $creFechamaximopago;

    /**
     * @var float
     */
    private $creValordeuda;

    /**
     * @var string
     */
    private $creEstado;


    /**
     * Get creId
     *
     * @return integer
     */
    public function getCreId()
    {
        return $this->creId;
    }

    /**
     * Set creNumerocuotas
     *
     * @param integer $creNumerocuotas
     *
     * @return Credito
     */
    public function setCreNumerocuotas($creNumerocuotas)
    {
        $this->creNumerocuotas = $creNumerocuotas;

        return $this;
    }

    /**
     * Get creNumerocuotas
     *
     * @return integer
     */
    public function getCreNumerocuotas()
    {
        return $this->creNumerocuotas;
    }

    /**
     * Set creFechamaximopago
     *
     * @param \DateTime $creFechamaximopago
     *
     * @return Credito
     */
    public function setCreFechamaximopago($creFechamaximopago)
    {
        $this->creFechamaximopago = $creFechamaximopago;

        return $this;
    }

    /**
     * Get creFechamaximopago
     *
     * @return \DateTime
     */
    public function getCreFechamaximopago()
    {
        return $this->creFechamaximopago;
    }

    /**
     * Set creValordeuda
     *
     * @param float $creValordeuda
     *
     * @return Credito
     */
    public function setCreValordeuda($creValordeuda)
    {
        $this->creValordeuda = $creValordeuda;

        return $this;
    }

    /**
     * Get creValordeuda
     *
     * @return float
     */
    public function getCreValordeuda()
    {
        return $this->creValordeuda;
    }

    /**
     * Set creEstado
     *
     * @param string $creEstado
     *
     * @return Credito
     */
    public function setCreEstado($creEstado)
    {
        $this->creEstado = $creEstado;

        return $this;
    }

    /**
     * Get creEstado
     *
     * @return string
     */
    public function getCreEstado()
    {
        return $this->creEstado;
    }
}

