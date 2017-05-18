<?php

namespace BackBundle\Entity;

/**
 * CajaApertura
 */
class CajaApertura
{
    /**
     * @var integer
     */
    private $cajapeId;

    /**
     * @var \DateTime
     */
    private $cajapeFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $cajape1cent;

    /**
     * @var integer
     */
    private $cajape5cent;

    /**
     * @var integer
     */
    private $cajape10cent;

    /**
     * @var integer
     */
    private $cajape25cent;

    /**
     * @var integer
     */
    private $cajape50cent;

    /**
     * @var integer
     */
    private $cajape1dol;

    /**
     * @var integer
     */
    private $cajape2dol;

    /**
     * @var integer
     */
    private $cajape5dol;

    /**
     * @var integer
     */
    private $cajape10dol;

    /**
     * @var integer
     */
    private $cajape20dol;

    /**
     * @var integer
     */
    private $cajape50dol;

    /**
     * @var integer
     */
    private $cajape100dol;

    /**
     * @var float
     */
    private $cajapeTotal;

    /**
     * @var \BackBundle\Entity\Caja
     */
    private $caj;


    /**
     * Get cajapeId
     *
     * @return integer
     */
    public function getCajapeId()
    {
        return $this->cajapeId;
    }

    /**
     * Set cajapeFecha
     *
     * @param \DateTime $cajapeFecha
     *
     * @return CajaApertura
     */
    public function setCajapeFecha($cajapeFecha)
    {
        $this->cajapeFecha = $cajapeFecha;

        return $this;
    }

    /**
     * Get cajapeFecha
     *
     * @return \DateTime
     */
    public function getCajapeFecha()
    {
        return $this->cajapeFecha;
    }

    /**
     * Set cajape1cent
     *
     * @param integer $cajape1cent
     *
     * @return CajaApertura
     */
    public function setCajape1cent($cajape1cent)
    {
        $this->cajape1cent = $cajape1cent;

        return $this;
    }

    /**
     * Get cajape1cent
     *
     * @return integer
     */
    public function getCajape1cent()
    {
        return $this->cajape1cent;
    }

    /**
     * Set cajape5cent
     *
     * @param integer $cajape5cent
     *
     * @return CajaApertura
     */
    public function setCajape5cent($cajape5cent)
    {
        $this->cajape5cent = $cajape5cent;

        return $this;
    }

    /**
     * Get cajape5cent
     *
     * @return integer
     */
    public function getCajape5cent()
    {
        return $this->cajape5cent;
    }

    /**
     * Set cajape10cent
     *
     * @param integer $cajape10cent
     *
     * @return CajaApertura
     */
    public function setCajape10cent($cajape10cent)
    {
        $this->cajape10cent = $cajape10cent;

        return $this;
    }

    /**
     * Get cajape10cent
     *
     * @return integer
     */
    public function getCajape10cent()
    {
        return $this->cajape10cent;
    }

    /**
     * Set cajape25cent
     *
     * @param integer $cajape25cent
     *
     * @return CajaApertura
     */
    public function setCajape25cent($cajape25cent)
    {
        $this->cajape25cent = $cajape25cent;

        return $this;
    }

    /**
     * Get cajape25cent
     *
     * @return integer
     */
    public function getCajape25cent()
    {
        return $this->cajape25cent;
    }

    /**
     * Set cajape50cent
     *
     * @param integer $cajape50cent
     *
     * @return CajaApertura
     */
    public function setCajape50cent($cajape50cent)
    {
        $this->cajape50cent = $cajape50cent;

        return $this;
    }

    /**
     * Get cajape50cent
     *
     * @return integer
     */
    public function getCajape50cent()
    {
        return $this->cajape50cent;
    }

    /**
     * Set cajape1dol
     *
     * @param integer $cajape1dol
     *
     * @return CajaApertura
     */
    public function setCajape1dol($cajape1dol)
    {
        $this->cajape1dol = $cajape1dol;

        return $this;
    }

    /**
     * Get cajape1dol
     *
     * @return integer
     */
    public function getCajape1dol()
    {
        return $this->cajape1dol;
    }

    /**
     * Set cajape2dol
     *
     * @param integer $cajape2dol
     *
     * @return CajaApertura
     */
    public function setCajape2dol($cajape2dol)
    {
        $this->cajape2dol = $cajape2dol;

        return $this;
    }

    /**
     * Get cajape2dol
     *
     * @return integer
     */
    public function getCajape2dol()
    {
        return $this->cajape2dol;
    }

    /**
     * Set cajape5dol
     *
     * @param integer $cajape5dol
     *
     * @return CajaApertura
     */
    public function setCajape5dol($cajape5dol)
    {
        $this->cajape5dol = $cajape5dol;

        return $this;
    }

    /**
     * Get cajape5dol
     *
     * @return integer
     */
    public function getCajape5dol()
    {
        return $this->cajape5dol;
    }

    /**
     * Set cajape10dol
     *
     * @param integer $cajape10dol
     *
     * @return CajaApertura
     */
    public function setCajape10dol($cajape10dol)
    {
        $this->cajape10dol = $cajape10dol;

        return $this;
    }

    /**
     * Get cajape10dol
     *
     * @return integer
     */
    public function getCajape10dol()
    {
        return $this->cajape10dol;
    }

    /**
     * Set cajape20dol
     *
     * @param integer $cajape20dol
     *
     * @return CajaApertura
     */
    public function setCajape20dol($cajape20dol)
    {
        $this->cajape20dol = $cajape20dol;

        return $this;
    }

    /**
     * Get cajape20dol
     *
     * @return integer
     */
    public function getCajape20dol()
    {
        return $this->cajape20dol;
    }

    /**
     * Set cajape50dol
     *
     * @param integer $cajape50dol
     *
     * @return CajaApertura
     */
    public function setCajape50dol($cajape50dol)
    {
        $this->cajape50dol = $cajape50dol;

        return $this;
    }

    /**
     * Get cajape50dol
     *
     * @return integer
     */
    public function getCajape50dol()
    {
        return $this->cajape50dol;
    }

    /**
     * Set cajape100dol
     *
     * @param integer $cajape100dol
     *
     * @return CajaApertura
     */
    public function setCajape100dol($cajape100dol)
    {
        $this->cajape100dol = $cajape100dol;

        return $this;
    }

    /**
     * Get cajape100dol
     *
     * @return integer
     */
    public function getCajape100dol()
    {
        return $this->cajape100dol;
    }

    /**
     * Set cajapeTotal
     *
     * @param float $cajapeTotal
     *
     * @return CajaApertura
     */
    public function setCajapeTotal($cajapeTotal)
    {
        $this->cajapeTotal = $cajapeTotal;

        return $this;
    }

    /**
     * Get cajapeTotal
     *
     * @return float
     */
    public function getCajapeTotal()
    {
        return $this->cajapeTotal;
    }

    /**
     * Set caj
     *
     * @param \BackBundle\Entity\Caja $caj
     *
     * @return CajaApertura
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
}

