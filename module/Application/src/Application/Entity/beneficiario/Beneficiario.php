<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM; 
use DateTime;

/** @ORM\Entity */
class Beneficiario
{
	/**
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    * @ORM\Id
    */
    protected $idBeneficiario; //TENGO DOS CLAVES PRIMARIAS, idPaciente y dni   

    /** @ORM\Column(type="bigint", nullable=false, unique=true) */
	protected $dni;

	/** @ORM\Column(type="string", nullable=true)*/
	protected $nombre;

	/** @ORM\Column(type="string", nullable=true)*/
	protected $apellido; 

    /**
     * Get idBeneficiario
     *
     * @return integer
     */
    public function getIdBeneficiario()
    {
        return $this->idBeneficiario;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     *
     * @return Beneficiario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Beneficiario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Beneficiario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
}
