<?php

namespace DataBundle\Entity;

/**
 * Georeferencia
 */
class Georeferencia
{
    /**
     * @var integer
     */
    private $geoId;

    /**
     * @var string
     */
    private $geoCiudad;

    /**
     * @var string
     */
    private $geoProvincia;

    /**
     * @var string
     */
    private $geoRegion;

    /**
     * @var string
     */
    private $geoPais;

    /**
     * @var string
     */
    private $geoSector;


    /**
     * Get geoId
     *
     * @return integer
     */
    public function getGeoId()
    {
        return $this->geoId;
    }

    /**
     * Set geoCiudad
     *
     * @param string $geoCiudad
     *
     * @return Georeferencia
     */
    public function setGeoCiudad($geoCiudad)
    {
        $this->geoCiudad = $geoCiudad;

        return $this;
    }

    /**
     * Get geoCiudad
     *
     * @return string
     */
    public function getGeoCiudad()
    {
        return $this->geoCiudad;
    }

    /**
     * Set geoProvincia
     *
     * @param string $geoProvincia
     *
     * @return Georeferencia
     */
    public function setGeoProvincia($geoProvincia)
    {
        $this->geoProvincia = $geoProvincia;

        return $this;
    }

    /**
     * Get geoProvincia
     *
     * @return string
     */
    public function getGeoProvincia()
    {
        return $this->geoProvincia;
    }

    /**
     * Set geoRegion
     *
     * @param string $geoRegion
     *
     * @return Georeferencia
     */
    public function setGeoRegion($geoRegion)
    {
        $this->geoRegion = $geoRegion;

        return $this;
    }

    /**
     * Get geoRegion
     *
     * @return string
     */
    public function getGeoRegion()
    {
        return $this->geoRegion;
    }

    /**
     * Set geoPais
     *
     * @param string $geoPais
     *
     * @return Georeferencia
     */
    public function setGeoPais($geoPais)
    {
        $this->geoPais = $geoPais;

        return $this;
    }

    /**
     * Get geoPais
     *
     * @return string
     */
    public function getGeoPais()
    {
        return $this->geoPais;
    }

    /**
     * Set geoSector
     *
     * @param string $geoSector
     *
     * @return Georeferencia
     */
    public function setGeoSector($geoSector)
    {
        $this->geoSector = $geoSector;

        return $this;
    }

    /**
     * Get geoSector
     *
     * @return string
     */
    public function getGeoSector()
    {
        return $this->geoSector;
    }
}

