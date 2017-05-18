<?php

namespace BackBundle\Entity;

/**
 * Calendario
 */
class Calendario
{
    /**
     * @var integer
     */
    private $calId;

    /**
     * @var \DateTime
     */
    private $calFecha;


    /**
     * Get calId
     *
     * @return integer
     */
    public function getCalId()
    {
        return $this->calId;
    }

    /**
     * Set calFecha
     *
     * @param \DateTime $calFecha
     *
     * @return Calendario
     */
    public function setCalFecha($calFecha)
    {
        $this->calFecha = $calFecha;

        return $this;
    }

    /**
     * Get calFecha
     *
     * @return \DateTime
     */
    public function getCalFecha()
    {
        return $this->calFecha;
    }
}

