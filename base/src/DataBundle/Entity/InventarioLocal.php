<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\DetalleAsignacion
     */
    private $detasi;

    /**
     * @var \DataBundle\Entity\DetalleBaja
     */
    private $detbaj;

    /**
     * @var \DataBundle\Entity\DetalleCompra
     */
    private $detcom;

    /**
     * @var \DataBundle\Entity\DetalleConsignacion
     */
    private $detcon;

    /**
     * @var \DataBundle\Entity\DetalleDevolucion
     */
    private $detdev;

    /**
     * @var \DataBundle\Entity\DetalleMovilizacionIngreso
     */
    private $detmovi;

    /**
     * @var \DataBundle\Entity\DetalleMovilizacionSalida
     */
    private $detmovs;

    /**
     * @var \DataBundle\Entity\DetalleVenta
     */
    private $detven;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;

    /**
     * @var \DataBundle\Entity\Producto
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
     * @param \DataBundle\Entity\DetalleAsignacion $detasi
     *
     * @return InventarioLocal
     */
    public function setDetasi(\DataBundle\Entity\DetalleAsignacion $detasi = null)
    {
        $this->detasi = $detasi;

        return $this;
    }

    /**
     * Get detasi
     *
     * @return \DataBundle\Entity\DetalleAsignacion
     */
    public function getDetasi()
    {
        return $this->detasi;
    }

    /**
     * Set detbaj
     *
     * @param \DataBundle\Entity\DetalleBaja $detbaj
     *
     * @return InventarioLocal
     */
    public function setDetbaj(\DataBundle\Entity\DetalleBaja $detbaj = null)
    {
        $this->detbaj = $detbaj;

        return $this;
    }

    /**
     * Get detbaj
     *
     * @return \DataBundle\Entity\DetalleBaja
     */
    public function getDetbaj()
    {
        return $this->detbaj;
    }

    /**
     * Set detcom
     *
     * @param \DataBundle\Entity\DetalleCompra $detcom
     *
     * @return InventarioLocal
     */
    public function setDetcom(\DataBundle\Entity\DetalleCompra $detcom = null)
    {
        $this->detcom = $detcom;

        return $this;
    }

    /**
     * Get detcom
     *
     * @return \DataBundle\Entity\DetalleCompra
     */
    public function getDetcom()
    {
        return $this->detcom;
    }

    /**
     * Set detcon
     *
     * @param \DataBundle\Entity\DetalleConsignacion $detcon
     *
     * @return InventarioLocal
     */
    public function setDetcon(\DataBundle\Entity\DetalleConsignacion $detcon = null)
    {
        $this->detcon = $detcon;

        return $this;
    }

    /**
     * Get detcon
     *
     * @return \DataBundle\Entity\DetalleConsignacion
     */
    public function getDetcon()
    {
        return $this->detcon;
    }

    /**
     * Set detdev
     *
     * @param \DataBundle\Entity\DetalleDevolucion $detdev
     *
     * @return InventarioLocal
     */
    public function setDetdev(\DataBundle\Entity\DetalleDevolucion $detdev = null)
    {
        $this->detdev = $detdev;

        return $this;
    }

    /**
     * Get detdev
     *
     * @return \DataBundle\Entity\DetalleDevolucion
     */
    public function getDetdev()
    {
        return $this->detdev;
    }

    /**
     * Set detmovi
     *
     * @param \DataBundle\Entity\DetalleMovilizacionIngreso $detmovi
     *
     * @return InventarioLocal
     */
    public function setDetmovi(\DataBundle\Entity\DetalleMovilizacionIngreso $detmovi = null)
    {
        $this->detmovi = $detmovi;

        return $this;
    }

    /**
     * Get detmovi
     *
     * @return \DataBundle\Entity\DetalleMovilizacionIngreso
     */
    public function getDetmovi()
    {
        return $this->detmovi;
    }

    /**
     * Set detmovs
     *
     * @param \DataBundle\Entity\DetalleMovilizacionSalida $detmovs
     *
     * @return InventarioLocal
     */
    public function setDetmovs(\DataBundle\Entity\DetalleMovilizacionSalida $detmovs = null)
    {
        $this->detmovs = $detmovs;

        return $this;
    }

    /**
     * Get detmovs
     *
     * @return \DataBundle\Entity\DetalleMovilizacionSalida
     */
    public function getDetmovs()
    {
        return $this->detmovs;
    }

    /**
     * Set detven
     *
     * @param \DataBundle\Entity\DetalleVenta $detven
     *
     * @return InventarioLocal
     */
    public function setDetven(\DataBundle\Entity\DetalleVenta $detven = null)
    {
        $this->detven = $detven;

        return $this;
    }

    /**
     * Get detven
     *
     * @return \DataBundle\Entity\DetalleVenta
     */
    public function getDetven()
    {
        return $this->detven;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return InventarioLocal
     */
    public function setLoc(\DataBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \DataBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set pro2
     *
     * @param \DataBundle\Entity\Producto $pro2
     *
     * @return InventarioLocal
     */
    public function setPro2(\DataBundle\Entity\Producto $pro2 = null)
    {
        $this->pro2 = $pro2;

        return $this;
    }

    /**
     * Get pro2
     *
     * @return \DataBundle\Entity\Producto
     */
    public function getPro2()
    {
        return $this->pro2;
    }
}

