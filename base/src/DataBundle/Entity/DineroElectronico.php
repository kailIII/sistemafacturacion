<?php

namespace DataBundle\Entity;

/**
 * DineroElectronico
 */
class DineroElectronico
{
    /**
     * @var integer
     */
    private $dineleId;

    /**
     * @var string
     */
    private $dineleCelular;

    /**
     * @var float
     */
    private $dineleValor;

    /**
     * @var \DateTime
     */
    private $dineleFechapago;

    /**
     * @var \DateTime
     */
    private $dineleHorapago;

    /**
     * @var string
     */
    private $dineleEstado;


    /**
     * Get dineleId
     *
     * @return integer
     */
    public function getDineleId()
    {
        return $this->dineleId;
    }

    /**
     * Set dineleCelular
     *
     * @param string $dineleCelular
     *
     * @return DineroElectronico
     */
    public function setDineleCelular($dineleCelular)
    {
        $this->dineleCelular = $dineleCelular;

        return $this;
    }

    /**
     * Get dineleCelular
     *
     * @return string
     */
    public function getDineleCelular()
    {
        return $this->dineleCelular;
    }

    /**
     * Set dineleValor
     *
     * @param float $dineleValor
     *
     * @return DineroElectronico
     */
    public function setDineleValor($dineleValor)
    {
        $this->dineleValor = $dineleValor;

        return $this;
    }

    /**
     * Get dineleValor
     *
     * @return float
     */
    public function getDineleValor()
    {
        return $this->dineleValor;
    }

    /**
     * Set dineleFechapago
     *
     * @param \DateTime $dineleFechapago
     *
     * @return DineroElectronico
     */
    public function setDineleFechapago($dineleFechapago)
    {
        $this->dineleFechapago = $dineleFechapago;

        return $this;
    }

    /**
     * Get dineleFechapago
     *
     * @return \DateTime
     */
    public function getDineleFechapago()
    {
        return $this->dineleFechapago;
    }

    /**
     * Set dineleHorapago
     *
     * @param \DateTime $dineleHorapago
     *
     * @return DineroElectronico
     */
    public function setDineleHorapago($dineleHorapago)
    {
        $this->dineleHorapago = $dineleHorapago;

        return $this;
    }

    /**
     * Get dineleHorapago
     *
     * @return \DateTime
     */
    public function getDineleHorapago()
    {
        return $this->dineleHorapago;
    }

    /**
     * Set dineleEstado
     *
     * @param string $dineleEstado
     *
     * @return DineroElectronico
     */
    public function setDineleEstado($dineleEstado)
    {
        $this->dineleEstado = $dineleEstado;

        return $this;
    }

    /**
     * Get dineleEstado
     *
     * @return string
     */
    public function getDineleEstado()
    {
        return $this->dineleEstado;
    }
}

