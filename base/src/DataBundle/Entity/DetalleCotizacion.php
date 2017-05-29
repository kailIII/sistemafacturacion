<?php

namespace DataBundle\Entity;

/**
 * DetalleCotizacion
 */
class DetalleCotizacion
{
    /**
     * @var integer
     */
    private $detcotId;

    /**
     * @var float
     */
    private $detcotCantidad;

    /**
     * @var float
     */
    private $detcotValorunitario;

    /**
     * @var float
     */
    private $detcotValortotal;

    /**
     * @var \DataBundle\Entity\Cotizacion
     */
    private $cot;

    /**
     * @var \DataBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detcotId
     *
     * @return integer
     */
    public function getDetcotId()
    {
        return $this->detcotId;
    }

    /**
     * Set detcotCantidad
     *
     * @param float $detcotCantidad
     *
     * @return DetalleCotizacion
     */
    public function setDetcotCantidad($detcotCantidad)
    {
        $this->detcotCantidad = $detcotCantidad;

        return $this;
    }

    /**
     * Get detcotCantidad
     *
     * @return float
     */
    public function getDetcotCantidad()
    {
        return $this->detcotCantidad;
    }

    /**
     * Set detcotValorunitario
     *
     * @param float $detcotValorunitario
     *
     * @return DetalleCotizacion
     */
    public function setDetcotValorunitario($detcotValorunitario)
    {
        $this->detcotValorunitario = $detcotValorunitario;

        return $this;
    }

    /**
     * Get detcotValorunitario
     *
     * @return float
     */
    public function getDetcotValorunitario()
    {
        return $this->detcotValorunitario;
    }

    /**
     * Set detcotValortotal
     *
     * @param float $detcotValortotal
     *
     * @return DetalleCotizacion
     */
    public function setDetcotValortotal($detcotValortotal)
    {
        $this->detcotValortotal = $detcotValortotal;

        return $this;
    }

    /**
     * Get detcotValortotal
     *
     * @return float
     */
    public function getDetcotValortotal()
    {
        return $this->detcotValortotal;
    }

    /**
     * Set cot
     *
     * @param \DataBundle\Entity\Cotizacion $cot
     *
     * @return DetalleCotizacion
     */
    public function setCot(\DataBundle\Entity\Cotizacion $cot = null)
    {
        $this->cot = $cot;

        return $this;
    }

    /**
     * Get cot
     *
     * @return \DataBundle\Entity\Cotizacion
     */
    public function getCot()
    {
        return $this->cot;
    }

    /**
     * Set pro2
     *
     * @param \DataBundle\Entity\Producto $pro2
     *
     * @return DetalleCotizacion
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

