<?php

namespace BackBundle\Entity;

/**
 * DetalleMovilizacionIngreso
 */
class DetalleMovilizacionIngreso
{
    /**
     * @var integer
     */
    private $detmoviId;

    /**
     * @var \BackBundle\Entity\Movilizacion
     */
    private $mov;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detmoviId
     *
     * @return integer
     */
    public function getDetmoviId()
    {
        return $this->detmoviId;
    }

    /**
     * Set mov
     *
     * @param \BackBundle\Entity\Movilizacion $mov
     *
     * @return DetalleMovilizacionIngreso
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
     * @return DetalleMovilizacionIngreso
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

