<?php

namespace BackBundle\Entity;

/**
 * ContactoProveedora
 */
class ContactoProveedora
{
    /**
     * @var integer
     */
    private $conproId;

    /**
     * @var string
     */
    private $conproNombre;

    /**
     * @var string
     */
    private $conproApellido;

    /**
     * @var string
     */
    private $conproTelefono1;

    /**
     * @var string
     */
    private $conproTelefono2;

    /**
     * @var string
     */
    private $conproMail;

    /**
     * @var string
     */
    private $conproDescripcionvisita;

    /**
     * @var \BackBundle\Entity\EmpresaProveedora
     */
    private $emppro;


    /**
     * Get conproId
     *
     * @return integer
     */
    public function getConproId()
    {
        return $this->conproId;
    }

    /**
     * Set conproNombre
     *
     * @param string $conproNombre
     *
     * @return ContactoProveedora
     */
    public function setConproNombre($conproNombre)
    {
        $this->conproNombre = $conproNombre;

        return $this;
    }

    /**
     * Get conproNombre
     *
     * @return string
     */
    public function getConproNombre()
    {
        return $this->conproNombre;
    }

    /**
     * Set conproApellido
     *
     * @param string $conproApellido
     *
     * @return ContactoProveedora
     */
    public function setConproApellido($conproApellido)
    {
        $this->conproApellido = $conproApellido;

        return $this;
    }

    /**
     * Get conproApellido
     *
     * @return string
     */
    public function getConproApellido()
    {
        return $this->conproApellido;
    }

    /**
     * Set conproTelefono1
     *
     * @param string $conproTelefono1
     *
     * @return ContactoProveedora
     */
    public function setConproTelefono1($conproTelefono1)
    {
        $this->conproTelefono1 = $conproTelefono1;

        return $this;
    }

    /**
     * Get conproTelefono1
     *
     * @return string
     */
    public function getConproTelefono1()
    {
        return $this->conproTelefono1;
    }

    /**
     * Set conproTelefono2
     *
     * @param string $conproTelefono2
     *
     * @return ContactoProveedora
     */
    public function setConproTelefono2($conproTelefono2)
    {
        $this->conproTelefono2 = $conproTelefono2;

        return $this;
    }

    /**
     * Get conproTelefono2
     *
     * @return string
     */
    public function getConproTelefono2()
    {
        return $this->conproTelefono2;
    }

    /**
     * Set conproMail
     *
     * @param string $conproMail
     *
     * @return ContactoProveedora
     */
    public function setConproMail($conproMail)
    {
        $this->conproMail = $conproMail;

        return $this;
    }

    /**
     * Get conproMail
     *
     * @return string
     */
    public function getConproMail()
    {
        return $this->conproMail;
    }

    /**
     * Set conproDescripcionvisita
     *
     * @param string $conproDescripcionvisita
     *
     * @return ContactoProveedora
     */
    public function setConproDescripcionvisita($conproDescripcionvisita)
    {
        $this->conproDescripcionvisita = $conproDescripcionvisita;

        return $this;
    }

    /**
     * Get conproDescripcionvisita
     *
     * @return string
     */
    public function getConproDescripcionvisita()
    {
        return $this->conproDescripcionvisita;
    }

    /**
     * Set emppro
     *
     * @param \BackBundle\Entity\EmpresaProveedora $emppro
     *
     * @return ContactoProveedora
     */
    public function setEmppro(\BackBundle\Entity\EmpresaProveedora $emppro = null)
    {
        $this->emppro = $emppro;

        return $this;
    }

    /**
     * Get emppro
     *
     * @return \BackBundle\Entity\EmpresaProveedora
     */
    public function getEmppro()
    {
        return $this->emppro;
    }
}

