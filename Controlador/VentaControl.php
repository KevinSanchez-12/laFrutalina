<?php
    include_once "Modelo/venta.php";
    include_once "Modelo/carrito.php";

    class VentaControl{

        //Admin
        
            public function index(){
                if (!GeneralControl::V_Sesion("admin")){
                    header("location: ".url_index);
                }

            }

            public function gestionar_ventas(){
                if (!GeneralControl::V_Sesion("admin")){
                    header("location: ".url_index);
                }
                
            }

            public function actualizar_estado_venta(){
                if (!GeneralControl::V_Sesion("admin")){
                    header("location: ".url_index);
                }
                
            }

        //Usuario

            public function ver_detalles(){
                if (!GeneralControl::V_Sesion("usuario")){
                    header("location: ".url_index);
                }      
            }

            public function confirmar_compra(){
                if (!GeneralControl::V_Sesion("usuario")){
                    header("location: ".url_index."index.php?controlador=usuario&accionar=index");
                } 
                require_once "Vista/compra.php";    
            }

            public function registrar_compra(){
                if (!GeneralControl::V_Sesion("usuario")){
                    $_SESSION['mensaje']="Inicie Sesion primero";
                    header("location: ".url_index."index.php?controlador=usuario&accionar=index");
                }else{

                $carrito=new Carrito($_SESSION['carrito']);
                $compra=new Venta(); 
                $id_usuario=$_SESSION['usuario']["ID"]; 
                $monto=$carrito->calcular_monto_total();
                $compra->setIdUsuario($id_usuario);
                $compra->setMonto($monto);
                $compra->setListaProductos($_SESSION['carrito']);
                $accion=$compra->registrar();

                if ($accion) {
                    $_SESSION['mensaje']="Compra realizada";
                    header("location: ".url_index."index.php?controlador=venta&accionar=confirmar_compra");
                } else {
                    $_SESSION['mensaje']="Ocurrio un error en la compra";
                    header("location: ".url_index."index.php?controlador=venta&accionar=confirmar_compra");}
                }
                
            }

            public function eliminar_compra(){
                if (!GeneralControl::V_Sesion("usuario")){
                    header("location: ".url_index);
                }      
            }





    }

?>