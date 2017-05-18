<?php

namespace BackBundle\Entity;

/**
 * Sesion
 */
class Sesion
{
    /**
     * @var integer
     */
    private $sesId;

    /**
     * @var \DateTime
     */
    private $sesFechaingreso;

    /**
     * @var integer
     */
    private $sesNumintento;

    /**
     * @var \DateTime
     */
    private $sesHoraingreso;

    /**
     * @var string
     */
    private $sesDescripcioningreso;

    /**
     * @var \BackBundle\Entity\EmpleadoLocal
     */
    private $emploc;


    /**
     * Get sesId
     *
     * @return integer
     */
    public function getSesId()
    {
        return $this->sesId;
    }

    /**
     * Set sesFechaingreso
     *
     * @param \DateTime $sesFechaingreso
     *
     * @return Sesion
     */
    public function setSesFechaingreso($sesFechaingreso)
    {
        $this->sesFechaingreso = $sesFechaingreso;

        return $this;
    }

    /**
     * Get sesFechaingreso
     *
     * @return \DateTime
     */
    public function getSesFechaingreso()
    {
        return $this->sesFechaingreso;
    }

    /**
     * Set sesNumintento
     *
     * @param integer $sesNumintento
     *
     * @return Sesion
     */
    public function setSesNumintento($sesNumintento)
    {
        $this->sesNumintento = $sesNumintento;

        return $this;
    }

    /**
     * Get sesNumintento
     *
     * @return integer
     */
    public function getSesNumintento()
    {
        return $this->sesNumintento;
    }

    /**
     * Set sesHoraingreso
     *
     * @param \DateTime $sesHoraingreso
     *
     * @return Sesion
     */
    public function setSesHoraingreso($sesHoraingreso)
    {
        $this->sesHoraingreso = $sesHoraingreso;

        return $this;
    }

    /**
     * Get sesHoraingreso
     *
     * @return \DateTime
     */
    public function getSesHoraingreso()
    {
        return $this->sesHoraingreso;
    }

    /**
     * Set sesDescripcioningreso
     *
     * @param string $sesDescripcioningreso
     *
     * @return Sesion
     */
    public function setSesDescripcioningreso($sesDescripcioningreso)
    {
        $this->sesDescripcioningreso = $sesDescripcioningreso;

        return $this;
    }

    /**
     * Get sesDescripcioningreso
     *
     * @return string
     */
    public function getSesDescripcioningreso()
    {
        return $this->sesDescripcioningreso;
    }

    /**
     * Set emploc
     *
     * @param \BackBundle\Entity\EmpleadoLocal $emploc
     *
     * @return Sesion
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
}

