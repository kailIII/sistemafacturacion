<?php

namespace DataBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $empId;

    /**
     * @var string
     */
    private $empNombre;

    /**
     * @var string
     */
    private $empApellido;

    /**
     * @var string
     */
    private $empDireccion;

    /**
     * @var string
     */
    private $empTelefono1;

    /**
     * @var string
     */
    private $empTelefono2;

    /**
     * @var string
     */
    private $empTiposangre;

    /**
     * @var string
     */
    private $empCorreo;

    /**
     * @var string
     */
    private $empAvisaremergencia;

    /**
     * @var string
     */
    private $empTelefonoemergencia;

    /**
     * @var string
     */
    private $empParentezcoemergencia;

    /**
     * @var string
     */
    private $empDescripcionalergias;

    /**
     * @var string
     */
    private $empDescripciongeneral;

    /**
     * @var string
     */
    private $empEstado;

    /**
     * @var \DateTime
     */
    private $empFechanacimiento;

    /**
     * @var string
     */
    private $empIdentificacion;

    /**
     * Get empId
     *
     * @return integer
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set empNombre
     *
     * @param string $empNombre
     *
     * @return Empleado
     */
    public function setEmpNombre($empNombre)
    {
        $this->empNombre = $empNombre;

        return $this;
    }

    /**
     * Get empNombre
     *
     * @return string
     */
    public function getEmpNombre()
    {
        return $this->empNombre;
    }

    /**
     * Set empApellido
     *
     * @param string $empApellido
     *
     * @return Empleado
     */
    public function setEmpApellido($empApellido)
    {
        $this->empApellido = $empApellido;

        return $this;
    }

    /**
     * Get empApellido
     *
     * @return string
     */
    public function getEmpApellido()
    {
        return $this->empApellido;
    }

    /**
     * Set empDireccion
     *
     * @param string $empDireccion
     *
     * @return Empleado
     */
    public function setEmpDireccion($empDireccion)
    {
        $this->empDireccion = $empDireccion;

        return $this;
    }

    /**
     * Get empDireccion
     *
     * @return string
     */
    public function getEmpDireccion()
    {
        return $this->empDireccion;
    }

    /**
     * Set empTelefono1
     *
     * @param string $empTelefono1
     *
     * @return Empleado
     */
    public function setEmpTelefono1($empTelefono1)
    {
        $this->empTelefono1 = $empTelefono1;

        return $this;
    }

    /**
     * Get empTelefono1
     *
     * @return string
     */
    public function getEmpTelefono1()
    {
        return $this->empTelefono1;
    }

    /**
     * Set empTelefono2
     *
     * @param string $empTelefono2
     *
     * @return Empleado
     */
    public function setEmpTelefono2($empTelefono2)
    {
        $this->empTelefono2 = $empTelefono2;

        return $this;
    }

    /**
     * Get empTelefono2
     *
     * @return string
     */
    public function getEmpTelefono2()
    {
        return $this->empTelefono2;
    }

    /**
     * Set empTiposangre
     *
     * @param string $empTiposangre
     *
     * @return Empleado
     */
    public function setEmpTiposangre($empTiposangre)
    {
        $this->empTiposangre = $empTiposangre;

        return $this;
    }

    /**
     * Get empTiposangre
     *
     * @return string
     */
    public function getEmpTiposangre()
    {
        return $this->empTiposangre;
    }

    /**
     * Set empCorreo
     *
     * @param string $empCorreo
     *
     * @return Empleado
     */
    public function setEmpCorreo($empCorreo)
    {
        $this->empCorreo = $empCorreo;

        return $this;
    }

    /**
     * Get empCorreo
     *
     * @return string
     */
    public function getEmpCorreo()
    {
        return $this->empCorreo;
    }

    /**
     * Set empAvisaremergencia
     *
     * @param string $empAvisaremergencia
     *
     * @return Empleado
     */
    public function setEmpAvisaremergencia($empAvisaremergencia)
    {
        $this->empAvisaremergencia = $empAvisaremergencia;

        return $this;
    }

    /**
     * Get empAvisaremergencia
     *
     * @return string
     */
    public function getEmpAvisaremergencia()
    {
        return $this->empAvisaremergencia;
    }

    /**
     * Set empTelefonoemergencia
     *
     * @param string $empTelefonoemergencia
     *
     * @return Empleado
     */
    public function setEmpTelefonoemergencia($empTelefonoemergencia)
    {
        $this->empTelefonoemergencia = $empTelefonoemergencia;

        return $this;
    }

    /**
     * Get empTelefonoemergencia
     *
     * @return string
     */
    public function getEmpTelefonoemergencia()
    {
        return $this->empTelefonoemergencia;
    }

    /**
     * Set empParentezcoemergencia
     *
     * @param string $empParentezcoemergencia
     *
     * @return Empleado
     */
    public function setEmpParentezcoemergencia($empParentezcoemergencia)
    {
        $this->empParentezcoemergencia = $empParentezcoemergencia;

        return $this;
    }

    /**
     * Get empParentezcoemergencia
     *
     * @return string
     */
    public function getEmpParentezcoemergencia()
    {
        return $this->empParentezcoemergencia;
    }

    /**
     * Set empDescripcionalergias
     *
     * @param string $empDescripcionalergias
     *
     * @return Empleado
     */
    public function setEmpDescripcionalergias($empDescripcionalergias)
    {
        $this->empDescripcionalergias = $empDescripcionalergias;

        return $this;
    }

    /**
     * Get empDescripcionalergias
     *
     * @return string
     */
    public function getEmpDescripcionalergias()
    {
        return $this->empDescripcionalergias;
    }

    /**
     * Set empDescripciongeneral
     *
     * @param string $empDescripciongeneral
     *
     * @return Empleado
     */
    public function setEmpDescripciongeneral($empDescripciongeneral)
    {
        $this->empDescripciongeneral = $empDescripciongeneral;

        return $this;
    }

    /**
     * Get empDescripciongeneral
     *
     * @return string
     */
    public function getEmpDescripciongeneral()
    {
        return $this->empDescripciongeneral;
    }

    /**
     * Set empEstado
     *
     * @param string $empEstado
     *
     * @return Empleado
     */
    public function setEmpEstado($empEstado)
    {
        $this->empEstado = $empEstado;

        return $this;
    }

    /**
     * Get empEstado
     *
     * @return string
     */
    public function getEmpEstado()
    {
        return $this->empEstado;
    }

    /**
     * Set empFechanacimiento
     *
     * @param \DateTime $empFechanacimiento
     *
     * @return Empleado
     */
    public function setEmpFechanacimiento($empFechanacimiento)
    {
        $this->empFechanacimiento = $empFechanacimiento;

        return $this;
    }

    /**
     * Get empFechanacimiento
     *
     * @return \DateTime
     */
    public function getEmpFechanacimiento()
    {
        return $this->empFechanacimiento;
    }

    /**
     * Set empIdentificacion
     *
     * @param string $empIdentificacion
     *
     * @return Empleado
     */
    public function setEmpIdentificacion($empIdentificacion)
    {
        $this->empIdentificacion = $empIdentificacion;

        return $this;
    }

    /**
     * Get empIdentificacion
     *
     * @return string
     */
    public function getEmpIdentificacion()
    {
        return $this->empIdentificacion;
    }

}

