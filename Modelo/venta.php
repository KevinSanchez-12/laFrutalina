<?php

    class Venta{
        private $enlace_conexion;
        protected $id;
        public $id_usuario;
        private $Monto;
        private $lista_productos;
        private $fecha;
        private $hora;
        private $estado;
        

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
         * Get the value of id_usuario
         */
        public function getIdUsuario()
        {
                return $this->id_usuario;
        }

        /**
         * Set the value of id_usuario
         *
         * @return  self
         */
        public function setIdUsuario($id_usuario)
        {
                $this->id_usuario = $id_usuario;

                return $this;
        }

        /**
         * Get the value of Monto
         */
        public function getMonto()
        {
                return $this->Monto;
        }

        /**
         * Set the value of Monto
         *
         * @return  self
         */
        public function setMonto($Monto)
        {
                $this->Monto = $Monto;

                return $this;
        }

        /**
         * Get the value of lista_productos
         */
        public function getListaProductos()
        {
                return $this->lista_productos;
        }

        /**
         * Set the value of lista_productos
         *
         * @return  self
         */
        public function setListaProductos($lista_productos)
        {
                $this->lista_productos = $lista_productos;

                return $this;
        }

        /**
         * Get the value of fecha
         */
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of hora
         */
        public function getHora()
        {
                return $this->hora;
        }

        /**
         * Set the value of hora
         *
         * @return  self
         */
        public function setHora($hora)
        {
                $this->hora = $hora;

                return $this;
        }

        /**
         * Get the value of estado
         */
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        public function registrar(){

            $query= "INSERT INTO ventas VALUES (NULL,'{$this->getIdUsuario()}','{$this->getMonto()}',CURDATE(),'Pendiente');";
            $accion= $this->enlace_conexion->query($query);
            
            if ($accion) {
                $id_pedido=$this->enlace_conexion->insert_id;
                if($id_pedido!=0){
                        $registro_lista=$this->getListaProductos();
                        foreach ($registro_lista as $producto){
                        $query_lp="INSERT INTO venta_productos VALUES (NULL,{$id_pedido},'{$producto['producto']}','{$producto['cantidad']}');";
                        $accion_lp=$this->enlace_conexion->query($query_lp);
                        if ($accion_lp == false) {
                                
                                $borrar_lp="DELETE FROM venta_productos WHERE ID_Venta={$id_pedido};";
                                $this->enlace_conexion->query($borrar_lp);

                                $borrar_pedido="DELETE FROM ventas WHERE ID={$id_pedido};";
                                $this->enlace_conexion->query($borrar_pedido);

                                return false;}                    
                        }
                        return true;
                }else{
                                return false;}
                        
            } else {
                return false;
            }
            
        }
    }

?>