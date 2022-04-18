
    <?php
        if (isset($lista)) {
            //echo " Hay una lista";
            if(isset($mensaje)){
                echo "<h1>".$mensaje."</h1> ";
            }
            foreach($lista as $producto) { ?>

                <div class="col-3">
                    <div class="card">
                        <img height="317px" title="<?php echo $producto['Nombre']?>" class="card-img-top" src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>">
                        <div class="card-body">
                            <span><?php echo $producto['Nombre']?></span>
                            <h5 class="card-title">S/ <?php echo $producto['Precio_und']?></h5>
                            <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">

                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt(intval($producto['ID']),COD,KEY);?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio_und'],COD,KEY);?>">
                                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                                <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } 
            
        } else {
            echo "<h1> No hay una lista</h1>";
        }
        
    ?>