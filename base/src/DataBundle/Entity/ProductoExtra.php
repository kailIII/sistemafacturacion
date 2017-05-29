<?php

namespace DataBundle\Entity;

/**
 * ProductoExtra
 */
class ProductoExtra
{
    /**
     * @var integer
     */
    private $proextId;

    /**
     * @var string
     */
    private $proextNombre;

    /**
     * @var string
     */
    private $proextDescripcion;

    /**
     * @var string
     */
    private $proextTipo;


    /**
     * Get proextId
     *
     * @return integer
     */
    public function getProextId()
    {
        return $this->proextId;
    }

    /**
     * Set proextNombre
     *
     * @param string $proextNombre
     *
     * @return ProductoExtra
     */
    public function setProextNombre($proextNombre)
    {
        $this->proextNombre = $proextNombre;

        return $this;
    }

    /**
     * Get proextNombre
     *
     * @return string
     */
    public function getProextNombre()
    {
        return $this->proextNombre;
    }

    /**
     * Set proextDescripcion
     *
     * @param string $proextDescripcion
     *
     * @return ProductoExtra
     */
    public function setProextDescripcion($proextDescripcion)
    {
        $this->proextDescripcion = $proextDescripcion;

        return $this;
    }

    /**
     * Get proextDescripcion
     *
     * @return string
     */
    public function getProextDescripcion()
    {
        return $this->proextDescripcion;
    }

    /**
     * Set proextTipo
     *
     * @param string $proextTipo
     *
     * @return ProductoExtra
     */
    public function setProextTipo($proextTipo)
    {
        $this->proextTipo = $proextTipo;

        return $this;
    }

    /**
     * Get proextTipo
     *
     * @return string
     */
    public function getProextTipo()
    {
        return $this->proextTipo;
    }
}

