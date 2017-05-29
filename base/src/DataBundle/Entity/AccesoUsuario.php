<?php

namespace DataBundle\Entity;

/**
 * AccesoUsuario
 */
class AccesoUsuario
{
    /**
     * @var integer
     */
    private $accId;

    /**
     * @var string
     */
    private $accNombreusuario;

    /**
     * @var string
     */
    private $accClaveusuario;

    /**
     * @var \DataBundle\Entity\Empleado
     */
    private $emp;


    /**
     * Get accId
     *
     * @return integer
     */
    public function getAccId()
    {
        return $this->accId;
    }

    /**
     * Set accNombreusuario
     *
     * @param string $accNombreusuario
     *
     * @return AccesoUsuario
     */
    public function setAccNombreusuario($accNombreusuario)
    {
        $this->accNombreusuario = $accNombreusuario;

        return $this;
    }

    /**
     * Get accNombreusuario
     *
     * @return string
     */
    public function getAccNombreusuario()
    {
        return $this->accNombreusuario;
    }

    /**
     * Set accClaveusuario
     *
     * @param string $accClaveusuario
     *
     * @return AccesoUsuario
     */
    public function setAccClaveusuario($accClaveusuario)
    {
        $this->accClaveusuario = $accClaveusuario;

        return $this;
    }

    /**
     * Get accClaveusuario
     *
     * @return string
     */
    public function getAccClaveusuario()
    {
        return $this->accClaveusuario;
    }

    /**
     * Set emp
     *
     * @param \DataBundle\Entity\Empleado $emp
     *
     * @return AccesoUsuario
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
}

