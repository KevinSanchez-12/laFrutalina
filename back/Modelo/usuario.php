<?php

    class Usuario{

    private $enlace_conexion;
    private $id;
    private $nombre;
    private $apellido;
    private $DNI;
    private $correo;
    private $celular;
    private $password;
    private $rol;
            
    public function __construct()
    {
        $this->enlace_conexion=BD::conectar();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->enlace_conexion->real_escape_string($nombre);

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $this->enlace_conexion->real_escape_string($apellido);

        return $this;
    }

    /**
     * Get the value of DNI
     */
    public function getDNI()
    {
        return $this->DNI;
    }

    /**
     * Set the value of DNI
     *
     * @return  self
     */
    public function setDNI($DNI)
    {
        $this->DNI = $this->enlace_conexion->real_escape_string($DNI);

        return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */
    public function setCorreo($correo)
    {
        $this->correo = $this->enlace_conexion->real_escape_string($correo);

        return $this;
    }

    /**
     * Get the value of celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */
    public function setCelular($celular)
    {
        $this->celular = $this->enlace_conexion->real_escape_string($celular);

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $this->enlace_conexion->real_escape_string($password);

        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    public function registrar_usuario(){
        
        $pw=password_hash($this->getPassword(), PASSWORD_DEFAULT);
        $query="INSERT INTO usuario VALUES"
            ." (NULL,'{$this->getNombre()}','{$this->getApellido()}',"
            . "'{$this->getDNI()}','{$this->getCelular()}',"
            . "'{$this->getCorreo()}','$pw','{$this->getRol()}');";
                        
        $accionar=$this->enlace_conexion->query($query);
        if ($accionar) {
            return true;
        } else {
            return false;
        }
    }

    public function validar(){
        $Email=$this->getCorreo();
        $Key=$this->getPassword();
        $query= "SELECT * FROM usuario WHERE Correo='$Email'";
        $query=$this->enlace_conexion->query($query);

        if ($query && $query->num_rows >=1){ // cambiar a que sea solo 1
            $datos=mysqli_fetch_assoc($query);
            if (password_verify($Key,$datos['Pw'])) {
                return $datos;
            } else {
                return false;
            }

        } else{
            return false;
        }


    }

}
