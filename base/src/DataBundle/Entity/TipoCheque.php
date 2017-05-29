<?php

namespace DataBundle\Entity;

/**
 * TipoCheque
 */
class TipoCheque
{
    /**
     * @var integer
     */
    private $tipcheId;

    /**
     * @var string
     */
    private $tipcheNombre;


    /**
     * Get tipcheId
     *
     * @return integer
     */
    public function getTipcheId()
    {
        return $this->tipcheId;
    }

    /**
     * Set tipcheNombre
     *
     * @param string $tipcheNombre
     *
     * @return TipoCheque
     */
    public function setTipcheNombre($tipcheNombre)
    {
        $this->tipcheNombre = $tipcheNombre;

        return $this;
    }

    /**
     * Get tipcheNombre
     *
     * @return string
     */
    public function getTipcheNombre()
    {
        return $this->tipcheNombre;
    }
}

