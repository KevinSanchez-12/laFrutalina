<?php
// Clase principal que carga la aplicacion
    class CoreApp{
        function __construct (){
            $this->iniciar();
        }
        private function iniciar(){
            return require_once "Configuracion/base.php";
        }
    }

?>