<?php

namespace DataBundle\Entity;

/**
 * DetalleCajaCierre
 */
class DetalleCajaCierre
{
    /**
     * @var integer
     */
    private $detcieId;

    /**
     * @var \DateTime
     */
    private $detcieFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $detcie1cent;

    /**
     * @var integer
     */
    private $detcie5cent;

    /**
     * @var integer
     */
    private $detcie10cent;

    /**
     * @var integer
     */
    private $detcie25cent;

    /**
     * @var integer
     */
    private $detcie50cent;

    /**
     * @var integer
     */
    private $detcie1dol;

    /**
     * @var integer
     */
    private $detcie2dol;

    /**
     * @var integer
     */
    private $detcie5dol;

    /**
     * @var integer
     */
    private $detcie10dol;

    /**
     * @var integer
     */
    private $detcie20dol;

    /**
     * @var integer
     */
    private $detcie50dol;

    /**
     * @var integer
     */
    private $detcie100dol;

    /**
     * @var float
     */
    private $detcieTotal;

    /**
     * @var \DataBundle\Entity\CajaCierre
     */
    private $cier;


    /**
     * Get detcieId
     *
     * @return integer
     */
    public function getDetcieId()
    {
        return $this->detcieId;
    }

    /**
     * Set detcieFecha
     *
     * @param \DateTime $detcieFecha
     *
     * @return DetalleCajaCierre
     */
    public function setDetcieFecha($detcieFecha)
    {
        $this->detcieFecha = $detcieFecha;

        return $this;
    }

    /**
     * Get detcieFecha
     *
     * @return \DateTime
     */
    public function getDetcieFecha()
    {
        return $this->detcieFecha;
    }

    /**
     * Set detcie1cent
     *
     * @param integer $detcie1cent
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie1cent($detcie1cent)
    {
        $this->detcie1cent = $detcie1cent;

        return $this;
    }

    /**
     * Get detcie1cent
     *
     * @return integer
     */
    public function getDetcie1cent()
    {
        return $this->detcie1cent;
    }

    /**
     * Set detcie5cent
     *
     * @param integer $detcie5cent
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie5cent($detcie5cent)
    {
        $this->detcie5cent = $detcie5cent;

        return $this;
    }

    /**
     * Get detcie5cent
     *
     * @return integer
     */
    public function getDetcie5cent()
    {
        return $this->detcie5cent;
    }

    /**
     * Set detcie10cent
     *
     * @param integer $detcie10cent
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie10cent($detcie10cent)
    {
        $this->detcie10cent = $detcie10cent;

        return $this;
    }

    /**
     * Get detcie10cent
     *
     * @return integer
     */
    public function getDetcie10cent()
    {
        return $this->detcie10cent;
    }

    /**
     * Set detcie25cent
     *
     * @param integer $detcie25cent
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie25cent($detcie25cent)
    {
        $this->detcie25cent = $detcie25cent;

        return $this;
    }

    /**
     * Get detcie25cent
     *
     * @return integer
     */
    public function getDetcie25cent()
    {
        return $this->detcie25cent;
    }

    /**
     * Set detcie50cent
     *
     * @param integer $detcie50cent
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie50cent($detcie50cent)
    {
        $this->detcie50cent = $detcie50cent;

        return $this;
    }

    /**
     * Get detcie50cent
     *
     * @return integer
     */
    public function getDetcie50cent()
    {
        return $this->detcie50cent;
    }

    /**
     * Set detcie1dol
     *
     * @param integer $detcie1dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie1dol($detcie1dol)
    {
        $this->detcie1dol = $detcie1dol;

        return $this;
    }

    /**
     * Get detcie1dol
     *
     * @return integer
     */
    public function getDetcie1dol()
    {
        return $this->detcie1dol;
    }

    /**
     * Set detcie2dol
     *
     * @param integer $detcie2dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie2dol($detcie2dol)
    {
        $this->detcie2dol = $detcie2dol;

        return $this;
    }

    /**
     * Get detcie2dol
     *
     * @return integer
     */
    public function getDetcie2dol()
    {
        return $this->detcie2dol;
    }

    /**
     * Set detcie5dol
     *
     * @param integer $detcie5dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie5dol($detcie5dol)
    {
        $this->detcie5dol = $detcie5dol;

        return $this;
    }

    /**
     * Get detcie5dol
     *
     * @return integer
     */
    public function getDetcie5dol()
    {
        return $this->detcie5dol;
    }

    /**
     * Set detcie10dol
     *
     * @param integer $detcie10dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie10dol($detcie10dol)
    {
        $this->detcie10dol = $detcie10dol;

        return $this;
    }

    /**
     * Get detcie10dol
     *
     * @return integer
     */
    public function getDetcie10dol()
    {
        return $this->detcie10dol;
    }

    /**
     * Set detcie20dol
     *
     * @param integer $detcie20dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie20dol($detcie20dol)
    {
        $this->detcie20dol = $detcie20dol;

        return $this;
    }

    /**
     * Get detcie20dol
     *
     * @return integer
     */
    public function getDetcie20dol()
    {
        return $this->detcie20dol;
    }

    /**
     * Set detcie50dol
     *
     * @param integer $detcie50dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie50dol($detcie50dol)
    {
        $this->detcie50dol = $detcie50dol;

        return $this;
    }

    /**
     * Get detcie50dol
     *
     * @return integer
     */
    public function getDetcie50dol()
    {
        return $this->detcie50dol;
    }

    /**
     * Set detcie100dol
     *
     * @param integer $detcie100dol
     *
     * @return DetalleCajaCierre
     */
    public function setDetcie100dol($detcie100dol)
    {
        $this->detcie100dol = $detcie100dol;

        return $this;
    }

    /**
     * Get detcie100dol
     *
     * @return integer
     */
    public function getDetcie100dol()
    {
        return $this->detcie100dol;
    }

    /**
     * Set detcieTotal
     *
     * @param float $detcieTotal
     *
     * @return DetalleCajaCierre
     */
    public function setDetcieTotal($detcieTotal)
    {
        $this->detcieTotal = $detcieTotal;

        return $this;
    }

    /**
     * Get detcieTotal
     *
     * @return float
     */
    public function getDetcieTotal()
    {
        return $this->detcieTotal;
    }

    /**
     * Set cier
     *
     * @param \DataBundle\Entity\CajaCierre $cier
     *
     * @return DetalleCajaCierre
     */
    public function setCier(\DataBundle\Entity\CajaCierre $cier = null)
    {
        $this->cier = $cier;

        return $this;
    }

    /**
     * Get cier
     *
     * @return \DataBundle\Entity\CajaCierre
     */
    public function getCier()
    {
        return $this->cier;
    }
}

