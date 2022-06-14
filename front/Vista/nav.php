<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRUTALINA</title>
    <!-- import styles -->
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/utility.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/404.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/card.css">
    <link rel="stylesheet" href="<?php echo url_index ?>/front/assets/css/category.css">
    <title>FRUTALINA</title>
    <!-- import styles -->
</head>
<body class="config" id="js-scrollspy-trigger">
    <!-- <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div> -->

    <!--====== Main App ======-->
    <div id="app">
         
        
        <!--====== Main Header ======-->
        <header class="header--style-2">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav-wrapper">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="index-2.html">

                            <img src="<?php echo url_index ?>/front/assets/images/logo.svg" alt="" style="width: 200px; height:80px ; "></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-2" type="text" id="main-search" placeholder="Search">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                    <span>Cuenta</span></a></li>
                                            <li>

                                                <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                    <span>inscribirse</span></a></li>
                                            <li>

                                                <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>Iniciar sesión</span></a></li>
                                            <li>

                                                <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                                    <span>Salir</span></a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Lenguaje<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a class="u-c-brand">Español</a></li>
                                                    <li>

                                                        <a>Frances</a></li>
                                                    <li>

                                                        <a>ENGLISH</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Divisa<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:225px">
                                                    <li>

                                                        <a class="u-c-brand">S/.Soles</a></li>
                                                    <li>

                                                        <a>$ - US DOLLAR</a></li>
                                                    
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contacto">

                                        <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                                    <li data-tooltip="tooltip" data-placement="left" title="E-Mail">

                                        <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">

                            <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List 
                                <ul class="ah-list">
                                    <li class="has-dropdown">

                                        <span class="mega-text">M</span>======-->

                                    





                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-white">
                                    <li>

                                        <a href="<?= url_index ?>">INICIO</li>
                                    <li class="has-dropdown">

                                        <a>CATEGORIAS<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li >

                                                <a href="cart.html">Clasicos</a></li>
                                               
                                            <li>
                                                <a href="cart.html">Citricos</a></li>
                                                
                                            <li>
                                                <a href="cart.html">Tropicales</a></li>

                                            <li>
                                                <a href="cart.html">Batidos</a></li>

                                            <li>
                                                <a href="cart.html">Frozen</a></li>
                                                
                                            <li>
                                                <a href="cart.html">Detox</a></li>
                                            <li>

                                                <a href="cart.html">Mix 2 frutas</a></li>
                                            <li>

                                                <a href="wishlist.html">Extactos</a></li>
                                            <li>

                                                <a href="checkout.html">Especiales</a></li>
                                            <li>

                                                <a href="faq.html">Fruti Ensalada</a></li>
                                            <li>

                                                <a href="about.html">Antojitos</a></li>
                                            <li>

                                                <a href="contact.html">Sandwiches</a></li>
                                            <li>

                                                <a href="404.html">Tortas</a></li>
                                            <li>

                                                <a href="404.html">Hamburguesas</a></li>
                                            <li>

                                                <a href="404.html">Salchipapas</a></li>
                                            <li>

                                                <a href="404.html">Fruti Helados</a></li>
                                            <li>

                                                <a href="404.html">Extras</a></li>
                                            <li>

                                                <a href="404.html">Desayunos</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                   
                                    <li class="has-dropdown">

                                        <a>NOSOTROS<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                       
                                        <ul style="width:170px">
                                            <li >

                                                <a href="./vista/trabajaconnosotros.php">Trabaja con nosotros</a>
                                            </li>
                                            <li >

                                                <a href="./vista/Nosotros.php">Nosotros</a>
                                            </li>
                                        </ul>
                                        
                                        
                                        <li class="has-dropdown">

                                            <a href="<?= url_index ?>vista/sedes.php?">SEDES</a>
                                        </li>

                                    
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop" type="button"></button>

                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">CERRAR </span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                    <li>

                                        <a href="index-2.html"><i class="fas fa-home u-c-brand"></i></a></li>
                                    <li>

                                        <!-- CORAZON <a href="wishlist.html"><i class="far fa-heart"></i></a></li> -->
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">2</span></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                           

                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">TOTAL</span>

                                                    <span class="subtotal-value">S/.16</span></div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO CHECKOUT</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW CART</a></div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>



                        
                        <!--====== End - Dropdown Main plugin ======-->


                    </div>
                    <!--====== End - Secondary Nav ======-->
                    </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->
    </div>
</body>

    
    

        