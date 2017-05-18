<?php

namespace BackBundle\Entity;

/**
 * ClienteCategoria
 */
class ClienteCategoria
{
    /**
     * @var integer
     */
    private $clicatId;

    /**
     * @var integer
     */
    private $clicatCantidad;


    /**
     * Get clicatId
     *
     * @return integer
     */
    public function getClicatId()
    {
        return $this->clicatId;
    }

    /**
     * Set clicatCantidad
     *
     * @param integer $clicatCantidad
     *
     * @return ClienteCategoria
     */
    public function setClicatCantidad($clicatCantidad)
    {
        $this->clicatCantidad = $clicatCantidad;

        return $this;
    }

    /**
     * Get clicatCantidad
     *
     * @return integer
     */
    public function getClicatCantidad()
    {
        return $this->clicatCantidad;
    }
}

