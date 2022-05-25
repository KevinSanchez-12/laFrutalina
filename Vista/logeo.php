<!-- <body> -->
<div class="app-content">
    <div class="u-s-p-y-60">
        <!-- seccion intro -->
        <div class="section__intro u-s-m-b-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h2 class="section__heading u-c-secondary">¿Ya estas registrado?</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seccion intro -->

        <!-- form seccion -->
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-7 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box">
                                <h3 class="gl-h2">Soy un cliente nuevo</h3>

                                <span class="gl-text u-s-m-b-30">Al crear una cuenta en nuestra tienda, podrá pasar por el proceso de pago más rápido, almacenar direcciones de envío, ver y rastrear sus pedidos en su cuenta y más.</span>

                                <div class="u-s-m-b-15">
                                    <a class="l-f-o__create-link" href="<?=url_index?>index.php?controlador=usuario&accionar=registro">Crear una cuenta</a>
                                </div>

                                <h1 class="gl-h1">INICIAR SESION</h1>

                                <?php
                                    if (isset($notificacion) && !empty($notificacion)) {
                                        echo "<div class='alert alert-danger'>".$notificacion."</div>";
                                    }
                                ?>

                                <form action="<?=url_index?>index.php?controlador=usuario&accionar=verificar" method="POST">
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="login-email">Correo *</label>

                                        <input class="input-text input-text--primary-style" type="text" name="email" placeholder="Ingrese su correo"  autocomplete="off">
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="login-email">Contraseña *</label>

                                        <input class="input-text input-text--primary-style" type="password" name="password" placeholder="Ingrese su contraseña">
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <button class="btn btn--e-transparent-brand-b-2" type="submit">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- form seccion -->

    <!-- <h1>TITULO</h1>
    <?php
        if (isset($notificacion)) {
            echo "<strong>".$notificacion."</strong>";
        }
    ?>
    <form action="<?=url_index?>index.php?controlador=usuario&accionar=verificar" method="POST">
        <label><strong>Correo</strong></label> <br>
        <input type="email" placeholder="Ingrese su correo" name="email"> <br>
        <label><strong>Contraseña</strong></label> <br>
        <input type="password" placeholder="Ingrese su contraseña" name="password"> <br>
        <input type="submit">
    </form> -->
    </div>
</div>