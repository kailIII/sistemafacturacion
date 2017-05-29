<?php

namespace DataBundle\Entity;

/**
 * EmpleadoLocal
 */
class EmpleadoLocal
{
    /**
     * @var integer
     */
    private $emplocId;

    /**
     * @var \DateTime
     */
    private $emplocFechaingreso;

    /**
     * @var \DateTime
     */
    private $emplocFechasalida;

    /**
     * @var string
     */
    private $emplocMotivosalida;

    /**
     * @var string
     */
    private $emplocEstado;

    /**
     * @var \DataBundle\Entity\Cargo
     */
    private $car;

    /**
     * @var \DataBundle\Entity\Empleado
     */
    private $emp;

    /**
     * @var \DataBundle\Entity\LocalSucursal
     */
    private $loc;


    /**
     * Get emplocId
     *
     * @return integer
     */
    public function getEmplocId()
    {
        return $this->emplocId;
    }

    /**
     * Set emplocFechaingreso
     *
     * @param \DateTime $emplocFechaingreso
     *
     * @return EmpleadoLocal
     */
    public function setEmplocFechaingreso($emplocFechaingreso)
    {
        $this->emplocFechaingreso = $emplocFechaingreso;

        return $this;
    }

    /**
     * Get emplocFechaingreso
     *
     * @return \DateTime
     */
    public function getEmplocFechaingreso()
    {
        return $this->emplocFechaingreso;
    }

    /**
     * Set emplocFechasalida
     *
     * @param \DateTime $emplocFechasalida
     *
     * @return EmpleadoLocal
     */
    public function setEmplocFechasalida($emplocFechasalida)
    {
        $this->emplocFechasalida = $emplocFechasalida;

        return $this;
    }

    /**
     * Get emplocFechasalida
     *
     * @return \DateTime
     */
    public function getEmplocFechasalida()
    {
        return $this->emplocFechasalida;
    }

    /**
     * Set emplocMotivosalida
     *
     * @param string $emplocMotivosalida
     *
     * @return EmpleadoLocal
     */
    public function setEmplocMotivosalida($emplocMotivosalida)
    {
        $this->emplocMotivosalida = $emplocMotivosalida;

        return $this;
    }

    /**
     * Get emplocMotivosalida
     *
     * @return string
     */
    public function getEmplocMotivosalida()
    {
        return $this->emplocMotivosalida;
    }

    /**
     * Set emplocEstado
     *
     * @param string $emplocEstado
     *
     * @return EmpleadoLocal
     */
    public function setEmplocEstado($emplocEstado)
    {
        $this->emplocEstado = $emplocEstado;

        return $this;
    }

    /**
     * Get emplocEstado
     *
     * @return string
     */
    public function getEmplocEstado()
    {
        return $this->emplocEstado;
    }

    /**
     * Set car
     *
     * @param \DataBundle\Entity\Cargo $car
     *
     * @return EmpleadoLocal
     */
    public function setCar(\DataBundle\Entity\Cargo $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \DataBundle\Entity\Cargo
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set emp
     *
     * @param \DataBundle\Entity\Empleado $emp
     *
     * @return EmpleadoLocal
     */
    public function setEmp(\DataBundle\Entity\Empleado $emp = null)
    {
        $this->emp = $emp;

        return $this;
    }

    /**
     * Get emp
     *
     * @return \DataBundle\Entity\Empleado
     */
    public function getEmp()
    {
        return $this->emp;
    }

    /**
     * Set loc
     *
     * @param \DataBundle\Entity\LocalSucursal $loc
     *
     * @return EmpleadoLocal
     */
    public function setLoc(\DataBundle\Entity\LocalSucursal $loc = null)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return \DataBundle\Entity\LocalSucursal
     */
    public function getLoc()
    {
        return $this->loc;
    }
}

