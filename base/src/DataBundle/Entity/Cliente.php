<?php

namespace DataBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $cliId;

    /**
     * @var string
     */
    private $cliNombre;

    /**
     * @var string
     */
    private $cliApellido;

    /**
     * @var string
     */
    private $cliDireccion;

    /**
     * @var string
     */
    private $cliIdentificacion;

    /**
     * @var string
     */
    private $cliTipoidentificacion;

    /**
     * @var string
     */
    private $cliTelefono1;

    /**
     * @var string
     */
    private $cliTelefono2;

    /**
     * @var string
     */
    private $cliTelefono3;

    /**
     * @var string
     */
    private $cliMail;

    /**
     * @var \DataBundle\Entity\ClienteCategoria
     */
    private $clicat;


    /**
     * Get cliId
     *
     * @return integer
     */
    public function getCliId()
    {
        return $this->cliId;
    }

    /**
     * Set cliNombre
     *
     * @param string $cliNombre
     *
     * @return Cliente
     */
    public function setCliNombre($cliNombre)
    {
        $this->cliNombre = $cliNombre;

        return $this;
    }

    /**
     * Get cliNombre
     *
     * @return string
     */
    public function getCliNombre()
    {
        return $this->cliNombre;
    }

    /**
     * Set cliApellido
     *
     * @param string $cliApellido
     *
     * @return Cliente
     */
    public function setCliApellido($cliApellido)
    {
        $this->cliApellido = $cliApellido;

        return $this;
    }

    /**
     * Get cliApellido
     *
     * @return string
     */
    public function getCliApellido()
    {
        return $this->cliApellido;
    }

    /**
     * Set cliDireccion
     *
     * @param string $cliDireccion
     *
     * @return Cliente
     */
    public function setCliDireccion($cliDireccion)
    {
        $this->cliDireccion = $cliDireccion;

        return $this;
    }

    /**
     * Get cliDireccion
     *
     * @return string
     */
    public function getCliDireccion()
    {
        return $this->cliDireccion;
    }

    /**
     * Set cliIdentificacion
     *
     * @param string $cliIdentificacion
     *
     * @return Cliente
     */
    public function setCliIdentificacion($cliIdentificacion)
    {
        $this->cliIdentificacion = $cliIdentificacion;

        return $this;
    }

    /**
     * Get cliIdentificacion
     *
     * @return string
     */
    public function getCliIdentificacion()
    {
        return $this->cliIdentificacion;
    }

    /**
     * Set cliTipoidentificacion
     *
     * @param string $cliTipoidentificacion
     *
     * @return Cliente
     */
    public function setCliTipoidentificacion($cliTipoidentificacion)
    {
        $this->cliTipoidentificacion = $cliTipoidentificacion;

        return $this;
    }

    /**
     * Get cliTipoidentificacion
     *
     * @return string
     */
    public function getCliTipoidentificacion()
    {
        return $this->cliTipoidentificacion;
    }

    /**
     * Set cliTelefono1
     *
     * @param string $cliTelefono1
     *
     * @return Cliente
     */
    public function setCliTelefono1($cliTelefono1)
    {
        $this->cliTelefono1 = $cliTelefono1;

        return $this;
    }

    /**
     * Get cliTelefono1
     *
     * @return string
     */
    public function getCliTelefono1()
    {
        return $this->cliTelefono1;
    }

    /**
     * Set cliTelefono2
     *
     * @param string $cliTelefono2
     *
     * @return Cliente
     */
    public function setCliTelefono2($cliTelefono2)
    {
        $this->cliTelefono2 = $cliTelefono2;

        return $this;
    }

    /**
     * Get cliTelefono2
     *
     * @return string
     */
    public function getCliTelefono2()
    {
        return $this->cliTelefono2;
    }

    /**
     * Set cliTelefono3
     *
     * @param string $cliTelefono3
     *
     * @return Cliente
     */
    public function setCliTelefono3($cliTelefono3)
    {
        $this->cliTelefono3 = $cliTelefono3;

        return $this;
    }

    /**
     * Get cliTelefono3
     *
     * @return string
     */
    public function getCliTelefono3()
    {
        return $this->cliTelefono3;
    }

    /**
     * Set cliMail
     *
     * @param string $cliMail
     *
     * @return Cliente
     */
    public function setCliMail($cliMail)
    {
        $this->cliMail = $cliMail;

        return $this;
    }

    /**
     * Get cliMail
     *
     * @return string
     */
    public function getCliMail()
    {
        return $this->cliMail;
    }

    /**
     * Set clicat
     *
     * @param \DataBundle\Entity\ClienteCategoria $clicat
     *
     * @return Cliente
     */
    public function setClicat(\DataBundle\Entity\ClienteCategoria $clicat = null)
    {
        $this->clicat = $clicat;

        return $this;
    }

    /**
     * Get clicat
     *
     * @return \DataBundle\Entity\ClienteCategoria
     */
    public function getClicat()
    {
        return $this->clicat;
    }
}

