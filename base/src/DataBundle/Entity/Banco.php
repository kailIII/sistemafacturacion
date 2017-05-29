<?php

namespace DataBundle\Entity;

/**
 * Banco
 */
class Banco
{
    /**
     * @var integer
     */
    private $banId;

    /**
     * @var string
     */
    private $banNombre;

    /**
     * @var string
     */
    private $banDescripcion;


    /**
     * Get banId
     *
     * @return integer
     */
    public function getBanId()
    {
        return $this->banId;
    }

    /**
     * Set banNombre
     *
     * @param string $banNombre
     *
     * @return Banco
     */
    public function setBanNombre($banNombre)
    {
        $this->banNombre = $banNombre;

        return $this;
    }

    /**
     * Get banNombre
     *
     * @return string
     */
    public function getBanNombre()
    {
        return $this->banNombre;
    }

    /**
     * Set banDescripcion
     *
     * @param string $banDescripcion
     *
     * @return Banco
     */
    public function setBanDescripcion($banDescripcion)
    {
        $this->banDescripcion = $banDescripcion;

        return $this;
    }

    /**
     * Get banDescripcion
     *
     * @return string
     */
    public function getBanDescripcion()
    {
        return $this->banDescripcion;
    }
}

