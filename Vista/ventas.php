<?php 
    if (isset($_SESSION['mensaje'])) {
        echo $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }

    if (isset($ventas)) {
        foreach ($ventas as $fila){
            print_r($fila);?>
            <form action="<?=url_index?>index.php?controlador=venta&accionar=ver_detalles" method="POST">  
                <input type="hidden" name="id" value="<?=$fila['ID']?>"> <br>
                <input type="submit" value="ver detalles">
            </form>
            <?php }
    } else {
        echo "<h1>No hay ventas en estos momentos</h1>";
    }
    

?>