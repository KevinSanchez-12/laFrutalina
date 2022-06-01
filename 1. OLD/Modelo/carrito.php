<?php

    class Carrito{
        private $id;
        public $nombre;
        private $producto;
        private $cantidad;
        public $precio_und;
        public $costo;
        public $accionar;
        


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
         * Get the value of producto
         */
        public function getProducto()
        {
                return $this->producto;
        }

        /**
         * Set the value of producto
         *
         * @return  self
         */
        public function setProducto($producto)
        {
                $this->producto = $producto;

                return $this;
        }

        /**
         * Get the value of cantidad
         */
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of precio_und
         */
        public function getPrecioUnd()
        {
                return $this->precio_und;
        }

        /**
         * Set the value of precio_und
         *
         * @return  self
         */
        public function setPrecioUnd($precio_und)
        {
                $this->precio_und = $precio_und;

                return $this;
        }

        /**
         * Get the value of costo
         */
        public function getCosto()
        {
                return $this->costo;
        }

        /**
         * Set the value of costo
         *
         * @return  self
         */
        public function setCosto($costo)
        {
                $this->costo = $costo;

                return $this;
        }


        /**
         * Get the value of accionar
         */
        public function getAccionar()
        {
                return $this->accionar;
        }

        /**
         * Set the value of accionar
         *
         * @return  self
         */
        public function setAccionar($accionar)
        {
                $this->accionar = $accionar;

                return $this;
        }



        public function agregar_producto(){

            $precio=$this->getPrecioUnd();
            $cantidad_producto=$this->getCantidad();

            $_SESSION['carrito'][intval($this->getProducto())]=array(
                "producto"=> $this->getProducto(),
                "nombre"=> $this->getNombre(),
                "precio" => $precio ,
                "cantidad"=> $cantidad_producto ,
                "costo"=> ($precio*$cantidad_producto)
            );

        }


        public function borrar(){

            switch ($this->getAccionar()){

                case "producto":
                    unset($_SESSION['carrito'][intval($this->getProducto())]);
                    break;

                case "carrito":
                    unset($_SESSION['carrito']);
                    break;

            }
            

            

        }

        public function editar_cantidades(){

            switch ($this->getAccionar()){

                case "aumentar":
                    $_SESSION['carrito'][intval($this->getProducto())]['cantidad']++;
                    
                    $precio=$_SESSION['carrito'][intval($this->getProducto())]['precio'];
                    $cant=$_SESSION['carrito'][intval($this->getProducto())]['cantidad'];
                    $costo=$precio*$cant;
                    $_SESSION['carrito'][intval($this->getProducto())]['costo']=$costo;

                    break;

                case "reducir":
                    $_SESSION['carrito'][intval($this->getProducto())]['cantidad']--;
                    if($_SESSION['carrito'][intval($this->getProducto())]['cantidad'] == 0){
                        unset($_SESSION['carrito'][intval($this->getProducto())]);
                    }else{
                        $precio=$_SESSION['carrito'][intval($this->getProducto())]['precio'];
                        $cant=$_SESSION['carrito'][intval($this->getProducto())]['cantidad'];
                        $costo=$precio*$cant;
                        $_SESSION['carrito'][intval($this->getProducto())]['costo']=$costo;
                    }
                    break;

            }
            

        }
     

        public function calcular_monto_total(){
            $lista=$_SESSION['carrito'];
            $monto=0;
            foreach ($lista as $prod){
                $monto=$prod['costo']+$monto;
            }
            return $monto;
        }
        

    }

?>