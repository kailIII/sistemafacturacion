<?php

namespace BackBundle\Entity;

/**
 * ParametroLocal
 */
class ParametroLocal
{
    /**
     * @var integer
     */
    private $parlocId;

    /**
     * @var float
     */
    private $parlocValor;

    /**
     * @var \DateTime
     */
    private $parlocFechahabilitado;

    /**
     * @var \DateTime
     */
    private $parlocFechadeshabilitado;

    /**
     * @var string
     */
    private $parlocEstado;

    /**
     * @var \BackBundle\Entity\Parametro
     */
    private $par;


    /**
     * Get parlocId
     *
     * @return integer
     */
    public function getParlocId()
    {
        return $this->parlocId;
    }

    /**
     * Set parlocValor
     *
     * @param float $parlocValor
     *
     * @return ParametroLocal
     */
    public function setParlocValor($parlocValor)
    {
        $this->parlocValor = $parlocValor;

        return $this;
    }

    /**
     * Get parlocValor
     *
     * @return float
     */
    public function getParlocValor()
    {
        return $this->parlocValor;
    }

    /**
     * Set parlocFechahabilitado
     *
     * @param \DateTime $parlocFechahabilitado
     *
     * @return ParametroLocal
     */
    public function setParlocFechahabilitado($parlocFechahabilitado)
    {
        $this->parlocFechahabilitado = $parlocFechahabilitado;

        return $this;
    }

    /**
     * Get parlocFechahabilitado
     *
     * @return \DateTime
     */
    public function getParlocFechahabilitado()
    {
        return $this->parlocFechahabilitado;
    }

    /**
     * Set parlocFechadeshabilitado
     *
     * @param \DateTime $parlocFechadeshabilitado
     *
     * @return ParametroLocal
     */
    public function setParlocFechadeshabilitado($parlocFechadeshabilitado)
    {
        $this->parlocFechadeshabilitado = $parlocFechadeshabilitado;

        return $this;
    }

    /**
     * Get parlocFechadeshabilitado
     *
     * @return \DateTime
     */
    public function getParlocFechadeshabilitado()
    {
        return $this->parlocFechadeshabilitado;
    }

    /**
     * Set parlocEstado
     *
     * @param string $parlocEstado
     *
     * @return ParametroLocal
     */
    public function setParlocEstado($parlocEstado)
    {
        $this->parlocEstado = $parlocEstado;

        return $this;
    }

    /**
     * Get parlocEstado
     *
     * @return string
     */
    public function getParlocEstado()
    {
        return $this->parlocEstado;
    }

    /**
     * Set par
     *
     * @param \BackBundle\Entity\Parametro $par
     *
     * @return ParametroLocal
     */
    public function setPar(\BackBundle\Entity\Parametro $par = null)
    {
        $this->par = $par;

        return $this;
    }

    /**
     * Get par
     *
     * @return \BackBundle\Entity\Parametro
     */
    public function getPar()
    {
        return $this->par;
    }
}

