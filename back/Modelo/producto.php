<?php

    class Producto{
        public $enlace_conexion;
        public $id;
        public $nombre;
        public $categoria;
        public $short_descripcion;
        public $descripcion;
        public $precio_unitario;
        public $stock;
        public $imagen;

        
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
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of categoria
         */
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }

        /**
         * Get the value of short_descripcion
         */
        public function getShortDescripcion()
        {
                return $this->short_descripcion;
        }

        /**
         * Set the value of short_descripcion
         */
        public function setShortDescripcion($short_descripcion): self
        {
                $this->short_descripcion = $short_descripcion;

                return $this;
        }

        /**
         * Get the value of descripcion
         */
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of precio_unitario
         */
        public function getPrecioUnitario()
        {
                return $this->precio_unitario;
        }

        /**
         * Set the value of precio_unitario
         *
         * @return  self
         */
        public function setPrecioUnitario($precio_unitario)
        {
                $this->precio_unitario = $precio_unitario;

                return $this;
        }

        /**
         * Get the value of stock
         */
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        /**
         * Get the value of imagen
         */
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        public function guardar_datos(){

            $query="INSERT INTO productos VALUE "
                 . "(NULL,'{$this->getCategoria()}','{$this->getNombre()}','{$this->getShortDescripcion()}','{$this->getDescripcion()}','{$this->getStock()}'"
                 . ",'{$this->getPrecioUnitario()}','{$this->getImagen()}');";
            $accion=$this->enlace_conexion->query($query);
            if ($accion) {
                return true;
            } else {
                return $this->enlace_conexion->error;
            }  

        }

        public function editar_datos(){

            $query="UPDATE productos SET ID_Categoria='{$this->getCategoria()}',Nombre='{$this->getNombre()}',"
                    . "Descripcion='{$this->getDescripcion()}',Cantidad='{$this->getStock()}',"
                    . "Precio_und='{$this->getPrecioUnitario()}',Imagen='{$this->getImagen()}' WHERE ID='{$this->getId()}';";       
            $accion=$this->enlace_conexion->query($query);
            if ($accion) {
                return true;
            } else {
                return false;
            }  
        }

        public function eliminar_datos(){

                $query="DELETE FROM productos WHERE ID='{$this->getId()}';";       
                $accion=$this->enlace_conexion->query($query);
                if ($accion) {
                    return true;
                } else {
                    return false;
                }  
        }

        public function mostrar_todos_productos($Num=null){
                if(is_null($Num)){
                      $query="SELECT * FROM productos;";    
                }else{
                      $query="SELECT * FROM productos LIMIT ".$Num;
                }       
                $accion=$this->enlace_conexion->query($query);
                if ($accion) { 
                    return $accion;
                } else {
                    return false;
                }      
            
        }

        public function registrar_categoria(){
                $query="INSERT INTO categoria VALUE "
                . "(NULL,'{$this->getCategoria()}');";
                $accion=$this->enlace_conexion->query($query);
                if ($accion) {
                return true;
                } else {
                return false;
                }      
        }

        public function mostrar_categorias(){
                $query="SELECT * FROM categoria";
                $accion=$this->enlace_conexion->query($query);
                if ($accion) {
                        return $accion;
                } else {
                        return false;
                }     
        }

        public function muestra_productos(){
                $query="SELECT p.*,COUNT(vp.ID) FROM productos as p INNER JOIN venta_productos as vp"
                        ." WHERE p.ID=vp.ID_Producto GROUP BY ID_Producto LIMIT 10";
                $accion=$this->enlace_conexion->query($query);
                if ($accion) {
                        if(empty($accion) && count($accion)>9){
                              return ["Destacados",$accion];  
                        }else{
                                $var=$this->mostrar_todos_productos(10);
                                return ["Nuestros productos",$var];
                        }
                        
                } else {
                        return false;
                }  

        }
        
        public function ver_producto(){
                $query="SELECT * FROM productos WHERE ID='{$this->getId()}';";
                $accion=$this->enlace_conexion->query($query);
                if ($accion) {
                        return $accion->fetch_assoc();
                } else {
                        return false;
                } 
        }


    }


?>