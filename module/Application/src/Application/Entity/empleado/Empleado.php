<?php

namespace Application\Entity; 

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="empleado")
 */
class Empleado
{
    
    /** 
     * @ORM\Column (type="integer")
     * @ORM\Id  
     * @ORM\GeneratedValue */
    protected  $id_empleado;
    /** @ORM\Column (type="integer") */
    protected $dni;
    /** @ORM\Column */
    protected $nombre;
    /** @ORM\Column */
    protected $apellido;

    /**
     * Get idEmpleado
     *
     * @return integer
     */
    public function getIdEmpleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Empleado
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
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
     * @return Empleado
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
     * @return Empleado
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
