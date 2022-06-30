

<?php

    // Comprueba si existe una sesion mensaje, que contenga algun mensaje
    if(isset($_SESSION['mensaje'])){
        echo $_SESSION['mensaje']."<br>";
        $_SESSION['mensaje']="";
    }

    
    //Comprueba que exista una sesion Carrito y que contenga valores, de lo contrario muestra carrito vacio
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
    // Boton para pagar                         
    echo "<a href= ".url_index."?controlador=Compra&accionar=registrar_compra> PAGAR </a><br>";
?>
    <!-- SBoton para borrar todo los productos elegidos-->
    <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">
        <button class="btn btn-primary" name="btnAccion" value="Borrar_todo" type="submit">Borrar carrito</button>
    </form>
<?php
    }else{
        echo "<div class='app-content'>
        <div class='u-s-p-y-60'>
            <div class='section__intro u-s-m-b-40'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='section__text-wrap'>
                                <h2 class='section__heading u-c-secondary'>¡Su carrito esta vacio!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class='u-s-p-y-60'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12 col-md-12 u-s-m-b-30'>
                        <div class='empty'>
                            <div class='empty__wrap'>
                                <span class='empty__text-1'>Vea los productos que tenemos para Ud y elija lo que más le guste.</span>
    
                                <a class='empty__redirect-link btn--e-brand' href='index.php'>Ver productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
    }
?>