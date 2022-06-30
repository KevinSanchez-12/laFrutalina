
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

                            <a href="#">INICIO</a></li>
                        <li class="is-marked">

                            <a href="#">REGISTRO</a></li>
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
                    <h1 class="section__heading u-c-secondary">CREATE UNA CUENTA</h1>
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
                        <h1 class="gl-h1">INFORMACION PERSONAL</h1>
                        <form class="l-f-o__form">
                            <div class="gl-s-api">
                                <div class="u-s-m-b-15">

                                    <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>
                                        <a href="https://web.facebook.com/" class="Face">
                                        <span>Iniciar con facebook</span></button></div>
                                        </a>
                                <div class="u-s-m-b-30">

                                    <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>
                                        <a href="https://accounts.google.com/" class="Face">
                                        <span>Iniciar con Google</span></button></div>
                                        </a>
                            </div>
                            <!--Formulario registro de usuario, se asiganara un rol de usuario-->
                    <form action="<?=url_index?>?controlador=usuario&accionar=registrar" method="POST">
                                   
                            <div class="u-s-m-b-30">
                                <label class="gl-label" for="">NOMBRES *</label>

                                <input class="input-text input-text--primary-style" type="text"  placeholder="Ingrese sus nombres" name="nombre"></div>
                            <div class="u-s-m-b-30">

                                <label class="gl-label" for="reg-lname">APELLIDOS *</label>

                                <input class="input-text input-text--primary-style" type="text"  placeholder="Ingrese sus apellidos" name="apellido"></div>
                                <div class="u-s-m-b-30">

                            <label class="gl-label" for="reg-lname">DNI</label>

                                <input class="input-text input-text--primary-style" type="number"  placeholder="Ingrese su DNI" name="dni"></div>

                            <div class="u-s-m-b-30">

                                <label class="gl-label" for="reg-email">CORREO ELECTRONICO</label>

                                <input class="input-text input-text--primary-style" type="email"  placeholder="Ingrese su correo electronico" name="email"></div>
                            <div class="u-s-m-b-30">

                                <label class="gl-label" for="reg-lname">CELULAR</label>

                                <input class="input-text input-text--primary-style" type="number"  placeholder="Ingrese su numero de celular"  name="celular"></div>
                            <div class="u-s-m-b-30">

                                <label class="gl-label" for="reg-password">CONTRASEÑA*</label>

                                <input class="input-text input-text--primary-style" type="password"  placeholder="Ingrese su contraseña" name="password"></div>
                            <div class="u-s-m-b-15">

                                <button class="btn btn--e-transparent-brand-b-2" type="submit">CREAR</button></div>
                                <!-- <input type="submit"> -->

                        </form>
                      

                            <a class="gl-link" href="#">Volver al inicio</a>
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

</html>
    