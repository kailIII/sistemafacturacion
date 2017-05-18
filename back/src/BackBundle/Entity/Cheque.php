<?php

namespace BackBundle\Entity;

/**
 * Cheque
 */
class Cheque
{
    /**
     * @var integer
     */
    private $cheId;

    /**
     * @var string
     */
    private $cheNumerocheque;

    /**
     * @var float
     */
    private $cheValor;

    /**
     * @var \DateTime
     */
    private $cheFechapago;

    /**
     * @var \BackBundle\Entity\Cuenta
     */
    private $cue;

    /**
     * @var \BackBundle\Entity\TipoCheque
     */
    private $tipche;


    /**
     * Get cheId
     *
     * @return integer
     */
    public function getCheId()
    {
        return $this->cheId;
    }

    /**
     * Set cheNumerocheque
     *
     * @param string $cheNumerocheque
     *
     * @return Cheque
     */
    public function setCheNumerocheque($cheNumerocheque)
    {
        $this->cheNumerocheque = $cheNumerocheque;

        return $this;
    }

    /**
     * Get cheNumerocheque
     *
     * @return string
     */
    public function getCheNumerocheque()
    {
        return $this->cheNumerocheque;
    }

    /**
     * Set cheValor
     *
     * @param float $cheValor
     *
     * @return Cheque
     */
    public function setCheValor($cheValor)
    {
        $this->cheValor = $cheValor;

        return $this;
    }

    /**
     * Get cheValor
     *
     * @return float
     */
    public function getCheValor()
    {
        return $this->cheValor;
    }

    /**
     * Set cheFechapago
     *
     * @param \DateTime $cheFechapago
     *
     * @return Cheque
     */
    public function setCheFechapago($cheFechapago)
    {
        $this->cheFechapago = $cheFechapago;

        return $this;
    }

    /**
     * Get cheFechapago
     *
     * @return \DateTime
     */
    public function getCheFechapago()
    {
        return $this->cheFechapago;
    }

    /**
     * Set cue
     *
     * @param \BackBundle\Entity\Cuenta $cue
     *
     * @return Cheque
     */
    public function setCue(\BackBundle\Entity\Cuenta $cue = null)
    {
        $this->cue = $cue;

        return $this;
    }

    /**
     * Get cue
     *
     * @return \BackBundle\Entity\Cuenta
     */
    public function getCue()
    {
        return $this->cue;
    }

    /**
     * Set tipche
     *
     * @param \BackBundle\Entity\TipoCheque $tipche
     *
     * @return Cheque
     */
    public function setTipche(\BackBundle\Entity\TipoCheque $tipche = null)
    {
        $this->tipche = $tipche;

        return $this;
    }

    /**
     * Get tipche
     *
     * @return \BackBundle\Entity\TipoCheque
     */
    public function getTipche()
    {
        return $this->tipche;
    }
}

