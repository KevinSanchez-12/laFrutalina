<?php
    require_once "Modelo/venta.php";
    require_once "Modelo/envio.php";

    class VentaControl{

        //Admin
        
            public function index(){
                if (GeneralControl::V_Sesion("admin")){
                    $venta=new Venta();
                    $ventas=$venta->ver_ventas();
                    require_once "Vista/ventas.php";
                    
                }else{
                    header("location: ".url_index);
                }

            }

            public function ver_detalles(){
                if (GeneralControl::V_Sesion("admin")){ 
                    if ($_POST) {
                        $venta=new Venta();
                        $venta->setId($_POST['id']);
                        $lp=$venta->ver_lista_productos();
                        $ver_venta=$venta->ver_1_venta();
                        $envio=new Envio();
                        $envio->setVenta($_POST['id']);
                        $ver_envio=$envio->ver_envio_venta();
                        
                        require_once "Vista/detalles_venta.php";
                    } else {
                        echo "error";
                        //header("location: ".url_index."?controlador=venta&&accion=index");
                    }
                    
                }else{
                    header("location: ".url_index);    
                }
                
            }

            public function actualizar_estado_venta(){
                if (GeneralControl::V_Sesion("admin")){
                    if ($_POST) {
                        $estado=new Venta();
                        $estado->setId($_POST['id']);
                        $estado->setEstado($_POST['estado']);
                        $accion=$estado->actualizar_estado();
                        if ($accion) {
                            $_SESSION['mensaje']="Estado de venta se actualizo correctamente";
                            header("location: ".url_index."?controlador=venta&&accionar=index");
                        } else {
                            $_SESSION['mensaje']="Ocurrio un error";
                            header("location: ".url_index."?controlador=venta&&accionar=index");
                        }
                        
                    } else {
                        header("location: ".url_index);
                    }
                    
                }else{
                    header("location: ".url_index);
                }
                
            }







    }

?>