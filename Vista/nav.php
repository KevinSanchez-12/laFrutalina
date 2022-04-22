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
        <?php if (GeneralControl::V_Sesion("usuario") || GeneralControl::V_Sesion("admin")) {
                if (GeneralControl::V_Sesion("usuario")) {
                    $nombre=$_SESSION['usuario']['Nombre'];
                } else {
                    $nombre=$_SESSION['admin']['Nombre'];
                }
                
            ?>
            <h1><?php echo "Hola ".$nombre; ?></h1>
            <li><a href="<?=url_index?>index.php?controlador=compra&accionar=index">Compras</a></li>            
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=cerrar_sesion">cerrar sesion</a></li>
            <?php 
                if(GeneralControl::V_Sesion("admin")){ ?>

            <li><a href="<?=url_index?>index.php?controlador=venta&accionar=index">ver ventas</a></li>            
            <li><a href="<?=url_index?>index.php?controlador=producto&accionar=crear_producto">crear producto</a></li>            
            <li><a href="<?=url_index?>index.php?controlador=producto&accionar=crear_Categoria">crear categoria</a></li>
 

            <?php  }
            
            ?>
        <?php } else{?> 
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=index">Login</a></li>
            <li><a href="<?=url_index?>index.php?controlador=usuario&accionar=registro">Registro</a></li>  
        <?php } ?>
    </ul>