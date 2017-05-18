<?php

namespace BackBundle\Entity;

/**
 * PermisosSistema
 */
class PermisosSistema
{
    /**
     * @var integer
     */
    private $persisId;

    /**
     * @var \DateTime
     */
    private $persisFechainicio;

    /**
     * @var \DateTime
     */
    private $persisFechafin;

    /**
     * @var string
     */
    private $persisMotivosfin;

    /**
     * @var string
     */
    private $persisEstado;

    /**
     * @var \BackBundle\Entity\EmpleadoLocal
     */
    private $emploc;

    /**
     * @var \BackBundle\Entity\PerfilUsuaModSis
     */
    private $pums;


    /**
     * Get persisId
     *
     * @return integer
     */
    public function getPersisId()
    {
        return $this->persisId;
    }

    /**
     * Set persisFechainicio
     *
     * @param \DateTime $persisFechainicio
     *
     * @return PermisosSistema
     */
    public function setPersisFechainicio($persisFechainicio)
    {
        $this->persisFechainicio = $persisFechainicio;

        return $this;
    }

    /**
     * Get persisFechainicio
     *
     * @return \DateTime
     */
    public function getPersisFechainicio()
    {
        return $this->persisFechainicio;
    }

    /**
     * Set persisFechafin
     *
     * @param \DateTime $persisFechafin
     *
     * @return PermisosSistema
     */
    public function setPersisFechafin($persisFechafin)
    {
        $this->persisFechafin = $persisFechafin;

        return $this;
    }

    /**
     * Get persisFechafin
     *
     * @return \DateTime
     */
    public function getPersisFechafin()
    {
        return $this->persisFechafin;
    }

    /**
     * Set persisMotivosfin
     *
     * @param string $persisMotivosfin
     *
     * @return PermisosSistema
     */
    public function setPersisMotivosfin($persisMotivosfin)
    {
        $this->persisMotivosfin = $persisMotivosfin;

        return $this;
    }

    /**
     * Get persisMotivosfin
     *
     * @return string
     */
    public function getPersisMotivosfin()
    {
        return $this->persisMotivosfin;
    }

    /**
     * Set persisEstado
     *
     * @param string $persisEstado
     *
     * @return PermisosSistema
     */
    public function setPersisEstado($persisEstado)
    {
        $this->persisEstado = $persisEstado;

        return $this;
    }

    /**
     * Get persisEstado
     *
     * @return string
     */
    public function getPersisEstado()
    {
        return $this->persisEstado;
    }

    /**
     * Set emploc
     *
     * @param \BackBundle\Entity\EmpleadoLocal $emploc
     *
     * @return PermisosSistema
     */
    public function setEmploc(\BackBundle\Entity\EmpleadoLocal $emploc = null)
    {
        $this->emploc = $emploc;

        return $this;
    }

    /**
     * Get emploc
     *
     * @return \BackBundle\Entity\EmpleadoLocal
     */
    public function getEmploc()
    {
        return $this->emploc;
    }

    /**
     * Set pums
     *
     * @param \BackBundle\Entity\PerfilUsuaModSis $pums
     *
     * @return PermisosSistema
     */
    public function setPums(\BackBundle\Entity\PerfilUsuaModSis $pums = null)
    {
        $this->pums = $pums;

        return $this;
    }

    /**
     * Get pums
     *
     * @return \BackBundle\Entity\PerfilUsuaModSis
     */
    public function getPums()
    {
        return $this->pums;
    }
}

