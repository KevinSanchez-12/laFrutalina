<div class="app-content">
    <div class="bg-anti-flash-white">
        <div class="white-container">
            <div class="u-s-p-b-60">
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h2 class="section__heading u-c-secondary u-s-m-b-12">Lo más vendido</h2>

                                    <span class="section__span u-c-silver u-s-m-b-16">Llena tu bolsa con nuestros mejores productos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <?php
                                if (isset($lista)) {
                                    //echo " Hay una lista";
                                    if(isset($mensaje)){
                                        echo "<h3 class='text-error'>".$mensaje."</h3> ";
                                    }
                                    foreach($lista as $producto) { ?>
                                        <!-- card -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-o2 u-h-100">
                                                <div class="product-o2__wrap">
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">
                                                        <img class="aspect__img product-o2__img"  src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>">
                                                    </a>
                                                </div>

                                                <div class="product-o2__content">
                                                    <span class="product-o2__name">
                                                        <a href="#"><?php echo $producto['Nombre']?></a>
                                                    </span>
                                                    <span class="product-o2__category">
                                                        <a href="#"><?php echo $producto['Descripcion'] ?></a>
                                                    </span>
                                                    <span class="product-o2__price">
                                                        S/ <?php echo $producto['Precio_und']?>
                                                    </span>
                                                    <span class="product-o2__action">
                                                        <button class="nav-link btn btn--e-brand">Agregar a la bolsa</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card -->
                                    <?php } 
                                } else {
                                    echo "<p class='text-info'> No hay productos disponibles</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-3">
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
</div> -->