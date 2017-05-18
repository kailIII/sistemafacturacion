<?php

namespace BackBundle\Entity;

/**
 * Compra
 */
class Compra
{
    /**
     * @var integer
     */
    private $comId;

    /**
     * @var \DateTime
     */
    private $comFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $comTotal;


    /**
     * Get comId
     *
     * @return integer
     */
    public function getComId()
    {
        return $this->comId;
    }

    /**
     * Set comFecha
     *
     * @param \DateTime $comFecha
     *
     * @return Compra
     */
    public function setComFecha($comFecha)
    {
        $this->comFecha = $comFecha;

        return $this;
    }

    /**
     * Get comFecha
     *
     * @return \DateTime
     */
    public function getComFecha()
    {
        return $this->comFecha;
    }

    /**
     * Set comTotal
     *
     * @param float $comTotal
     *
     * @return Compra
     */
    public function setComTotal($comTotal)
    {
        $this->comTotal = $comTotal;

        return $this;
    }

    /**
     * Get comTotal
     *
     * @return float
     */
    public function getComTotal()
    {
        return $this->comTotal;
    }
}

