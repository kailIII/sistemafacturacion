<?php

namespace DataBundle\Entity;

/**
 * PerfilUsuario
 */
class PerfilUsuario
{
    /**
     * @var integer
     */
    private $perusuId;

    /**
     * @var string
     */
    private $perusuNombre;

    /**
     * @var string
     */
    private $perusuDescripcion;


    /**
     * Get perusuId
     *
     * @return integer
     */
    public function getPerusuId()
    {
        return $this->perusuId;
    }

    /**
     * Set perusuNombre
     *
     * @param string $perusuNombre
     *
     * @return PerfilUsuario
     */
    public function setPerusuNombre($perusuNombre)
    {
        $this->perusuNombre = $perusuNombre;

        return $this;
    }

    /**
     * Get perusuNombre
     *
     * @return string
     */
    public function getPerusuNombre()
    {
        return $this->perusuNombre;
    }

    /**
     * Set perusuDescripcion
     *
     * @param string $perusuDescripcion
     *
     * @return PerfilUsuario
     */
    public function setPerusuDescripcion($perusuDescripcion)
    {
        $this->perusuDescripcion = $perusuDescripcion;

        return $this;
    }

    /**
     * Get perusuDescripcion
     *
     * @return string
     */
    public function getPerusuDescripcion()
    {
        return $this->perusuDescripcion;
    }
}

