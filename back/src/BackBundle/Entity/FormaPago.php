<?php

namespace BackBundle\Entity;

/**
 * FormaPago
 */
class FormaPago
{
    /**
     * @var integer
     */
    private $forpagId;

    /**
     * @var float
     */
    private $forpagTotal;

    /**
     * @var \DateTime
     */
    private $forpagFecha;

    /**
     * @var string
     */
    private $forpagEstado;

    /**
     * @var \BackBundle\Entity\Cheque
     */
    private $che;

    /**
     * @var \BackBundle\Entity\Credito
     */
    private $cre;

    /**
     * @var \BackBundle\Entity\DineroElectronico
     */
    private $dinele;

    /**
     * @var \BackBundle\Entity\Efectivo
     */
    private $efe;

    /**
     * @var \BackBundle\Entity\NotaCredito
     */
    private $notcre;

    /**
     * @var \BackBundle\Entity\NotaDebito
     */
    private $notcre2;

    /**
     * @var \BackBundle\Entity\Transferencia
     */
    private $tra;


    /**
     * Get forpagId
     *
     * @return integer
     */
    public function getForpagId()
    {
        return $this->forpagId;
    }

    /**
     * Set forpagTotal
     *
     * @param float $forpagTotal
     *
     * @return FormaPago
     */
    public function setForpagTotal($forpagTotal)
    {
        $this->forpagTotal = $forpagTotal;

        return $this;
    }

    /**
     * Get forpagTotal
     *
     * @return float
     */
    public function getForpagTotal()
    {
        return $this->forpagTotal;
    }

    /**
     * Set forpagFecha
     *
     * @param \DateTime $forpagFecha
     *
     * @return FormaPago
     */
    public function setForpagFecha($forpagFecha)
    {
        $this->forpagFecha = $forpagFecha;

        return $this;
    }

    /**
     * Get forpagFecha
     *
     * @return \DateTime
     */
    public function getForpagFecha()
    {
        return $this->forpagFecha;
    }

    /**
     * Set forpagEstado
     *
     * @param string $forpagEstado
     *
     * @return FormaPago
     */
    public function setForpagEstado($forpagEstado)
    {
        $this->forpagEstado = $forpagEstado;

        return $this;
    }

    /**
     * Get forpagEstado
     *
     * @return string
     */
    public function getForpagEstado()
    {
        return $this->forpagEstado;
    }

    /**
     * Set che
     *
     * @param \BackBundle\Entity\Cheque $che
     *
     * @return FormaPago
     */
    public function setChe(\BackBundle\Entity\Cheque $che = null)
    {
        $this->che = $che;

        return $this;
    }

    /**
     * Get che
     *
     * @return \BackBundle\Entity\Cheque
     */
    public function getChe()
    {
        return $this->che;
    }

    /**
     * Set cre
     *
     * @param \BackBundle\Entity\Credito $cre
     *
     * @return FormaPago
     */
    public function setCre(\BackBundle\Entity\Credito $cre = null)
    {
        $this->cre = $cre;

        return $this;
    }

    /**
     * Get cre
     *
     * @return \BackBundle\Entity\Credito
     */
    public function getCre()
    {
        return $this->cre;
    }

    /**
     * Set dinele
     *
     * @param \BackBundle\Entity\DineroElectronico $dinele
     *
     * @return FormaPago
     */
    public function setDinele(\BackBundle\Entity\DineroElectronico $dinele = null)
    {
        $this->dinele = $dinele;

        return $this;
    }

    /**
     * Get dinele
     *
     * @return \BackBundle\Entity\DineroElectronico
     */
    public function getDinele()
    {
        return $this->dinele;
    }

    /**
     * Set efe
     *
     * @param \BackBundle\Entity\Efectivo $efe
     *
     * @return FormaPago
     */
    public function setEfe(\BackBundle\Entity\Efectivo $efe = null)
    {
        $this->efe = $efe;

        return $this;
    }

    /**
     * Get efe
     *
     * @return \BackBundle\Entity\Efectivo
     */
    public function getEfe()
    {
        return $this->efe;
    }

    /**
     * Set notcre
     *
     * @param \BackBundle\Entity\NotaCredito $notcre
     *
     * @return FormaPago
     */
    public function setNotcre(\BackBundle\Entity\NotaCredito $notcre = null)
    {
        $this->notcre = $notcre;

        return $this;
    }

    /**
     * Get notcre
     *
     * @return \BackBundle\Entity\NotaCredito
     */
    public function getNotcre()
    {
        return $this->notcre;
    }

    /**
     * Set notcre2
     *
     * @param \BackBundle\Entity\NotaDebito $notcre2
     *
     * @return FormaPago
     */
    public function setNotcre2(\BackBundle\Entity\NotaDebito $notcre2 = null)
    {
        $this->notcre2 = $notcre2;

        return $this;
    }

    /**
     * Get notcre2
     *
     * @return \BackBundle\Entity\NotaDebito
     */
    public function getNotcre2()
    {
        return $this->notcre2;
    }

    /**
     * Set tra
     *
     * @param \BackBundle\Entity\Transferencia $tra
     *
     * @return FormaPago
     */
    public function setTra(\BackBundle\Entity\Transferencia $tra = null)
    {
        $this->tra = $tra;

        return $this;
    }

    /**
     * Get tra
     *
     * @return \BackBundle\Entity\Transferencia
     */
    public function getTra()
    {
        return $this->tra;
    }
}

