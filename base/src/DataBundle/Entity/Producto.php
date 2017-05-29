<?php

namespace DataBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $proId2;

    /**
     * @var string
     */
    private $proCodigo;

    /**
     * @var \DateTime
     */
    private $proFecharegistro;

    /**
     * @var string
     */
    private $proEstado;

    /**
     * @var string
     */
    private $proNombre;

    /**
     * @var string
     */
    private $proContenido;

    /**
     * @var string
     */
    private $proDescripcion;

    /**
     * @var string
     */
    private $proTipouso;

    /**
     * @var string
     */
    private $proGravaiva;

    /**
     * @var string
     */
    private $proGravaice;

    /**
     * @var \DateTime
     */
    private $proFechaelaboracion;

    /**
     * @var \DateTime
     */
    private $proFechacaducidad;

    /**
     * @var string
     */
    private $proCodigoprov;

    /**
     * @var string
     */
    private $proTipo;


    /**
     * Get proId2
     *
     * @return integer
     */
    public function getProId2()
    {
        return $this->proId2;
    }

    /**
     * Set proCodigo
     *
     * @param string $proCodigo
     *
     * @return Producto
     */
    public function setProCodigo($proCodigo)
    {
        $this->proCodigo = $proCodigo;

        return $this;
    }

    /**
     * Get proCodigo
     *
     * @return string
     */
    public function getProCodigo()
    {
        return $this->proCodigo;
    }

    /**
     * Set proFecharegistro
     *
     * @param \DateTime $proFecharegistro
     *
     * @return Producto
     */
    public function setProFecharegistro($proFecharegistro)
    {
        $this->proFecharegistro = $proFecharegistro;

        return $this;
    }

    /**
     * Get proFecharegistro
     *
     * @return \DateTime
     */
    public function getProFecharegistro()
    {
        return $this->proFecharegistro;
    }

    /**
     * Set proEstado
     *
     * @param string $proEstado
     *
     * @return Producto
     */
    public function setProEstado($proEstado)
    {
        $this->proEstado = $proEstado;

        return $this;
    }

    /**
     * Get proEstado
     *
     * @return string
     */
    public function getProEstado()
    {
        return $this->proEstado;
    }

    /**
     * Set proNombre
     *
     * @param string $proNombre
     *
     * @return Producto
     */
    public function setProNombre($proNombre)
    {
        $this->proNombre = $proNombre;

        return $this;
    }

    /**
     * Get proNombre
     *
     * @return string
     */
    public function getProNombre()
    {
        return $this->proNombre;
    }

    /**
     * Set proContenido
     *
     * @param string $proContenido
     *
     * @return Producto
     */
    public function setProContenido($proContenido)
    {
        $this->proContenido = $proContenido;

        return $this;
    }

    /**
     * Get proContenido
     *
     * @return string
     */
    public function getProContenido()
    {
        return $this->proContenido;
    }

    /**
     * Set proDescripcion
     *
     * @param string $proDescripcion
     *
     * @return Producto
     */
    public function setProDescripcion($proDescripcion)
    {
        $this->proDescripcion = $proDescripcion;

        return $this;
    }

    /**
     * Get proDescripcion
     *
     * @return string
     */
    public function getProDescripcion()
    {
        return $this->proDescripcion;
    }

    /**
     * Set proTipouso
     *
     * @param string $proTipouso
     *
     * @return Producto
     */
    public function setProTipouso($proTipouso)
    {
        $this->proTipouso = $proTipouso;

        return $this;
    }

    /**
     * Get proTipouso
     *
     * @return string
     */
    public function getProTipouso()
    {
        return $this->proTipouso;
    }

    /**
     * Set proGravaiva
     *
     * @param string $proGravaiva
     *
     * @return Producto
     */
    public function setProGravaiva($proGravaiva)
    {
        $this->proGravaiva = $proGravaiva;

        return $this;
    }

    /**
     * Get proGravaiva
     *
     * @return string
     */
    public function getProGravaiva()
    {
        return $this->proGravaiva;
    }

    /**
     * Set proGravaice
     *
     * @param string $proGravaice
     *
     * @return Producto
     */
    public function setProGravaice($proGravaice)
    {
        $this->proGravaice = $proGravaice;

        return $this;
    }

    /**
     * Get proGravaice
     *
     * @return string
     */
    public function getProGravaice()
    {
        return $this->proGravaice;
    }

    /**
     * Set proFechaelaboracion
     *
     * @param \DateTime $proFechaelaboracion
     *
     * @return Producto
     */
    public function setProFechaelaboracion($proFechaelaboracion)
    {
        $this->proFechaelaboracion = $proFechaelaboracion;

        return $this;
    }

    /**
     * Get proFechaelaboracion
     *
     * @return \DateTime
     */
    public function getProFechaelaboracion()
    {
        return $this->proFechaelaboracion;
    }

    /**
     * Set proFechacaducidad
     *
     * @param \DateTime $proFechacaducidad
     *
     * @return Producto
     */
    public function setProFechacaducidad($proFechacaducidad)
    {
        $this->proFechacaducidad = $proFechacaducidad;

        return $this;
    }

    /**
     * Get proFechacaducidad
     *
     * @return \DateTime
     */
    public function getProFechacaducidad()
    {
        return $this->proFechacaducidad;
    }

    /**
     * Set proCodigoprov
     *
     * @param string $proCodigoprov
     *
     * @return Producto
     */
    public function setProCodigoprov($proCodigoprov)
    {
        $this->proCodigoprov = $proCodigoprov;

        return $this;
    }

    /**
     * Get proCodigoprov
     *
     * @return string
     */
    public function getProCodigoprov()
    {
        return $this->proCodigoprov;
    }

    /**
     * Set proTipo
     *
     * @param string $proTipo
     *
     * @return Producto
     */
    public function setProTipo($proTipo)
    {
        $this->proTipo = $proTipo;

        return $this;
    }

    /**
     * Get proTipo
     *
     * @return string
     */
    public function getProTipo()
    {
        return $this->proTipo;
    }
}

