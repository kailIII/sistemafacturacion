<?php

namespace DataBundle\Entity;

/**
 * Almacen
 */
class Almacen
{
    /**
     * @var integer
     */
    private $almId;

    /**
     * @var string
     */
    private $almNombre;

    /**
     * @var string
     */
    private $almRuc;

    /**
     * @var string
     */
    private $almWeb;

    /**
     * @var string
     */
    private $almMail;

    /**
     * @var string
     */
    private $almLogo;


    /**
     * Get almId
     *
     * @return integer
     */
    public function getAlmId()
    {
        return $this->almId;
    }

    /**
     * Set almNombre
     *
     * @param string $almNombre
     *
     * @return Almacen
     */
    public function setAlmNombre($almNombre)
    {
        $this->almNombre = $almNombre;

        return $this;
    }

    /**
     * Get almNombre
     *
     * @return string
     */
    public function getAlmNombre()
    {
        return $this->almNombre;
    }

    /**
     * Set almRuc
     *
     * @param string $almRuc
     *
     * @return Almacen
     */
    public function setAlmRuc($almRuc)
    {
        $this->almRuc = $almRuc;

        return $this;
    }

    /**
     * Get almRuc
     *
     * @return string
     */
    public function getAlmRuc()
    {
        return $this->almRuc;
    }

    /**
     * Set almWeb
     *
     * @param string $almWeb
     *
     * @return Almacen
     */
    public function setAlmWeb($almWeb)
    {
        $this->almWeb = $almWeb;

        return $this;
    }

    /**
     * Get almWeb
     *
     * @return string
     */
    public function getAlmWeb()
    {
        return $this->almWeb;
    }

    /**
     * Set almMail
     *
     * @param string $almMail
     *
     * @return Almacen
     */
    public function setAlmMail($almMail)
    {
        $this->almMail = $almMail;

        return $this;
    }

    /**
     * Get almMail
     *
     * @return string
     */
    public function getAlmMail()
    {
        return $this->almMail;
    }

    /**
     * Set almLogo
     *
     * @param string $almLogo
     *
     * @return Almacen
     */
    public function setAlmLogo($almLogo)
    {
        $this->almLogo = $almLogo;

        return $this;
    }

    /**
     * Get almLogo
     *
     * @return string
     */
    public function getAlmLogo()
    {
        return $this->almLogo;
    }
}

