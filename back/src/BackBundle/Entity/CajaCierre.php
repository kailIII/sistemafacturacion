<?php

namespace BackBundle\Entity;

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
     * @var \BackBundle\Entity\Caja
     */
    private $caj;

    /**
     * @var \BackBundle\Entity\Compra
     */
    private $com;

    /**
     * @var \BackBundle\Entity\Venta
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
     * @param \BackBundle\Entity\Caja $caj
     *
     * @return CajaCierre
     */
    public function setCaj(\BackBundle\Entity\Caja $caj = null)
    {
        $this->caj = $caj;

        return $this;
    }

    /**
     * Get caj
     *
     * @return \BackBundle\Entity\Caja
     */
    public function getCaj()
    {
        return $this->caj;
    }

    /**
     * Set com
     *
     * @param \BackBundle\Entity\Compra $com
     *
     * @return CajaCierre
     */
    public function setCom(\BackBundle\Entity\Compra $com = null)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get com
     *
     * @return \BackBundle\Entity\Compra
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set ven
     *
     * @param \BackBundle\Entity\Venta $ven
     *
     * @return CajaCierre
     */
    public function setVen(\BackBundle\Entity\Venta $ven = null)
    {
        $this->ven = $ven;

        return $this;
    }

    /**
     * Get ven
     *
     * @return \BackBundle\Entity\Venta
     */
    public function getVen()
    {
        return $this->ven;
    }
}

