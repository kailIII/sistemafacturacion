<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Movilizacion
     */
    private $mov;

    /**
     * @var \DataBundle\Entity\Producto
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
     * @param \DataBundle\Entity\Movilizacion $mov
     *
     * @return DetalleMovilizacionIngreso
     */
    public function setMov(\DataBundle\Entity\Movilizacion $mov = null)
    {
        $this->mov = $mov;

        return $this;
    }

    /**
     * Get mov
     *
     * @return \DataBundle\Entity\Movilizacion
     */
    public function getMov()
    {
        return $this->mov;
    }

    /**
     * Set pro2
     *
     * @param \DataBundle\Entity\Producto $pro2
     *
     * @return DetalleMovilizacionIngreso
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

