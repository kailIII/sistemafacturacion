<?php

namespace DataBundle\Entity;

/**
 * ModuloSistema
 */
class ModuloSistema
{
    /**
     * @var integer
     */
    private $modsisId;

    /**
     * @var string
     */
    private $modsisNombre;

    /**
     * @var integer
     */
    private $modsisPadre;

    /**
     * @var string
     */
    private $modsisUbicacion;

    /**
     * @var string
     */
    private $modsisEstado;

    /**
     * @var string
     */
    private $modsisNombremostrar;


    /**
     * Get modsisId
     *
     * @return integer
     */
    public function getModsisId()
    {
        return $this->modsisId;
    }

    /**
     * Set modsisNombre
     *
     * @param string $modsisNombre
     *
     * @return ModuloSistema
     */
    public function setModsisNombre($modsisNombre)
    {
        $this->modsisNombre = $modsisNombre;

        return $this;
    }

    /**
     * Get modsisNombre
     *
     * @return string
     */
    public function getModsisNombre()
    {
        return $this->modsisNombre;
    }

    /**
     * Set modsisPadre
     *
     * @param integer $modsisPadre
     *
     * @return ModuloSistema
     */
    public function setModsisPadre($modsisPadre)
    {
        $this->modsisPadre = $modsisPadre;

        return $this;
    }

    /**
     * Get modsisPadre
     *
     * @return integer
     */
    public function getModsisPadre()
    {
        return $this->modsisPadre;
    }

    /**
     * Set modsisUbicacion
     *
     * @param string $modsisUbicacion
     *
     * @return ModuloSistema
     */
    public function setModsisUbicacion($modsisUbicacion)
    {
        $this->modsisUbicacion = $modsisUbicacion;

        return $this;
    }

    /**
     * Get modsisUbicacion
     *
     * @return string
     */
    public function getModsisUbicacion()
    {
        return $this->modsisUbicacion;
    }

    /**
     * Set modsisEstado
     *
     * @param string $modsisEstado
     *
     * @return ModuloSistema
     */
    public function setModsisEstado($modsisEstado)
    {
        $this->modsisEstado = $modsisEstado;

        return $this;
    }

    /**
     * Get modsisEstado
     *
     * @return string
     */
    public function getModsisEstado()
    {
        return $this->modsisEstado;
    }

    /**
     * Set modsisNombremostrar
     *
     * @param string $modsisNombremostrar
     *
     * @return ModuloSistema
     */
    public function setModsisNombremostrar($modsisNombremostrar)
    {
        $this->modsisNombremostrar = $modsisNombremostrar;

        return $this;
    }

    /**
     * Get modsisNombremostrar
     *
     * @return string
     */
    public function getModsisNombremostrar()
    {
        return $this->modsisNombremostrar;
    }
}

