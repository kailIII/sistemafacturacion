<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Movilizacion
     */
    private $mov;

    /**
     * @var \DataBundle\Entity\Producto
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
     * @param \DataBundle\Entity\Movilizacion $mov
     *
     * @return DetalleMovilizacionSalida
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
     * @return DetalleMovilizacionSalida
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

