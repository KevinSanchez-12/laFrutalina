<?php
    // Verifica si existe detalles a mostrar
    if($detalles){
        echo ($detalles['Nombre']);
        ?>
<!--====== App Content ======-->
<div class="app-content">
    <!--====== Section 1 ======-->
    <div class="u-s-p-t-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!--====== Product Breadcrumb ======-->
                    <!-- <div class="pd-breadcrumb u-s-m-b-30">
                    <ul class="pd-breadcrumb__list">
                        <li class="has-separator">
                            <a href="index.hml">Home</a></li>
                        <li class="has-separator">
                            <a href="shop-side-version-2.html">Electronics</a></li>
                        <li class="has-separator">
                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                        <li class="is-marked">
                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                    </ul>
                </div> -->
                    <!--====== End - Product Breadcrumb ======-->
                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                <div class="pd-o-img-wrap" data-src="images/product/product-d-1.jpg">
                                    <img class="u-img-fluid" height="150px" title="<?php echo $detalles['Nombre']?>" src="<?php echo $detalles['Imagen']?>" alt="<?php echo $detalles['Nombre']?> " data-zoom-image="<?php echo $detalles['Nombre']?>">
                                </div>
                                <!-- <div class="pd-o-img-wrap" data-src="images/product/product-d-2.jpg">
                                    <img class="u-img-fluid" src="images/product/product-d-2.jpg" data-zoom-image="images/product/product-d-2.jpg" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="images/product/product-d-3.jpg">
                                    <img class="u-img-fluid" src="images/product/product-d-3.jpg" data-zoom-image="images/product/product-d-3.jpg" alt="">
                                </div>
                                <div class="pd-o-img-wrap" data-src="images/product/product-d-4.jpg">
                                    <img class="u-img-fluid" src="images/product/product-d-4.jpg" data-zoom-image="images/product/product-d-4.jpg" alt="">
                                </div>-->
                                <!-- <div class="pd-o-img-wrap" data-src="images/product/product-d-5.jpg">
                                    <img class="u-img-fluid" src="images/product/product-d-5.jpg" data-zoom-image="images/product/product-d-5.jpg" alt="">
                                </div>  -->
                            </div>
                            <span class="pd-text">Click for larger zoom</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    <div>
                                        <img class="u-img-fluid" title="<?php echo $detalles['Nombre']?>" src="<?php echo $detalles['Imagen']?>" alt="<?php echo $detalles['Nombre']?>">
                                    </div>
                                    <!-- <div>
                                        <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Product Detail Zoom ======-->
                </div>
                <div class="col-lg-7">
                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>
                            <h3><span><?php echo $detalles['Nombre']?></span></h3>
                        </div>
                        <div>
                            <div class="pd-detail__inline">
                                <h4 class="card-title">S/ <?php echo $detalles['Precio_und']?></h4>
                                <!-- <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div> -->
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    <span class="pd-detail__review u-s-m-l-4">
                                        <a data-click-scroll="#view-review">23 Reviews</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                            <div class="u-s-m-b-15">
                                    <h4 class="card-title">Descripcion larga:  <?php echo $detalles['Descripcion']?></h4>
                                </div>
                                <div class="pd-detail__inline">
                                    <h5 class="card-title">Stock:  <?php echo $detalles['Cantidad']?></h5>
                                    <!-- <span class="pd-detail__left">Only 2 left</span></div> -->
                                </div>
                                <!-- Verifica si tiene stock-->
                                <?php if (intval($detalles['Cantidad'])>0) { ?>

                                <!--Formulario con imputs oculto, para agrarse al carrito-->
                                <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">

                                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt(intval($detalles['ID']),COD,KEY);?>">
                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($detalles['Nombre'],COD,KEY);?>">
                                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($detalles['Precio_und'],COD,KEY);?>">
                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                                </form>
                                <?php } else{
                                    echo "<button class='btn btn-primary' type='button' disabled>Sin Stock</button>";
                                }?>
                                
                                <!-- <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">
                                        <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>
                                            <a href="signin.html">Add to Wishlist</a>
                                            <span class="pd-detail__click-count">(222)</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">
                                        <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>
                                            <a href="signin.html">Email me When the price drops</a>
                                            <span class="pd-detail__click-count">(20)</span></span>
                                    </div>
                                </div> -->
                                <!-- <div class="u-s-m-b-15">
                                    <ul class="pd-social-list">
                                        <li>
                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div> -->
                                <!-- <div class="u-s-m-b-15">
                                    <form class="pd-detail__form">
                                        <div class="pd-detail-inline-2">
                                            <div class="u-s-m-b-15">
                             Input Counter
                                                <div class="input-counter">
                                                    <span class="input-counter__minus fas fa-minus"></span>
                                                    <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">
                                                    <span class="input-counter__plus fas fa-plus"></span>
                                                </div>
                                                End - Input Counter 
                                            </div>
                                            <div class="u-s-m-b-15">
                                                <button class="btn btn--e-brand-b-2" type="submit">Añadir al carrito</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                                <div class="u-s-m-b-15">
                                    <span class="pd-detail__label u-s-m-b-8">Políticas del producto:</span>
                                    <ul class="pd-detail__policy-list">
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
                                            <span>P1</span>
                                        </li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
                                            <span>P1</span>
                                        </li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
                                            <span>P3</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--====== End - Product Right Side Details ======-->
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Product Detail Tab ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pd-tab">
                                <div class="u-s-m-b-30">
                                    <ul class="nav pd-tab__list">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPCION</a>
                                         
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!--====== Tab 1 ======-->
                                    <div class="tab-pane fade show active" id="pd-desc">
                                        <div class="pd-tab__desc">
                                            <div class="u-s-m-b-15">
                                                <p><?php echo $detalles['Descripcion']?></p>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <ul>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>
                                                        <span>P1</span>
                                                    </li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>
                                                        <span>P2</span>
                                                    </li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>
                                                        <span>P3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Tab 1 ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->
    <?php


    }else{
        echo "Hubo un error al mostrar datos";
    }

?>
