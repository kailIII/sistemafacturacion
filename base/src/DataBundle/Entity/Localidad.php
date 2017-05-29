<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Provincia
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
     * @param \DataBundle\Entity\Provincia $prov
     *
     * @return Localidad
     */
    public function setProv(\DataBundle\Entity\Provincia $prov = null)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return \DataBundle\Entity\Provincia
     */
    public function getProv()
    {
        return $this->prov;
    }
}

