<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Banco
     */
    private $ban;

    /**
     * @var \DataBundle\Entity\Cliente
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
     * @param \DataBundle\Entity\Banco $ban
     *
     * @return BancoCliente
     */
    public function setBan(\DataBundle\Entity\Banco $ban = null)
    {
        $this->ban = $ban;

        return $this;
    }

    /**
     * Get ban
     *
     * @return \DataBundle\Entity\Banco
     */
    public function getBan()
    {
        return $this->ban;
    }

    /**
     * Set cli
     *
     * @param \DataBundle\Entity\Cliente $cli
     *
     * @return BancoCliente
     */
    public function setCli(\DataBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \DataBundle\Entity\Cliente
     */
    public function getCli()
    {
        return $this->cli;
    }
}

