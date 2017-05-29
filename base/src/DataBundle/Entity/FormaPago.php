<?php

namespace DataBundle\Entity;

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
     * @var \DataBundle\Entity\Cheque
     */
    private $che;

    /**
     * @var \DataBundle\Entity\Credito
     */
    private $cre;

    /**
     * @var \DataBundle\Entity\DineroElectronico
     */
    private $dinele;

    /**
     * @var \DataBundle\Entity\Efectivo
     */
    private $efe;

    /**
     * @var \DataBundle\Entity\NotaCredito
     */
    private $notcre;

    /**
     * @var \DataBundle\Entity\NotaDebito
     */
    private $notcre2;

    /**
     * @var \DataBundle\Entity\Transferencia
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
     * @param \DataBundle\Entity\Cheque $che
     *
     * @return FormaPago
     */
    public function setChe(\DataBundle\Entity\Cheque $che = null)
    {
        $this->che = $che;

        return $this;
    }

    /**
     * Get che
     *
     * @return \DataBundle\Entity\Cheque
     */
    public function getChe()
    {
        return $this->che;
    }

    /**
     * Set cre
     *
     * @param \DataBundle\Entity\Credito $cre
     *
     * @return FormaPago
     */
    public function setCre(\DataBundle\Entity\Credito $cre = null)
    {
        $this->cre = $cre;

        return $this;
    }

    /**
     * Get cre
     *
     * @return \DataBundle\Entity\Credito
     */
    public function getCre()
    {
        return $this->cre;
    }

    /**
     * Set dinele
     *
     * @param \DataBundle\Entity\DineroElectronico $dinele
     *
     * @return FormaPago
     */
    public function setDinele(\DataBundle\Entity\DineroElectronico $dinele = null)
    {
        $this->dinele = $dinele;

        return $this;
    }

    /**
     * Get dinele
     *
     * @return \DataBundle\Entity\DineroElectronico
     */
    public function getDinele()
    {
        return $this->dinele;
    }

    /**
     * Set efe
     *
     * @param \DataBundle\Entity\Efectivo $efe
     *
     * @return FormaPago
     */
    public function setEfe(\DataBundle\Entity\Efectivo $efe = null)
    {
        $this->efe = $efe;

        return $this;
    }

    /**
     * Get efe
     *
     * @return \DataBundle\Entity\Efectivo
     */
    public function getEfe()
    {
        return $this->efe;
    }

    /**
     * Set notcre
     *
     * @param \DataBundle\Entity\NotaCredito $notcre
     *
     * @return FormaPago
     */
    public function setNotcre(\DataBundle\Entity\NotaCredito $notcre = null)
    {
        $this->notcre = $notcre;

        return $this;
    }

    /**
     * Get notcre
     *
     * @return \DataBundle\Entity\NotaCredito
     */
    public function getNotcre()
    {
        return $this->notcre;
    }

    /**
     * Set notcre2
     *
     * @param \DataBundle\Entity\NotaDebito $notcre2
     *
     * @return FormaPago
     */
    public function setNotcre2(\DataBundle\Entity\NotaDebito $notcre2 = null)
    {
        $this->notcre2 = $notcre2;

        return $this;
    }

    /**
     * Get notcre2
     *
     * @return \DataBundle\Entity\NotaDebito
     */
    public function getNotcre2()
    {
        return $this->notcre2;
    }

    /**
     * Set tra
     *
     * @param \DataBundle\Entity\Transferencia $tra
     *
     * @return FormaPago
     */
    public function setTra(\DataBundle\Entity\Transferencia $tra = null)
    {
        $this->tra = $tra;

        return $this;
    }

    /**
     * Get tra
     *
     * @return \DataBundle\Entity\Transferencia
     */
    public function getTra()
    {
        return $this->tra;
    }
}

