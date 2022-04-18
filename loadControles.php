<?php
        function controles($classname){
            include 'Controlador/'.$classname.'.php';
        }
        spl_autoload_register('controles');    

?>