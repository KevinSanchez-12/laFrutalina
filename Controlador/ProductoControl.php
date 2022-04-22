<?php
    require_once 'Modelo/producto.php';
    class ProductoControl{
        public function index(){
            $productos=new Producto();
            $lista=$productos->mostrar_todos_productos();
            require_once "Vista/inicio.php";
        }

        //Admin

        public function crear_producto(){
            $objctg=new Producto();
            $categorias=$objctg->mostrar_categorias();
            require_once "Vista/nuevo_producto.php";
        }

        public function registrar_producto(){

            if($_POST){
                $producto=new Producto;
                $producto->setCategoria($_POST['categoria']);
                $producto->setNombre($_POST['nombre']);
                $producto->setDescripcion($_POST['descripcion']);
                $producto->setStock($_POST['stock']);
                $producto->setPrecioUnitario($_POST['precioU']);
                $producto->setImagen($_POST['img']);
                $accion=$producto->guardar_datos();
                //echo $_POST['categoria'].$_POST['nombre'].$_POST['descripcion'].$_POST['stock'].$_POST['precioU'].$_POST['img'];
                if ($accion) {
                    $_SESSION['mensaje']=$accion;
                    header("location: ".url_index."?controlador=producto&&accionar=crear_producto");
                } else {
                    $_SESSION['mensaje']="Producto no registrado";
                    header("location: ".url_index."?controlador=producto&&accionar=crear_producto");
                }
                
                
            }
            
        }

        public function crear_categoria(){
            require_once "Vista/nueva_categoria.php";
        }

        public function registrar_categoria(){

            if($_POST){
                $producto=new Producto;
                $producto->setCategoria($_POST['nombrectg']);

                $accion=$producto->registrar_categoria();
                //echo $_POST['categoria'].$_POST['nombre'].$_POST['descripcion'].$_POST['stock'].$_POST['precioU'].$_POST['img'];
                if ($accion) {
                    $_SESSION['mensaje']=$accion;
                    header("location: ".url_index."?controlador=producto&&accionar=crear_categoria");
                } else {
                    $_SESSION['mensaje']="Categoria no registrada";
                    header("location: ".url_index."?controlador=producto&&accionar=crear_categoria");
                }
                
                
            }
            
        }
    }

?>