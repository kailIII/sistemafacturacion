<?php

namespace DataBundle\Entity;

/**
 * CajaCierre
 */
class CajaCierre
{
    /**
     * @var integer
     */
    private $cierId;

    /**
     * @var \DateTime
     */
    private $cierFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $cierTotal;

    /**
     * @var \DataBundle\Entity\Caja
     */
    private $caj;

    /**
     * @var \DataBundle\Entity\Compra
     */
    private $com;

    /**
     * @var \DataBundle\Entity\Venta
     */
    private $ven;


    /**
     * Get cierId
     *
     * @return integer
     */
    public function getCierId()
    {
        return $this->cierId;
    }

    /**
     * Set cierFecha
     *
     * @param \DateTime $cierFecha
     *
     * @return CajaCierre
     */
    public function setCierFecha($cierFecha)
    {
        $this->cierFecha = $cierFecha;

        return $this;
    }

    /**
     * Get cierFecha
     *
     * @return \DateTime
     */
    public function getCierFecha()
    {
        return $this->cierFecha;
    }

    /**
     * Set cierTotal
     *
     * @param float $cierTotal
     *
     * @return CajaCierre
     */
    public function setCierTotal($cierTotal)
    {
        $this->cierTotal = $cierTotal;

        return $this;
    }

    /**
     * Get cierTotal
     *
     * @return float
     */
    public function getCierTotal()
    {
        return $this->cierTotal;
    }

    /**
     * Set caj
     *
     * @param \DataBundle\Entity\Caja $caj
     *
     * @return CajaCierre
     */
    public function setCaj(\DataBundle\Entity\Caja $caj = null)
    {
        $this->caj = $caj;

        return $this;
    }

    /**
     * Get caj
     *
     * @return \DataBundle\Entity\Caja
     */
    public function getCaj()
    {
        return $this->caj;
    }

    /**
     * Set com
     *
     * @param \DataBundle\Entity\Compra $com
     *
     * @return CajaCierre
     */
    public function setCom(\DataBundle\Entity\Compra $com = null)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get com
     *
     * @return \DataBundle\Entity\Compra
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set ven
     *
     * @param \DataBundle\Entity\Venta $ven
     *
     * @return CajaCierre
     */
    public function setVen(\DataBundle\Entity\Venta $ven = null)
    {
        $this->ven = $ven;

        return $this;
    }

    /**
     * Get ven
     *
     * @return \DataBundle\Entity\Venta
     */
    public function getVen()
    {
        return $this->ven;
    }
}

