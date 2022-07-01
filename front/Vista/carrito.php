<body class="config">


    <!--====== Main App ======-->
    <div id="app">



        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="is-marked">

                                        <a href="cart.html">Cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">CARRITO DE COMPRAS</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->
                <?php

                // Comprueba si existe una sesion mensaje, que contenga algun mensaje
                if (isset($_SESSION['mensaje'])) {
                    echo $_SESSION['mensaje'] . "<br>";
                    $_SESSION['mensaje'] = "";
                }
                ?>

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <div class="table-responsive">
                                    <?php
                                        if (!empty($_SESSION['carrito']) && isset($_SESSION['carrito'])) {
                                            foreach ($_SESSION['carrito'] as $producto){
                                    ?>
                                        <table class="table-p">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="table-p__box">
                                                           <!--  <div class="table-p__img-wrap">

                                                                <img class="u-img-fluid" title="<?php echo $producto['Nombre']?>" src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?> ">
                                                            </div> -->
                                                            <div class="table-p__info">

                                                                <span class="table-p__name">

                                                                    <a href="product-detail.html"><?php echo $producto["nombre"] ?></a></span>
                                                                    <ul class="table-p__variant-list">
                                                                    <li>
                                                                        <span>Producto: <?php echo $producto["producto"] ?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                            
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="table-p__price"><?php echo $producto["precio"] ?></span>
                                                    </td>
                                                    <td>

                                                        <!--====== Input Counter ======-->
                                                        <!-- <div class="input-counter">

                                                            <span class="input-counter__minus fas fa-minus"></span>

                                                            <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                            <span class="input-counter__plus fas fa-plus"></span></div>
                                                       
                                                        </div> -->


                                                        <span class="table-p__price"><?php echo $producto["cantidad"] ?></span>
                                                    </td>



                                                    <!--====== End - Input Counter ======-->
                                                    </td>

                                                    <td>
                                                        <div class="table-p__del-wrap">
                                                            <form action="<?= url_index ?>index.php?controlador=Carrito&accionar=funcion" method="post">
                                                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt(intval($producto["producto"]), COD, KEY); ?>">
                                                                <button class="far fa-trash-alt table-p__delete-link" name="btnAccion" value="Eliminar" type="submit">&nbsp Borrar producto</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--====== End - Row ======-->
                                               
                                        

                                            </tbody>
                                        </table>
                                        <?php
                                            }
                                            ?>
                                            <?php
                                                // Boton para pagar    
                                                                   
                                                echo "<a class='title1' href= " . url_index . "?controlador=Compra&accionar=registrar_compra> PAGAR </a><br>";
                                                ?>
                                            <div>
                                            <form action="<?= url_index ?>index.php?controlador=Carrito&accionar=funcion" method="post">
                                                    <button class="btn btn--e-brand-b-2 btnC" name="btnAccion" value="Borrar_todo" type="submit">Borrar carrito</button>
                                                </form>
                                                
                                            </div>
                                        <?php
                                        } else {
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
                                </div>
                            </div>
                            <!--  <div class="col-lg-12">
                                <div class="route-box">
                                    <div class="route-box__g1">

                                        <a class="route-box__link" href="shop-side-version-2.html"><i class="fas fa-long-arrow-alt-left"></i>

                                            <span>CONTINUE SHOPPING</span></a></div>
                                    <div class="route-box__g2">

                                        <a class="route-box__link" href="cart.html"><i class="fas fa-trash"></i>

                                            <span>CLEAR CART</span></a>

                                        <a class="route-box__link" href="cart.html"><i class="fas fa-sync"></i>

                                            <span>UPDATE CART</span></a></div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->



    </div>
    <!--====== End - App Content ======-->



    </div>

    <!--====== End - Main App ======-->

</body>

<!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="js/vendor.js"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="js/jquery.shopnav.js"></script>

<!--====== App ======-->
<script src="js/app.js"></script>

<!--====== Noscript ======-->
<noscript>
    <div class="app-setting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="app-setting__wrap">
                        <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>