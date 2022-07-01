<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRUTALINA</title>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <!-- import styles -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/utility.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/slider.css">
    <link rel="stylesheet" href="../assets/css/card.css">
    <link rel="stylesheet" href="../assets/css/category.css">
    <!-- import styles -->
     <!--====== Google Font ======-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

<!--====== Vendor Css ======-->
<link rel="stylesheet" href="css/vendor.css">

<!--====== Utility-Spacing ======-->
<link rel="stylesheet" href="css/utility.css">

<!--====== App ======-->
<link rel="stylesheet" href="css/app.css">
</head>
<body>   
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

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="signin.html">Signin</a></li>
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
                                    <h1 class="section__heading u-c-secondary">¿Ya estas registrado?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">Soy nuevo cliente</h1>

                                        <span class="gl-text u-s-m-b-30">Al crear una cuenta en nuestra tienda, podrá avanzar más rápido en el proceso de pago, almacenar direcciones de envío, ver y rastrear sus pedidos en su cuenta y más.</span>
                                        <div class="u-s-m-b-15">

                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="<?=url_index?>index.php?controlador=Usuario&accionar=registro"">CREAR CUENTA</a></div>
                                        <h1 class="gl-h1">INICIAR SESION</h1>

                                        <span class="gl-text u-s-m-b-30">Si tiene una cuenta con nosotros, inicie sesión.</span>
                                        <form class="l-f-o__form">
                                            <div class="gl-s-api">
                                                <div class="u-s-m-b-15">

                                                    <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                                    <a href="https://es-la.facebook.com/" class="Face">
                                                         <span>Iniciar sesion usando Facebook</span></button></div>
                                                    </a>
                                                <div class="u-s-m-b-15">

                                                    <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>
                                                    <a href="https://accounts.google.com/" class="Face">
                                                        <span>Iniciar sesion con Google</span></button></div>
                                                    </a>
                                            </div>
                                            
                                            <?php
                                                 //Verifica si existe un mensaje a mostrar
                                                         if (isset($notificacion)) {
                                                           echo "<strong>".$notificacion."</strong>";
                                                              }
                                             ?>
                                          <form action="<?=url_index?>index.php?controlador=usuario&accionar=verificar" method="POST">
                                          
                                          <div class="u-s-m-b-30">
                                                <label class="gl-label" for="login-email"><strong>CORREO</strong></label> <br>              
                                                <input class="input-text input-text--primary-style" type="email" placeholder="Ingrese su correo" name="email"> <br>             
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label"><strong>CONTRASEÑA</strong></label> <br>                
                                                <input class="input-text input-text--primary-style" type="password" placeholder="Ingrese su contraseña" name="password"> <br>
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">ACCEDER</button></div>
                                                <div class="u-s-m-b-30">

                                                    <a class="gl-link" href="lost-password.html">¿Perdiste tu contraseña?</a></div>
                                             
                                            </div>
                                            </form>


                                            <div class="u-s-m-b-30">

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="remember-me">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <!-- <label class="check-box__label" for="remember-me">Remember Me</label></div> -->
                                                </div>
                                                <!--====== End - Check Box ======-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->

      <!--  <h1>TITULO </h1>
    <?php
        //Verifica si existe un mensaje a mostrar
        if (isset($notificacion)) {
            echo "<strong>".$notificacion."</strong>";
        }
    ?>
    Formulario de logeo del usuario
        Falta validar que la contraseña tenga caracteres alfanumericos y simbolos
    
    <form action="<?=url_index?>index.php?controlador=usuario&accionar=verificar" method="POST">
        <label><strong>Correo</strong></label> <br>
        <input type="email" placeholder="Ingrese su correo" name="email"> <br>
        <label><strong>Contraseña</strong></label> <br>
        <input type="password" placeholder="Ingrese su contraseña" name="password"> <br>
        <input type="submit">
    </form>-->
    </body>
