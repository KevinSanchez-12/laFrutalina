<p>HOLA</p>
<div class="app-content">
    <div class="bg-anti-flash-white">
        <div class="white-container">
            <!-- carrousel -->
            <div class="container u-s-p-b-60">
                <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-black">
                    <div class="owl-carousel primary-style-2" id="hero-slider">
                        <!-- slider 1 -->
                        <div class="hero-slide hero-slide--4">
                            <div class="primary-style-2-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">
                                            <span class="content-span-1 u-c-white">Disfruta de nuestros deliciosos</span>

                                            <span class="content-span-2 u-c-white">jugos surtidos</span>

                                            <span class="content-span-3 u-c-white">Los mejores jugos los encuentras en la Frutalina,deliciosos y con una gran tradición</span>

                                            <span class="content-span-4 u-c-white">
                                                Desde
                                                <span class="u-c-brand">$5.00</span>
                                            </span>

                                            <a class="shop-now-link btn--e-brand" href="#">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider 1 -->

                        <!-- slider 2 -->
                        <div class="hero-slide hero-slide--4 hero-slide hero-slide--5">
                            <div class="primary-style-2-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">
                                            <span class="content-span-1 u-c-white">Disfruta de nuestros deliciosos</span>

                                            <span class="content-span-2 u-c-white">jugos surtidos</span>

                                            <span class="content-span-3 u-c-white">Los mejores jugos los encuentras en la Frutalina,deliciosos y con una gran tradición</span>

                                            <span class="content-span-4 u-c-white">
                                                Desde
                                                <span class="u-c-brand">$5.00</span>
                                            </span>

                                            <a class="shop-now-link btn--e-brand" href="#">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider 2 -->
                    </div>
                </div>
            </div>
            <!-- carrousel -->

            <!-- productos más vendidos -->
            <div class="u-s-p-b-60">
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h2 class="section__heading u-c-secondary u-s-m-b-12">Lo más vendido</h2>

                                    <span class="section__span u-c-silver u-s-m-b-16">Llena tu bolsa con nuestros mejores productos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <?php
                                if (isset($lista)) {
                                    //echo " Hay una lista";
                                    if(isset($mensaje)){
                                        echo "<h3 class='text-error'>".$mensaje."</h3> ";
                                    }
                                    foreach($lista as $producto) { ?>
                                        <!-- card -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-o2 u-h-100">
                                                <div class="product-o2__wrap">
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">
                                                        <img class="aspect__img product-o2__img"  src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>">
                                                    </a>

                                                    <div class="product-o2__action-wrap">
                                                        <ul class="product-o2__action-list">
                                                            <li>
                                                                <a data-modal="modal" data-toggle="tooltip" data-placement="top" title="Ver detalle" href="#">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="product-o2__content">
                                                    <span class="product-o2__name">
                                                        <a href="#"><?php echo $producto['Nombre']?></a>
                                                    </span>
                                                    <span class="product-o2__category">
                                                        <a href="#"><?php echo $producto['Descripcion'] ?></a>
                                                    </span>
                                                    <span class="product-o2__price">
                                                        S/ <?php echo $producto['Precio_und']?>
                                                    </span>
                                                    <span class="product-o2__action">
                                                        <button
                                                            class="nav-link btn btn--e-brand"
                                                            onclick="addToCart(
                                                                <?php echo $producto['ID'] ?>,
                                                                '<?php echo $producto['Nombre'] ?>',
                                                                <?php echo $producto['Precio_und'] ?>)"
                                                        >Agregar a la bolsa</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card -->
                                    <?php } 
                                } else {
                                    echo "<p class='text-info'> No hay productos disponibles</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="section__more">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a class="nav-link btn--e-brand" href="#">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- productos más vendidos -->
            
            <!-- categorias -->
            <div class="u-s-p-b-60">
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h2 class="section__heading u-c-secondary u-s-m-b-12">Categorias</h2>

                                    <span class="section__span u-c-silver u-s-m-b-16">Descubre todo lo que tenemos para ofrecerte</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 u-s-m-b-30">
                                <div class="category-o">
                                    <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                        <img class="aspect__img category-o__img" src="https://cdn.pixabay.com/photo/2017/01/20/14/59/orange-1995044__340.jpg" alt="">
                                    </div>
                                    <div class="category-o__info">
                                        <a class="category-o__shop-now btn--e-white-brand" href="shop-side-version-2.html">Jugos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 u-s-m-b-30">
                                <div class="category-o">
                                    <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                        <img class="aspect__img category-o__img" src="https://cdn.pixabay.com/photo/2016/11/22/18/52/cake-1850011__340.jpg" alt="">
                                    </div>
                                    <div class="category-o__info">
                                        <a class="category-o__shop-now btn--e-white-brand" href="shop-side-version-2.html">Tortas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 u-s-m-b-30">
                                <div class="category-o">
                                    <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                        <img class="aspect__img category-o__img" src="https://cdn.pixabay.com/photo/2017/02/09/14/09/kebab-2052491__340.jpg" alt="">
                                    </div>
                                    <div class="category-o__info">
                                        <a class="category-o__shop-now btn--e-white-brand" href="shop-side-version-2.html">Hamburguesas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 u-s-m-b-30">
                                <div class="category-o">
                                    <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                        <img class="aspect__img category-o__img" src="https://cdn.pixabay.com/photo/2016/11/06/23/16/breakfast-1804436__340.jpg" alt="">
                                    </div>
                                    <div class="category-o__info">
                                        <a class="category-o__shop-now btn--e-white-brand" href="shop-side-version-2.html">Desayunos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- categorias -->
        </div>
    </div>
</div>

<script>
    const addToCart = async (id, nombre, precio, cantidad = 1) => {

        const url = "<?=url_index?>index.php?controlador=Carrito&accionar=funcion"

        const data = new FormData()
        data.append('id', id)
        data.append('nombre', nombre)
        data.append('precio', precio)
        data.append('cantidad', cantidad)
        data.append('btnAccion', 'Agregar')
        
        const response = await axios.post(url, data)
    }
</script>

<!-- <div class="col-3">
    <div class="card">
        <img height="317px" title="<?php echo $producto['Nombre']?>" class="card-img-top" src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>">
        <div class="card-body">
            <span><?php echo $producto['Nombre']?></span>
            <h5 class="card-title">S/ <?php echo $producto['Precio_und']?></h5>
            <form action="<?=url_index?>index.php?controlador=Carrito&accionar=funcion"  method="post">

                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt(intval($producto['ID']),COD,KEY);?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio_und'],COD,KEY);?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
            </form>
        </div>
    </div>
</div> -->