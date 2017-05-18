<?php

namespace BackBundle\Entity;

/**
 * EmpresaProveedora
 */
class EmpresaProveedora
{
    /**
     * @var integer
     */
    private $empproId;

    /**
     * @var string
     */
    private $empproNombre;

    /**
     * @var string
     */
    private $empproDireccion;

    /**
     * @var string
     */
    private $empproTelefono1;

    /**
     * @var string
     */
    private $empproTelefono2;

    /**
     * @var string
     */
    private $empproRuc;

    /**
     * @var string
     */
    private $empproCiudad;

    /**
     * @var string
     */
    private $empproRazonsocial;

    /**
     * @var string
     */
    private $empproFax;

    /**
     * @var string
     */
    private $empproMail;


    /**
     * Get empproId
     *
     * @return integer
     */
    public function getEmpproId()
    {
        return $this->empproId;
    }

    /**
     * Set empproNombre
     *
     * @param string $empproNombre
     *
     * @return EmpresaProveedora
     */
    public function setEmpproNombre($empproNombre)
    {
        $this->empproNombre = $empproNombre;

        return $this;
    }

    /**
     * Get empproNombre
     *
     * @return string
     */
    public function getEmpproNombre()
    {
        return $this->empproNombre;
    }

    /**
     * Set empproDireccion
     *
     * @param string $empproDireccion
     *
     * @return EmpresaProveedora
     */
    public function setEmpproDireccion($empproDireccion)
    {
        $this->empproDireccion = $empproDireccion;

        return $this;
    }

    /**
     * Get empproDireccion
     *
     * @return string
     */
    public function getEmpproDireccion()
    {
        return $this->empproDireccion;
    }

    /**
     * Set empproTelefono1
     *
     * @param string $empproTelefono1
     *
     * @return EmpresaProveedora
     */
    public function setEmpproTelefono1($empproTelefono1)
    {
        $this->empproTelefono1 = $empproTelefono1;

        return $this;
    }

    /**
     * Get empproTelefono1
     *
     * @return string
     */
    public function getEmpproTelefono1()
    {
        return $this->empproTelefono1;
    }

    /**
     * Set empproTelefono2
     *
     * @param string $empproTelefono2
     *
     * @return EmpresaProveedora
     */
    public function setEmpproTelefono2($empproTelefono2)
    {
        $this->empproTelefono2 = $empproTelefono2;

        return $this;
    }

    /**
     * Get empproTelefono2
     *
     * @return string
     */
    public function getEmpproTelefono2()
    {
        return $this->empproTelefono2;
    }

    /**
     * Set empproRuc
     *
     * @param string $empproRuc
     *
     * @return EmpresaProveedora
     */
    public function setEmpproRuc($empproRuc)
    {
        $this->empproRuc = $empproRuc;

        return $this;
    }

    /**
     * Get empproRuc
     *
     * @return string
     */
    public function getEmpproRuc()
    {
        return $this->empproRuc;
    }

    /**
     * Set empproCiudad
     *
     * @param string $empproCiudad
     *
     * @return EmpresaProveedora
     */
    public function setEmpproCiudad($empproCiudad)
    {
        $this->empproCiudad = $empproCiudad;

        return $this;
    }

    /**
     * Get empproCiudad
     *
     * @return string
     */
    public function getEmpproCiudad()
    {
        return $this->empproCiudad;
    }

    /**
     * Set empproRazonsocial
     *
     * @param string $empproRazonsocial
     *
     * @return EmpresaProveedora
     */
    public function setEmpproRazonsocial($empproRazonsocial)
    {
        $this->empproRazonsocial = $empproRazonsocial;

        return $this;
    }

    /**
     * Get empproRazonsocial
     *
     * @return string
     */
    public function getEmpproRazonsocial()
    {
        return $this->empproRazonsocial;
    }

    /**
     * Set empproFax
     *
     * @param string $empproFax
     *
     * @return EmpresaProveedora
     */
    public function setEmpproFax($empproFax)
    {
        $this->empproFax = $empproFax;

        return $this;
    }

    /**
     * Get empproFax
     *
     * @return string
     */
    public function getEmpproFax()
    {
        return $this->empproFax;
    }

    /**
     * Set empproMail
     *
     * @param string $empproMail
     *
     * @return EmpresaProveedora
     */
    public function setEmpproMail($empproMail)
    {
        $this->empproMail = $empproMail;

        return $this;
    }

    /**
     * Get empproMail
     *
     * @return string
     */
    public function getEmpproMail()
    {
        return $this->empproMail;
    }
}

