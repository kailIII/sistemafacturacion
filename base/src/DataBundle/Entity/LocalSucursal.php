<?php

namespace DataBundle\Entity;

/**
 * LocalSucursal
 */
class LocalSucursal
{
    /**
     * @var integer
     */
    private $locId;

    /**
     * @var string
     */
    private $locNombre;

    /**
     * @var string
     */
    private $locDireccion;

    /**
     * @var string
     */
    private $locEstado;

    /**
     * @var string
     */
    private $locFax;

    /**
     * @var string
     */
    private $locTelefono1;

    /**
     * @var string
     */
    private $locTelefono2;

    /**
     * @var string
     */
    private $locDescripcion;

    /**
     * @var string
     */
    private $locCodigo;

    /**
     * @var \DateTime
     */
    private $locFechainaguracion;

    /**
     * @var \DateTime
     */
    private $locFechacierre;

    /**
     * @var string
     */
    private $locMatrizOSucursal;

    /**
     * @var string
     */
    private $locRuc;

    /**
     * @var string
     */
    private $locMail;

    /**
     * @var \DataBundle\Entity\Almacen
     */
    private $alm;

    /**
     * @var \DataBundle\Entity\Georeferencia
     */
    private $geo;

    /**
     * @var \DataBundle\Entity\ParametroLocal
     */
    private $parloc;


    /**
     * Get locId
     *
     * @return integer
     */
    public function getLocId()
    {
        return $this->locId;
    }

    /**
     * Set locNombre
     *
     * @param string $locNombre
     *
     * @return LocalSucursal
     */
    public function setLocNombre($locNombre)
    {
        $this->locNombre = $locNombre;

        return $this;
    }

    /**
     * Get locNombre
     *
     * @return string
     */
    public function getLocNombre()
    {
        return $this->locNombre;
    }

    /**
     * Set locDireccion
     *
     * @param string $locDireccion
     *
     * @return LocalSucursal
     */
    public function setLocDireccion($locDireccion)
    {
        $this->locDireccion = $locDireccion;

        return $this;
    }

    /**
     * Get locDireccion
     *
     * @return string
     */
    public function getLocDireccion()
    {
        return $this->locDireccion;
    }

    /**
     * Set locEstado
     *
     * @param string $locEstado
     *
     * @return LocalSucursal
     */
    public function setLocEstado($locEstado)
    {
        $this->locEstado = $locEstado;

        return $this;
    }

    /**
     * Get locEstado
     *
     * @return string
     */
    public function getLocEstado()
    {
        return $this->locEstado;
    }

    /**
     * Set locFax
     *
     * @param string $locFax
     *
     * @return LocalSucursal
     */
    public function setLocFax($locFax)
    {
        $this->locFax = $locFax;

        return $this;
    }

    /**
     * Get locFax
     *
     * @return string
     */
    public function getLocFax()
    {
        return $this->locFax;
    }

    /**
     * Set locTelefono1
     *
     * @param string $locTelefono1
     *
     * @return LocalSucursal
     */
    public function setLocTelefono1($locTelefono1)
    {
        $this->locTelefono1 = $locTelefono1;

        return $this;
    }

    /**
     * Get locTelefono1
     *
     * @return string
     */
    public function getLocTelefono1()
    {
        return $this->locTelefono1;
    }

    /**
     * Set locTelefono2
     *
     * @param string $locTelefono2
     *
     * @return LocalSucursal
     */
    public function setLocTelefono2($locTelefono2)
    {
        $this->locTelefono2 = $locTelefono2;

        return $this;
    }

    /**
     * Get locTelefono2
     *
     * @return string
     */
    public function getLocTelefono2()
    {
        return $this->locTelefono2;
    }

    /**
     * Set locDescripcion
     *
     * @param string $locDescripcion
     *
     * @return LocalSucursal
     */
    public function setLocDescripcion($locDescripcion)
    {
        $this->locDescripcion = $locDescripcion;

        return $this;
    }

    /**
     * Get locDescripcion
     *
     * @return string
     */
    public function getLocDescripcion()
    {
        return $this->locDescripcion;
    }

    /**
     * Set locCodigo
     *
     * @param string $locCodigo
     *
     * @return LocalSucursal
     */
    public function setLocCodigo($locCodigo)
    {
        $this->locCodigo = $locCodigo;

        return $this;
    }

    /**
     * Get locCodigo
     *
     * @return string
     */
    public function getLocCodigo()
    {
        return $this->locCodigo;
    }

    /**
     * Set locFechainaguracion
     *
     * @param \DateTime $locFechainaguracion
     *
     * @return LocalSucursal
     */
    public function setLocFechainaguracion($locFechainaguracion)
    {
        $this->locFechainaguracion = $locFechainaguracion;

        return $this;
    }

    /**
     * Get locFechainaguracion
     *
     * @return \DateTime
     */
    public function getLocFechainaguracion()
    {
        return $this->locFechainaguracion;
    }

    /**
     * Set locFechacierre
     *
     * @param \DateTime $locFechacierre
     *
     * @return LocalSucursal
     */
    public function setLocFechacierre($locFechacierre)
    {
        $this->locFechacierre = $locFechacierre;

        return $this;
    }

    /**
     * Get locFechacierre
     *
     * @return \DateTime
     */
    public function getLocFechacierre()
    {
        return $this->locFechacierre;
    }

    /**
     * Set locMatrizOSucursal
     *
     * @param string $locMatrizOSucursal
     *
     * @return LocalSucursal
     */
    public function setLocMatrizOSucursal($locMatrizOSucursal)
    {
        $this->locMatrizOSucursal = $locMatrizOSucursal;

        return $this;
    }

    /**
     * Get locMatrizOSucursal
     *
     * @return string
     */
    public function getLocMatrizOSucursal()
    {
        return $this->locMatrizOSucursal;
    }

    /**
     * Set locRuc
     *
     * @param string $locRuc
     *
     * @return LocalSucursal
     */
    public function setLocRuc($locRuc)
    {
        $this->locRuc = $locRuc;

        return $this;
    }

    /**
     * Get locRuc
     *
     * @return string
     */
    public function getLocRuc()
    {
        return $this->locRuc;
    }

    /**
     * Set locMail
     *
     * @param string $locMail
     *
     * @return LocalSucursal
     */
    public function setLocMail($locMail)
    {
        $this->locMail = $locMail;

        return $this;
    }

    /**
     * Get locMail
     *
     * @return string
     */
    public function getLocMail()
    {
        return $this->locMail;
    }

    /**
     * Set alm
     *
     * @param \DataBundle\Entity\Almacen $alm
     *
     * @return LocalSucursal
     */
    public function setAlm(\DataBundle\Entity\Almacen $alm = null)
    {
        $this->alm = $alm;

        return $this;
    }

    /**
     * Get alm
     *
     * @return \DataBundle\Entity\Almacen
     */
    public function getAlm()
    {
        return $this->alm;
    }

    /**
     * Set geo
     *
     * @param \DataBundle\Entity\Georeferencia $geo
     *
     * @return LocalSucursal
     */
    public function setGeo(\DataBundle\Entity\Georeferencia $geo = null)
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * Get geo
     *
     * @return \DataBundle\Entity\Georeferencia
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Set parloc
     *
     * @param \DataBundle\Entity\ParametroLocal $parloc
     *
     * @return LocalSucursal
     */
    public function setParloc(\DataBundle\Entity\ParametroLocal $parloc = null)
    {
        $this->parloc = $parloc;

        return $this;
    }

    /**
     * Get parloc
     *
     * @return \DataBundle\Entity\ParametroLocal
     */
    public function getParloc()
    {
        return $this->parloc;
    }
}

