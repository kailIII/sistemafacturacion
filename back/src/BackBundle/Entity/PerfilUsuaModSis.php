<?php

namespace BackBundle\Entity;

/**
 * PerfilUsuaModSis
 */
class PerfilUsuaModSis
{
    /**
     * @var integer
     */
    private $pumsId;

    /**
     * @var string
     */
    private $pumsDescripcion;

    /**
     * @var \BackBundle\Entity\ModuloSistema
     */
    private $modsis;

    /**
     * @var \BackBundle\Entity\PerfilUsuario
     */
    private $perusu;


    /**
     * Get pumsId
     *
     * @return integer
     */
    public function getPumsId()
    {
        return $this->pumsId;
    }

    /**
     * Set pumsDescripcion
     *
     * @param string $pumsDescripcion
     *
     * @return PerfilUsuaModSis
     */
    public function setPumsDescripcion($pumsDescripcion)
    {
        $this->pumsDescripcion = $pumsDescripcion;

        return $this;
    }

    /**
     * Get pumsDescripcion
     *
     * @return string
     */
    public function getPumsDescripcion()
    {
        return $this->pumsDescripcion;
    }

    /**
     * Set modsis
     *
     * @param \BackBundle\Entity\ModuloSistema $modsis
     *
     * @return PerfilUsuaModSis
     */
    public function setModsis(\BackBundle\Entity\ModuloSistema $modsis = null)
    {
        $this->modsis = $modsis;

        return $this;
    }

    /**
     * Get modsis
     *
     * @return \BackBundle\Entity\ModuloSistema
     */
    public function getModsis()
    {
        return $this->modsis;
    }

    /**
     * Set perusu
     *
     * @param \BackBundle\Entity\PerfilUsuario $perusu
     *
     * @return PerfilUsuaModSis
     */
    public function setPerusu(\BackBundle\Entity\PerfilUsuario $perusu = null)
    {
        $this->perusu = $perusu;

        return $this;
    }

    /**
     * Get perusu
     *
     * @return \BackBundle\Entity\PerfilUsuario
     */
    public function getPerusu()
    {
        return $this->perusu;
    }
}

