<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suministros H&S</title>
    <link rel="stylesheet" href="stylepag.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/car.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./slider.css">
</head>

<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">SUMINISTROS H&S</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/me.png" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="inicio.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#lista-2">Hogar</a></li>
                            <li><a class="dropdown-item" href="#lista-3">Tecnologia</a></li>
                            <li><a class="dropdown-item" href="lista-4">Empresarial</a></li>
                            <li><a class="dropdown-item" href="#lista-5">Comercial</a></li>
                        </ul>
                    </li>
                    <li><a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos">Contacto</a></li>

                    <li> <a href="index.php">
                            <?php
                            // Verificar si el usuario ha iniciado sesión
                            if (isset($_SESSION['nombre'])) {
                                echo $_SESSION['nombre'];
                            } else {
                                echo 'Inicie Sesion';
                            }

                            ?>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['nombre'])) {
                    ?>
                        <li><a href="logout.php">Salir</a></li>
                    <?php
                    } else {
                    }

                    ?>

                </ul>
            </nav>
            <!--<div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.png" id="img-carrito" alt="">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>-->
        </div>
    </header>

    <br>
    <br>
    
    <div class="header-content container">
    <div class="header-txt">
            <h1>¡OFERTAS ESPECIALES!</h1>
            <p class="justificado">
            "¡No esperes más para transformar tu sala! Aprovecha nuestra oferta especial en televisores 
            de 65 pulgadas y sumérgete en una experiencia visual única. ¡Da el salto hacia la grandeza en 
            entretenimiento con esta increíble oportunidad!"
            </p>
            <a href="https://www.kalley.com.co/tv-kalley-65-pulgadas-164-cm-atv65uhdsqv-4k-uhd-qled-smart-tv-android/p/7705946476300" class="btn-1">Informacion</a>
        </div>
        <div class="header-img">
            <img src="images/tv65.png" alt="">
        </div>
    </div>

    <section id="gallery">
            <div class="gallery-container" >
                <figure class="gallery-item">
                    <img src="./images/tv1.png" alt="Imagen 1">
                    <figcaption></figcaption>
                </figure>
                <figure class="gallery-item">
                    <img src="./images/tv2.jpg" alt="Imagen 2">
                    <figcaption></figcaption>
                </figure>
                <figure class="gallery-item">
                    <img src="./images/tv3.jpg" alt="Imagen 3">
                    <figcaption></figcaption>
                </figure>
                <!-- ... otras imágenes ... -->
            </div>
            <nav class="gallery-navigation">
                <button class="nav-button prev-button">Anterior</button>
                <button class="nav-button next-button">Siguiente</button>
            </nav>
    </section>

    <section class="Oferts container" id="Lista-1">
        <h2   class="h2_of">Air Fryer</h2>
        <p class="justificado">
            "¡Descubre una forma más saludable de cocinar con nuestra oferta especial en air fryers!
            Obtén el tuyo hoy y disfruta de deliciosos platillos crujientes con menos grasa.
            ¡Cocina con confianza y vive una vida más saludable con nuestra exclusiva promoción!"
        </p>

        <div class="oferts-content">
            <div class="ofert-1">
                <img src="images/freidora1.png" alt="">
                <div class="product-txt">
                    <h3>Freidora</h3>
                    <p>Imusa 3.2 litros</p>
                    <p class="precio">$320.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data-id="1">Compra aquí</a>
                </div>
            </div>
            <div class="ofert-1">
                <img src="images/freidora2.png" alt="">
                <div class="product-txt">
                    <h3>Freidora digital</h3>
                    <p>Chefman 4.2 litros</p>
                    <p class="precio">$390.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data-id="2">Compra aquí</a>
                </div>
            </div>
            <div class="logan-1">
                <h3>Freidora digital</h3>
                <p>
                    Imusa 4.5 litros
                </p>
                <a href="https://www.imusa.com.co/easy-fry-oven-9-en-1/p" class="btn-2">Informacion</a>
            </div>
        </div>

        <div class="oferts-content">
            <div class="logan-2">
                <h3>Freidora digital</h3>
                <p>
                    Oster 4 litros
                </p>
                <a href="https://www.ostercolombia.com/freidora-de-aire-digital-oster-con-capacidad-de-4l-ckstaf40ddf-/p" class="btn-2">Informacion</a>
            </div>
            <div class="ofert-1">
                <img src="images/fre5.png" alt="">
                <div class="product-txt">
                    <h3>Freidora</h3>
                    <p>Home elements 3.2 litros</p>
                    <p class="precio">$315.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data-id="3">Compra aquí</a>
                </div>
            </div>
            <div class="ofert-1">
                <img src="images/fre6.png" alt="">
                <div class="product-txt">
                    <h3>Freidora digital</h3>
                    <p>Black+Decker 3.5 litros</p>
                    <p class="precio">$370.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data-id="4">Compra aquí</a>
                </div>
            </div>
        </div>

    </section>

    <section class="promotion-content container">
        <div class="promotion-content container">
            <div class="promotion-txt">
                <h2>Las mejores promociones</h2>
                
                <p>
                    "Explora las mejores promociones en muebles para tu hogar y haz que cada
                    espacio cuente. Desde elegantes sofás hasta funcionales mesas, encuentra
                    todo lo que necesitas para crear un ambiente acogedor y lleno de estilo.
                    ¡Renueva tu hogar con nuestras irresistibles ofertas hoy mismo!"
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="promotion-img">
                <img class="img-c" src="images/mueble.png" alt="">
            </div>

        </div>

    </section>

    <main class="product container" id="lista-2">

        <h2 class="product-promotion-title">Productos</h2>
        <br>
        <h2>Hogar</h2>
        <p>
            Selecciona el de tu agrado
        </p>
        <div class="product-content">

            <div class="ofert-1">
                <img src="images/estufa1.png" alt="">
                <div class="product-txt">
                    <h3>Estufa de gas 2 puestos</h3>
                    <p>Haceb</p>
                    <p class="precio">$90.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="5">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/estufa2.png" alt="">
                <div class="product-txt">
                    <h3>Estufa de gas 4 puestos</h3>
                    <p>Haceb</p>
                    <p class="precio">$380.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="6">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/estufa3.png" alt="">
                <div class="product-txt">
                    <h3>Estufa de empotrar 4 puestos</h3>
                    <p>Haceb</p>
                    <p class="precio">$850.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="7">Compra aquí</a>
                </div>
            </div>
        </div>

    </main>
    <main class="product container" id="lista-3">
        <h2>Tecnología</h2>
        <p>
            Selecciona el de tu agrado
        </p>
        <div class="product-content">

            <div class="ofert-1">
                <img src="images/portatil1.png" alt="">
                <div class="product-txt">
                    <h3>Portatil 15-ef2512la</h3>
                    <p>HP</p>
                    <p class="precio">$1.999.999</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="8">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/portatil2.png" alt="">
                <div class="product-txt">
                    <h3>Portatil X415 Core I3</h3>
                    <p>Asus</p>
                    <p class="precio">$1.450.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="9">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/portatil3.png" alt="">
                <div class="product-txt">
                    <h3>Portatil E41-55 Ryzen</h3>
                    <p>Lenovo</p>
                    <p class="precio">$2.300.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="10">Compra aquí</a>
                </div>
            </div>
        </div>

    </main>
    <main class="product container" id="lista-4">
        <h2>Empresarial</h2>
        <p>
            Selecciona el de tu agrado
        </p>
        <div class="product-content">

            <div class="ofert-1">
                <img src="images/empresarial1.png" alt="">
                <div class="product-txt">
                    <h3>Aire acondicionado Convencional</h3>
                    <p>Kalley</p>
                    <p class="precio">$1.199.999</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="8">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/empresarial2.png" alt="">
                <div class="product-txt">
                    <h3>Aire acondicionado digital</h3>
                    <p>Challenge</p>
                    <p class="precio">$2.100.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="9">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/empresarial3.png" alt="">
                <div class="product-txt">
                    <h3>Aire acondicionado inteligente</h3>
                    <p>Samsung</p>
                    <p class="precio">$3.300.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="10">Compra aquí</a>
                </div>
            </div>
        </div>

    </main>
    <main class="product container" id="lista-5">
        <h2>Comercial</h2>
        <p>
            Selecciona el de tu agrado
        </p>
        <div class="product-content">

            <div class="ofert-1">
                <img src="images/comercial1.png" alt="">
                <div class="product-txt">
                    <h3>Vitrina frost una puerta</h3>
                    <p> Kalley </p>
                    <p class="precio">$2.345.999</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="8">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/comercial2.png" alt="">
                <div class="product-txt">
                    <h3>Vitrina 2 puertas</h3>
                    <p>Imbera</p>
                    <p class="precio">$6.500.000</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="9">Compra aquí</a>
                </div>
            </div>

            <div class="ofert-1">
                <img src="images/comercial3.png" alt="">
                <div class="product-txt">
                    <h3>Vitrina 3 puertas</h3>
                    <p>Imbera</p>
                    <p class="precio">$8.099.999</p>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos" class="agregar-carrito btn-3" data id="10">Compra aquí</a>
                </div>
            </div>
        </div>

    </main>

    <section class="blog-container">

        <h2>Nuevas noticias...</h2>
        <p class="justificado">
            "¡Mantente al día con las últimas noticias en nuestro sitio web!
            Desde tendencias en decoración hasta consejos para el hogar, nuestra
            sección de nuevas noticias está repleta de contenido fresco y relevante
            que te mantendrá inspirado y bien informado. Descubre las últimas
            novedades y únete a nuestra comunidad de amantes del hogar.
            ¡No te pierdas nada y encuentra la inspiración que necesitas para transformar tu espacio!".
        </p>

        <div class="blog-content">

            <div class="blog-1">
                <img src="images/noti1.png" alt="">
                <div class="blog-txt">
                    <div class="c">
                    <p>
                        Los colombianos están comprando más en línea que durante la época prepandemia.
                        Un informe de Gravity evidenció que los horarios de compra se enfocan en la noche
                        y entre semana, pues los sábados y domingos las compras suelen ser presenciales.
                    </p>
                    </div>
                    <p>
                    <a href="https://www.larepublica.co/consumo/los-colombianos-compran-mas-en-linea-que-durante-la-epoca-de-prepandemia-3487388" class="btn-4">Leer mas</a>
                </div>
            </div>
            <div class="blog-1">
                <img src="images/noti2.png" alt="">
                <div class="blog-txt">
                    <p>
                        “Hacer entregas rápidas es la clave del éxito y estándar de calidad de los e-commerce”.
                        Según Andrés Gómez, CEO de Melonn, la meta es llegar a dos millones de órdenes mensuales
                        y conseguir duplicar el número de clientes.
                    </p>
                    <a href="https://www.larepublica.co/empresas/hacer-entregas-rapidas-es-la-clave-del-exito-y-estandar-de-calidad-de-los-e-commerce-3537722" class="btn-4">Leer mas</a>
                </div>
            </div>
            <div class="blog-1">
                <img src="images/noti3.png" alt="">
                <div class="blog-txt">
                    <p>
                        Conozca cómo puede saber a cuántas cuotas diferir sus compras con tarjeta de crédito.
                        Los pagos con tarjeta de crédito pueden ser muy útiles y sencillos. Sin embargo, debe
                        saber cómo utilizarlos de forma correcta.
                    </p>
                    <a href="https://www.larepublica.co/finanzas-personales/conozca-como-puede-saber-a-cuantas-cuotas-diferir-sus-compras-con-tarjeta-de-credito-3556751" class="btn-4">Leer mas</a>
                </div>
            </div>

        </div>

    </section>

    <!--<footer class="footer container">

        <div class="link">
            <h3>Contactenos</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3></h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>Numeros</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>

    </footer>-->

    <br>
    <br>
    <br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="" alt="Suministros H&S">
                </div>
                <div class="col-md-8 social-links">
                    <a href="https://www.facebook.com/share/sXqrV5tDUxZLon91/?mibextid=qi2Omg"><img src="images/fa.jpg" alt="Facebook"></a>
                    <a href="https://api.whatsapp.com/send?phone=+57%203122339594&text=Hola,%20Nececito%20mas%20informacion%20de%20sus%20productos"><img src="images/wha.jpg" alt="Whatsapp"></a>
                    <a href="https://www.instagram.com/suministros.hs22?igsh=MXFqaXBtdHhwNWpsdg=="><img src="images/ins.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="script.js"></script>
    <script src="scripts.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/slider.js" ></script>
</body>

</html>