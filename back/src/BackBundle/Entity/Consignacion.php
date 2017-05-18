<?php

namespace BackBundle\Entity;

/**
 * Consignacion
 */
class Consignacion
{
    /**
     * @var integer
     */
    private $conId;

    /**
     * @var string
     */
    private $conNumero;

    /**
     * @var float
     */
    private $conSubtotal;

    /**
     * @var integer
     */
    private $conIva;

    /**
     * @var float
     */
    private $conValoriva;

    /**
     * @var float
     */
    private $conValoriva0;

    /**
     * @var integer
     */
    private $conIce;

    /**
     * @var float
     */
    private $conValorice;

    /**
     * @var float
     */
    private $conDescuento;

    /**
     * @var float
     */
    private $conTotal;

    /**
     * @var \DateTime
     */
    private $conFechaemision = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $conNumeroproducto;

    /**
     * @var string
     */
    private $conEstado;

    /**
     * @var string
     */
    private $conSerie;

    /**
     * @var \BackBundle\Entity\Cliente
     */
    private $cli;

    /**
     * @var \BackBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get conId
     *
     * @return integer
     */
    public function getConId()
    {
        return $this->conId;
    }

    /**
     * Set conNumero
     *
     * @param string $conNumero
     *
     * @return Consignacion
     */
    public function setConNumero($conNumero)
    {
        $this->conNumero = $conNumero;

        return $this;
    }

    /**
     * Get conNumero
     *
     * @return string
     */
    public function getConNumero()
    {
        return $this->conNumero;
    }

    /**
     * Set conSubtotal
     *
     * @param float $conSubtotal
     *
     * @return Consignacion
     */
    public function setConSubtotal($conSubtotal)
    {
        $this->conSubtotal = $conSubtotal;

        return $this;
    }

    /**
     * Get conSubtotal
     *
     * @return float
     */
    public function getConSubtotal()
    {
        return $this->conSubtotal;
    }

    /**
     * Set conIva
     *
     * @param integer $conIva
     *
     * @return Consignacion
     */
    public function setConIva($conIva)
    {
        $this->conIva = $conIva;

        return $this;
    }

    /**
     * Get conIva
     *
     * @return integer
     */
    public function getConIva()
    {
        return $this->conIva;
    }

    /**
     * Set conValoriva
     *
     * @param float $conValoriva
     *
     * @return Consignacion
     */
    public function setConValoriva($conValoriva)
    {
        $this->conValoriva = $conValoriva;

        return $this;
    }

    /**
     * Get conValoriva
     *
     * @return float
     */
    public function getConValoriva()
    {
        return $this->conValoriva;
    }

    /**
     * Set conValoriva0
     *
     * @param float $conValoriva0
     *
     * @return Consignacion
     */
    public function setConValoriva0($conValoriva0)
    {
        $this->conValoriva0 = $conValoriva0;

        return $this;
    }

    /**
     * Get conValoriva0
     *
     * @return float
     */
    public function getConValoriva0()
    {
        return $this->conValoriva0;
    }

    /**
     * Set conIce
     *
     * @param integer $conIce
     *
     * @return Consignacion
     */
    public function setConIce($conIce)
    {
        $this->conIce = $conIce;

        return $this;
    }

    /**
     * Get conIce
     *
     * @return integer
     */
    public function getConIce()
    {
        return $this->conIce;
    }

    /**
     * Set conValorice
     *
     * @param float $conValorice
     *
     * @return Consignacion
     */
    public function setConValorice($conValorice)
    {
        $this->conValorice = $conValorice;

        return $this;
    }

    /**
     * Get conValorice
     *
     * @return float
     */
    public function getConValorice()
    {
        return $this->conValorice;
    }

    /**
     * Set conDescuento
     *
     * @param float $conDescuento
     *
     * @return Consignacion
     */
    public function setConDescuento($conDescuento)
    {
        $this->conDescuento = $conDescuento;

        return $this;
    }

    /**
     * Get conDescuento
     *
     * @return float
     */
    public function getConDescuento()
    {
        return $this->conDescuento;
    }

    /**
     * Set conTotal
     *
     * @param float $conTotal
     *
     * @return Consignacion
     */
    public function setConTotal($conTotal)
    {
        $this->conTotal = $conTotal;

        return $this;
    }

    /**
     * Get conTotal
     *
     * @return float
     */
    public function getConTotal()
    {
        return $this->conTotal;
    }

    /**
     * Set conFechaemision
     *
     * @param \DateTime $conFechaemision
     *
     * @return Consignacion
     */
    public function setConFechaemision($conFechaemision)
    {
        $this->conFechaemision = $conFechaemision;

        return $this;
    }

    /**
     * Get conFechaemision
     *
     * @return \DateTime
     */
    public function getConFechaemision()
    {
        return $this->conFechaemision;
    }

    /**
     * Set conNumeroproducto
     *
     * @param integer $conNumeroproducto
     *
     * @return Consignacion
     */
    public function setConNumeroproducto($conNumeroproducto)
    {
        $this->conNumeroproducto = $conNumeroproducto;

        return $this;
    }

    /**
     * Get conNumeroproducto
     *
     * @return integer
     */
    public function getConNumeroproducto()
    {
        return $this->conNumeroproducto;
    }

    /**
     * Set conEstado
     *
     * @param string $conEstado
     *
     * @return Consignacion
     */
    public function setConEstado($conEstado)
    {
        $this->conEstado = $conEstado;

        return $this;
    }

    /**
     * Get conEstado
     *
     * @return string
     */
    public function getConEstado()
    {
        return $this->conEstado;
    }

    /**
     * Set conSerie
     *
     * @param string $conSerie
     *
     * @return Consignacion
     */
    public function setConSerie($conSerie)
    {
        $this->conSerie = $conSerie;

        return $this;
    }

    /**
     * Get conSerie
     *
     * @return string
     */
    public function getConSerie()
    {
        return $this->conSerie;
    }

    /**
     * Set cli
     *
     * @param \BackBundle\Entity\Cliente $cli
     *
     * @return Consignacion
     */
    public function setCli(\BackBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \BackBundle\Entity\Cliente
     */
    public function getCli()
    {
        return $this->cli;
    }

    /**
     * Set loc
     *
     * @param \BackBundle\Entity\LocalSucursal $loc
     *
     * @return Consignacion
     */
    public function setLoc(\BackBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \BackBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }
}

