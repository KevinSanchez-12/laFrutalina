<?php

    if(isset($_SESSION['mensaje'])){
        echo $_SESSION['mensaje']."<br>";
        $_SESSION['mensaje']="";
    }

    

    if(!empty($_SESSION['carrito']) && isset($_SESSION['carrito'])){
        echo "<h1> Carrito de Compras</h1><br>";
        foreach ($_SESSION['carrito'] as $producto){
            echo $producto["producto"]."/// <br>";
            echo $producto["nombre"]."/// <br>";
            echo $producto["precio"]."/// <br>";
            echo $producto["cantidad"]."/// <br>";
            echo $producto["costo"]."/// <br>";?>  
 
            <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt(intval($producto["producto"]),COD,KEY);?>">
                <button class="btn btn-primary" name="btnAccion" value="Eliminar" type="submit">Borrar producto</button>
            </form>

<?php       
            echo " --------///////////------------- <br>"; }
    echo " --------/RESUMEN/-------------<br>";                          
    echo "<a href= ".url_index."?controlador=Venta&accionar=registrar_compra> PAGAR </a><br>";
?>

    <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">
        <button class="btn btn-primary" name="btnAccion" value="Borrar_todo" type="submit">Borrar carrito</button>
    </form>
<?php
    }else{
        echo "<h1> Carrito Vacio</h1>";
        echo "<h2> Compre algunos productos</h2>";
    }
?>