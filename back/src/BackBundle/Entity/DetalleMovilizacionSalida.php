<?php

namespace BackBundle\Entity;

/**
 * DetalleMovilizacionSalida
 */
class DetalleMovilizacionSalida
{
    /**
     * @var integer
     */
    private $detmovsId;

    /**
     * @var \BackBundle\Entity\Movilizacion
     */
    private $mov;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detmovsId
     *
     * @return integer
     */
    public function getDetmovsId()
    {
        return $this->detmovsId;
    }

    /**
     * Set mov
     *
     * @param \BackBundle\Entity\Movilizacion $mov
     *
     * @return DetalleMovilizacionSalida
     */
    public function setMov(\BackBundle\Entity\Movilizacion $mov = null)
    {
        $this->mov = $mov;

        return $this;
    }

    /**
     * Get mov
     *
     * @return \BackBundle\Entity\Movilizacion
     */
    public function getMov()
    {
        return $this->mov;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleMovilizacionSalida
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

