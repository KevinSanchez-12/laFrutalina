<?php
   if (isset($_SESSION["mensaje"])) {
    print_r($_SESSION["mensaje"]);
    unset($_SESSION["mensaje"]);
   } 

    ?>
    <h1>Crear Categoria</h1>

    <form action="<?=url_index?>?controlador=producto&accionar=registrar_categoria" method="POST">


        <label ><strong>Nombre de Categoria</strong></label> <br>
        <input type="text" name="nombrectg"> <br>


        <input type="submit">

    </form>