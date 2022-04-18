<?php
    require_once 'Modelo/producto.php';
    class ProductoControl{
        public function index(){
            $productos=new Producto();
            $lista=$productos->mostrar_todos_productos();
            require_once "Vista/inicio.php";
        }
        public function ver_detalles(){
            
        }
    }

?>