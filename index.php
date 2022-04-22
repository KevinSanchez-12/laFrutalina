<?php
    session_start();
    require_once "Configuracion/config.php";
    require_once "Configuracion/BD.php";
    require_once "loadControles.php";
    require_once "Vista/nav.php";

    if(isset ($_GET['controlador']) && isset ($_GET['accionar'])){
        
        $controlador=$_GET['controlador']."Control";
        if ( isset($controlador) && class_exists($controlador)) {
            
            $control= new $controlador();
            if (method_exists($controlador,$_GET['accionar'])) {
                $accion=$_GET['accionar'];
                $control->$accion();
            } else {
                $error=new ErrorControl();
                $error->index();
            }
            
        }else{

            $error=new ErrorControl();
            $error->index();
            
        }
        
        
    }elseif (!isset ($_GET['controlador']) && !isset($_GET['accionar'])){

        $controlador=inicio."Control";
        $control= new $controlador();
        $control->index();

    }else{

        $error=new ErrorControl();
        $error->index();

    }
    
    include_once "Vista/footer.php";
?>