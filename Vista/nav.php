<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <ul>
        <li><a href="<?=url_index?>">Inicio</a></li>
        <li><a href="<?=url_index?>index.php?controlador=carrito&accionar=index">Carrito</a></li>
        <?php if (GeneralControl::V_Sesion("usuario") || GeneralControl::V_Sesion("admin")) {?>
            <h1><?php echo "Hola ".$_SESSION['usuario']['Nombre']; ?></h1>
            <li><a href="<?=url_index?>index.php?controlador=venta&accionar=confirmar_compra">Compras</a></li>            
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=cerrar_sesion">cerrar sesion</a></li>
        <?php } else{?> 
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=index">Login</a></li>
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=registro">Registro</a></li>  
        <?php } ?>
    </ul>