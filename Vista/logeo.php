
<body>
    <h1>TITULO</h1>
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
    </form>
