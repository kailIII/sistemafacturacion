<?php

namespace DataBundle\Entity;

/**
 * Parametro
 */
class Parametro
{
    /**
     * @var integer
     */
    private $parId;

    /**
     * @var string
     */
    private $parNombre;

    /**
     * @var string
     */
    private $parTipo;

    /**
     * @var \DateTime
     */
    private $parFecharegistro;

    /**
     * @var string
     */
    private $parEstadoactivo;


    /**
     * Get parId
     *
     * @return integer
     */
    public function getParId()
    {
        return $this->parId;
    }

    /**
     * Set parNombre
     *
     * @param string $parNombre
     *
     * @return Parametro
     */
    public function setParNombre($parNombre)
    {
        $this->parNombre = $parNombre;

        return $this;
    }

    /**
     * Get parNombre
     *
     * @return string
     */
    public function getParNombre()
    {
        return $this->parNombre;
    }

    /**
     * Set parTipo
     *
     * @param string $parTipo
     *
     * @return Parametro
     */
    public function setParTipo($parTipo)
    {
        $this->parTipo = $parTipo;

        return $this;
    }

    /**
     * Get parTipo
     *
     * @return string
     */
    public function getParTipo()
    {
        return $this->parTipo;
    }

    /**
     * Set parFecharegistro
     *
     * @param \DateTime $parFecharegistro
     *
     * @return Parametro
     */
    public function setParFecharegistro($parFecharegistro)
    {
        $this->parFecharegistro = $parFecharegistro;

        return $this;
    }

    /**
     * Get parFecharegistro
     *
     * @return \DateTime
     */
    public function getParFecharegistro()
    {
        return $this->parFecharegistro;
    }

    /**
     * Set parEstadoactivo
     *
     * @param string $parEstadoactivo
     *
     * @return Parametro
     */
    public function setParEstadoactivo($parEstadoactivo)
    {
        $this->parEstadoactivo = $parEstadoactivo;

        return $this;
    }

    /**
     * Get parEstadoactivo
     *
     * @return string
     */
    public function getParEstadoactivo()
    {
        return $this->parEstadoactivo;
    }
}

