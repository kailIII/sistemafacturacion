<?php

namespace BackBundle\Entity;

/**
 * Provincia
 */
class Provincia
{
    /**
     * @var integer
     */
    private $provId;

    /**
     * @var string
     */
    private $provNombre;

    /**
     * @var string
     */
    private $provRegion;


    /**
     * Get provId
     *
     * @return integer
     */
    public function getProvId()
    {
        return $this->provId;
    }

    /**
     * Set provNombre
     *
     * @param string $provNombre
     *
     * @return Provincia
     */
    public function setProvNombre($provNombre)
    {
        $this->provNombre = $provNombre;

        return $this;
    }

    /**
     * Get provNombre
     *
     * @return string
     */
    public function getProvNombre()
    {
        return $this->provNombre;
    }

    /**
     * Set provRegion
     *
     * @param string $provRegion
     *
     * @return Provincia
     */
    public function setProvRegion($provRegion)
    {
        $this->provRegion = $provRegion;

        return $this;
    }

    /**
     * Get provRegion
     *
     * @return string
     */
    public function getProvRegion()
    {
        return $this->provRegion;
    }
}

