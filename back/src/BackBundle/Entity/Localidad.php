<?php

namespace BackBundle\Entity;

/**
 * Localidad
 */
class Localidad
{
    /**
     * @var integer
     */
    private $locaId;

    /**
     * @var string
     */
    private $locaNombre;

    /**
     * @var \BackBundle\Entity\Provincia
     */
    private $prov;


    /**
     * Get locaId
     *
     * @return integer
     */
    public function getLocaId()
    {
        return $this->locaId;
    }

    /**
     * Set locaNombre
     *
     * @param string $locaNombre
     *
     * @return Localidad
     */
    public function setLocaNombre($locaNombre)
    {
        $this->locaNombre = $locaNombre;

        return $this;
    }

    /**
     * Get locaNombre
     *
     * @return string
     */
    public function getLocaNombre()
    {
        return $this->locaNombre;
    }

    /**
     * Set prov
     *
     * @param \BackBundle\Entity\Provincia $prov
     *
     * @return Localidad
     */
    public function setProv(\BackBundle\Entity\Provincia $prov = null)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return \BackBundle\Entity\Provincia
     */
    public function getProv()
    {
        return $this->prov;
    }
}

