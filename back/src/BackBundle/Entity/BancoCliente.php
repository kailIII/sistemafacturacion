<?php

namespace BackBundle\Entity;

/**
 * BancoCliente
 */
class BancoCliente
{
    /**
     * @var integer
     */
    private $bancliId;

    /**
     * @var string
     */
    private $bancliDescripcion;

    /**
     * @var \BackBundle\Entity\Banco
     */
    private $ban;

    /**
     * @var \BackBundle\Entity\Cliente
     */
    private $cli;


    /**
     * Get bancliId
     *
     * @return integer
     */
    public function getBancliId()
    {
        return $this->bancliId;
    }

    /**
     * Set bancliDescripcion
     *
     * @param string $bancliDescripcion
     *
     * @return BancoCliente
     */
    public function setBancliDescripcion($bancliDescripcion)
    {
        $this->bancliDescripcion = $bancliDescripcion;

        return $this;
    }

    /**
     * Get bancliDescripcion
     *
     * @return string
     */
    public function getBancliDescripcion()
    {
        return $this->bancliDescripcion;
    }

    /**
     * Set ban
     *
     * @param \BackBundle\Entity\Banco $ban
     *
     * @return BancoCliente
     */
    public function setBan(\BackBundle\Entity\Banco $ban = null)
    {
        $this->ban = $ban;

        return $this;
    }

    /**
     * Get ban
     *
     * @return \BackBundle\Entity\Banco
     */
    public function getBan()
    {
        return $this->ban;
    }

    /**
     * Set cli
     *
     * @param \BackBundle\Entity\Cliente $cli
     *
     * @return BancoCliente
     */
    public function setCli(\BackBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \BackBundle\Entity\Cliente
     */
    public function getCli()
    {
        return $this->cli;
    }
}

