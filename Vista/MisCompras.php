<?php

    if (isset($mis_compras) && $mis_compras) {

        echo "MIS COMPRAS <br>";
        foreach ($mis_compras as $compra){
            print_r($compra);
            echo "<br>";
            echo "<br>";}
    } else {
        echo "<h1>No hay registros de compras</h1>";
    }
    

?>