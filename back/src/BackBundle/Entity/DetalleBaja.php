<?php

namespace BackBundle\Entity;

/**
 * DetalleBaja
 */
class DetalleBaja
{
    /**
     * @var integer
     */
    private $detbajId;

    /**
     * @var integer
     */
    private $detbajCantidad;

    /**
     * @var string
     */
    private $detbajMotivos;

    /**
     * @var \BackBundle\Entity\Baja
     */
    private $baj;

    /**
     * @var \BackBundle\Entity\Producto
     */
    private $pro2;


    /**
     * Get detbajId
     *
     * @return integer
     */
    public function getDetbajId()
    {
        return $this->detbajId;
    }

    /**
     * Set detbajCantidad
     *
     * @param integer $detbajCantidad
     *
     * @return DetalleBaja
     */
    public function setDetbajCantidad($detbajCantidad)
    {
        $this->detbajCantidad = $detbajCantidad;

        return $this;
    }

    /**
     * Get detbajCantidad
     *
     * @return integer
     */
    public function getDetbajCantidad()
    {
        return $this->detbajCantidad;
    }

    /**
     * Set detbajMotivos
     *
     * @param string $detbajMotivos
     *
     * @return DetalleBaja
     */
    public function setDetbajMotivos($detbajMotivos)
    {
        $this->detbajMotivos = $detbajMotivos;

        return $this;
    }

    /**
     * Get detbajMotivos
     *
     * @return string
     */
    public function getDetbajMotivos()
    {
        return $this->detbajMotivos;
    }

    /**
     * Set baj
     *
     * @param \BackBundle\Entity\Baja $baj
     *
     * @return DetalleBaja
     */
    public function setBaj(\BackBundle\Entity\Baja $baj = null)
    {
        $this->baj = $baj;

        return $this;
    }

    /**
     * Get baj
     *
     * @return \BackBundle\Entity\Baja
     */
    public function getBaj()
    {
        return $this->baj;
    }

    /**
     * Set pro2
     *
     * @param \BackBundle\Entity\Producto $pro2
     *
     * @return DetalleBaja
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

