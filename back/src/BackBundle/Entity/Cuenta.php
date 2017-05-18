<?php

namespace BackBundle\Entity;

/**
 * Cuenta
 */
class Cuenta
{
    /**
     * @var integer
     */
    private $cueId;

    /**
     * @var string
     */
    private $cueNumerocuenta;

    /**
     * @var string
     */
    private $cueTipocuenta;

    /**
     * @var \BackBundle\Entity\Banco
     */
    private $ban;


    /**
     * Get cueId
     *
     * @return integer
     */
    public function getCueId()
    {
        return $this->cueId;
    }

    /**
     * Set cueNumerocuenta
     *
     * @param string $cueNumerocuenta
     *
     * @return Cuenta
     */
    public function setCueNumerocuenta($cueNumerocuenta)
    {
        $this->cueNumerocuenta = $cueNumerocuenta;

        return $this;
    }

    /**
     * Get cueNumerocuenta
     *
     * @return string
     */
    public function getCueNumerocuenta()
    {
        return $this->cueNumerocuenta;
    }

    /**
     * Set cueTipocuenta
     *
     * @param string $cueTipocuenta
     *
     * @return Cuenta
     */
    public function setCueTipocuenta($cueTipocuenta)
    {
        $this->cueTipocuenta = $cueTipocuenta;

        return $this;
    }

    /**
     * Get cueTipocuenta
     *
     * @return string
     */
    public function getCueTipocuenta()
    {
        return $this->cueTipocuenta;
    }

    /**
     * Set ban
     *
     * @param \BackBundle\Entity\Banco $ban
     *
     * @return Cuenta
     */
    public function setBan(\BackBundle\Entity\Banco $ban = null)
    {
        $this->ban = $ban;

        return $this;
    }

    /**
     * Get ban
     *
     * @return \BackBundle\Entity\Banco
     */
    public function getBan()
    {
        return $this->ban;
    }
}

