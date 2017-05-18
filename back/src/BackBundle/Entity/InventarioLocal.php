<?php

namespace BackBundle\Entity;

/**
 * InventarioLocal
 */
class InventarioLocal
{
    /**
     * @var integer
     */
    private $invlocId;

    /**
     * @var integer
     */
    private $invlocCantidadmovimiento;

    /**
     * @var string
     */
    private $invlocTipomovimiento;

    /**
     * @var integer
     */
    private $invlocStockreales;

    /**
     * @var integer
     */
    private $invlocStocksinconsignacion;

    /**
     * @var \DateTime
     */
    private $invlocFecharegistro;

    /**
     * @var float
     */
    private $invlocCostounitario;

    /**
     * @var float
     */
    private $invlocCostototal;

    /**
     * @var float
     */
    private $invlocPvpsugerido;

    /**
     * @var integer
     */
    private $invlocLocalorigen;

    /**
     * @var integer
     */
    private $invlocLocaldestino;

    /**
     * @var \BackBundle\Entity\DetalleAsignacion
     */
    private $detasi;

    /**
     * @var \BackBundle\Entity\DetalleBaja
     */
    private $detbaj;

    /**
     * @var \BackBundle\Entity\DetalleCompra
     */
    private $detcom;

    /**
     * @var \BackBundle\Entity\DetalleConsignacion
     */
    private $detcon;

    /**
     * @var \BackBundle\Entity\DetalleDevolucion
     */
    private $detdev;

    /**
     * @var \BackBundle\Entity\DetalleMovilizacionIngreso
     */
    private $detmovi;

    /**
     * @var \BackBundle\Entity\DetalleMovilizacionSalida
     */
    private $detmovs;

    /**
     * @var \BackBundle\Entity\DetalleVenta
     */
    private $detven;

    /**
     * @var \BackBundle\Entity\LocalSucursal
     */
    private $loc;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get invlocId
     *
     * @return integer
     */
    public function getInvlocId()
    {
        return $this->invlocId;
    }

    /**
     * Set invlocCantidadmovimiento
     *
     * @param integer $invlocCantidadmovimiento
     *
     * @return InventarioLocal
     */
    public function setInvlocCantidadmovimiento($invlocCantidadmovimiento)
    {
        $this->invlocCantidadmovimiento = $invlocCantidadmovimiento;

        return $this;
    }

    /**
     * Get invlocCantidadmovimiento
     *
     * @return integer
     */
    public function getInvlocCantidadmovimiento()
    {
        return $this->invlocCantidadmovimiento;
    }

    /**
     * Set invlocTipomovimiento
     *
     * @param string $invlocTipomovimiento
     *
     * @return InventarioLocal
     */
    public function setInvlocTipomovimiento($invlocTipomovimiento)
    {
        $this->invlocTipomovimiento = $invlocTipomovimiento;

        return $this;
    }

    /**
     * Get invlocTipomovimiento
     *
     * @return string
     */
    public function getInvlocTipomovimiento()
    {
        return $this->invlocTipomovimiento;
    }

    /**
     * Set invlocStockreales
     *
     * @param integer $invlocStockreales
     *
     * @return InventarioLocal
     */
    public function setInvlocStockreales($invlocStockreales)
    {
        $this->invlocStockreales = $invlocStockreales;

        return $this;
    }

    /**
     * Get invlocStockreales
     *
     * @return integer
     */
    public function getInvlocStockreales()
    {
        return $this->invlocStockreales;
    }

    /**
     * Set invlocStocksinconsignacion
     *
     * @param integer $invlocStocksinconsignacion
     *
     * @return InventarioLocal
     */
    public function setInvlocStocksinconsignacion($invlocStocksinconsignacion)
    {
        $this->invlocStocksinconsignacion = $invlocStocksinconsignacion;

        return $this;
    }

    /**
     * Get invlocStocksinconsignacion
     *
     * @return integer
     */
    public function getInvlocStocksinconsignacion()
    {
        return $this->invlocStocksinconsignacion;
    }

    /**
     * Set invlocFecharegistro
     *
     * @param \DateTime $invlocFecharegistro
     *
     * @return InventarioLocal
     */
    public function setInvlocFecharegistro($invlocFecharegistro)
    {
        $this->invlocFecharegistro = $invlocFecharegistro;

        return $this;
    }

    /**
     * Get invlocFecharegistro
     *
     * @return \DateTime
     */
    public function getInvlocFecharegistro()
    {
        return $this->invlocFecharegistro;
    }

    /**
     * Set invlocCostounitario
     *
     * @param float $invlocCostounitario
     *
     * @return InventarioLocal
     */
    public function setInvlocCostounitario($invlocCostounitario)
    {
        $this->invlocCostounitario = $invlocCostounitario;

        return $this;
    }

    /**
     * Get invlocCostounitario
     *
     * @return float
     */
    public function getInvlocCostounitario()
    {
        return $this->invlocCostounitario;
    }

    /**
     * Set invlocCostototal
     *
     * @param float $invlocCostototal
     *
     * @return InventarioLocal
     */
    public function setInvlocCostototal($invlocCostototal)
    {
        $this->invlocCostototal = $invlocCostototal;

        return $this;
    }

    /**
     * Get invlocCostototal
     *
     * @return float
     */
    public function getInvlocCostototal()
    {
        return $this->invlocCostototal;
    }

    /**
     * Set invlocPvpsugerido
     *
     * @param float $invlocPvpsugerido
     *
     * @return InventarioLocal
     */
    public function setInvlocPvpsugerido($invlocPvpsugerido)
    {
        $this->invlocPvpsugerido = $invlocPvpsugerido;

        return $this;
    }

    /**
     * Get invlocPvpsugerido
     *
     * @return float
     */
    public function getInvlocPvpsugerido()
    {
        return $this->invlocPvpsugerido;
    }

    /**
     * Set invlocLocalorigen
     *
     * @param integer $invlocLocalorigen
     *
     * @return InventarioLocal
     */
    public function setInvlocLocalorigen($invlocLocalorigen)
    {
        $this->invlocLocalorigen = $invlocLocalorigen;

        return $this;
    }

    /**
     * Get invlocLocalorigen
     *
     * @return integer
     */
    public function getInvlocLocalorigen()
    {
        return $this->invlocLocalorigen;
    }

    /**
     * Set invlocLocaldestino
     *
     * @param integer $invlocLocaldestino
     *
     * @return InventarioLocal
     */
    public function setInvlocLocaldestino($invlocLocaldestino)
    {
        $this->invlocLocaldestino = $invlocLocaldestino;

        return $this;
    }

    /**
     * Get invlocLocaldestino
     *
     * @return integer
     */
    public function getInvlocLocaldestino()
    {
        return $this->invlocLocaldestino;
    }

    /**
     * Set detasi
     *
     * @param \BackBundle\Entity\DetalleAsignacion $detasi
     *
     * @return InventarioLocal
     */
    public function setDetasi(\BackBundle\Entity\DetalleAsignacion $detasi = null)
    {
        $this->detasi = $detasi;

        return $this;
    }

    /**
     * Get detasi
     *
     * @return \BackBundle\Entity\DetalleAsignacion
     */
    public function getDetasi()
    {
        return $this->detasi;
    }

    /**
     * Set detbaj
     *
     * @param \BackBundle\Entity\DetalleBaja $detbaj
     *
     * @return InventarioLocal
     */
    public function setDetbaj(\BackBundle\Entity\DetalleBaja $detbaj = null)
    {
        $this->detbaj = $detbaj;

        return $this;
    }

    /**
     * Get detbaj
     *
     * @return \BackBundle\Entity\DetalleBaja
     */
    public function getDetbaj()
    {
        return $this->detbaj;
    }

    /**
     * Set detcom
     *
     * @param \BackBundle\Entity\DetalleCompra $detcom
     *
     * @return InventarioLocal
     */
    public function setDetcom(\BackBundle\Entity\DetalleCompra $detcom = null)
    {
        $this->detcom = $detcom;

        return $this;
    }

    /**
     * Get detcom
     *
     * @return \BackBundle\Entity\DetalleCompra
     */
    public function getDetcom()
    {
        return $this->detcom;
    }

    /**
     * Set detcon
     *
     * @param \BackBundle\Entity\DetalleConsignacion $detcon
     *
     * @return InventarioLocal
     */
    public function setDetcon(\BackBundle\Entity\DetalleConsignacion $detcon = null)
    {
        $this->detcon = $detcon;

        return $this;
    }

    /**
     * Get detcon
     *
     * @return \BackBundle\Entity\DetalleConsignacion
     */
    public function getDetcon()
    {
        return $this->detcon;
    }

    /**
     * Set detdev
     *
     * @param \BackBundle\Entity\DetalleDevolucion $detdev
     *
     * @return InventarioLocal
     */
    public function setDetdev(\BackBundle\Entity\DetalleDevolucion $detdev = null)
    {
        $this->detdev = $detdev;

        return $this;
    }

    /**
     * Get detdev
     *
     * @return \BackBundle\Entity\DetalleDevolucion
     */
    public function getDetdev()
    {
        return $this->detdev;
    }

    /**
     * Set detmovi
     *
     * @param \BackBundle\Entity\DetalleMovilizacionIngreso $detmovi
     *
     * @return InventarioLocal
     */
    public function setDetmovi(\BackBundle\Entity\DetalleMovilizacionIngreso $detmovi = null)
    {
        $this->detmovi = $detmovi;

        return $this;
    }

    /**
     * Get detmovi
     *
     * @return \BackBundle\Entity\DetalleMovilizacionIngreso
     */
    public function getDetmovi()
    {
        return $this->detmovi;
    }

    /**
     * Set detmovs
     *
     * @param \BackBundle\Entity\DetalleMovilizacionSalida $detmovs
     *
     * @return InventarioLocal
     */
    public function setDetmovs(\BackBundle\Entity\DetalleMovilizacionSalida $detmovs = null)
    {
        $this->detmovs = $detmovs;

        return $this;
    }

    /**
     * Get detmovs
     *
     * @return \BackBundle\Entity\DetalleMovilizacionSalida
     */
    public function getDetmovs()
    {
        return $this->detmovs;
    }

    /**
     * Set detven
     *
     * @param \BackBundle\Entity\DetalleVenta $detven
     *
     * @return InventarioLocal
     */
    public function setDetven(\BackBundle\Entity\DetalleVenta $detven = null)
    {
        $this->detven = $detven;

        return $this;
    }

    /**
     * Get detven
     *
     * @return \BackBundle\Entity\DetalleVenta
     */
    public function getDetven()
    {
        return $this->detven;
    }

    /**
     * Set loc
     *
     * @param \BackBundle\Entity\LocalSucursal $loc
     *
     * @return InventarioLocal
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

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return InventarioLocal
     */
    public function setPro2(\BackBundle\Entity\Producto $pro2 = null)
    {
        $this->pro2 = $pro2;

        return $this;
    }

    /**
     * Get pro2
     *
     * @return \BackBundle\Entity\Producto
     */
    public function getPro2()
    {
        return $this->pro2;
    }
}

