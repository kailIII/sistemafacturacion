<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\ModuloSistema
     */
    private $modsis;

    /**
     * @var \DataBundle\Entity\PerfilUsuario
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
     * @param \DataBundle\Entity\ModuloSistema $modsis
     *
     * @return PerfilUsuaModSis
     */
    public function setModsis(\DataBundle\Entity\ModuloSistema $modsis = null)
    {
        $this->modsis = $modsis;

        return $this;
    }

    /**
     * Get modsis
     *
     * @return \DataBundle\Entity\ModuloSistema
     */
    public function getModsis()
    {
        return $this->modsis;
    }

    /**
     * Set perusu
     *
     * @param \DataBundle\Entity\PerfilUsuario $perusu
     *
     * @return PerfilUsuaModSis
     */
    public function setPerusu(\DataBundle\Entity\PerfilUsuario $perusu = null)
    {
        $this->perusu = $perusu;

        return $this;
    }

    /**
     * Get perusu
     *
     * @return \DataBundle\Entity\PerfilUsuario
     */
    public function getPerusu()
    {
        return $this->perusu;
    }
}

