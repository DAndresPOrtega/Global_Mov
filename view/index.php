<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Mov | Inicio</title>
    <!--Archivos css propios-->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/noticias.css">
    <link rel="stylesheet" href="../assets/css/carrusel.css">
    <link rel="stylesheet" href="../assets/css/carrusel_slider.css">
    <link rel="stylesheet" href="../assets/css/nav_vertical.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--Archivos css propios-->

    <!--Bootstrap archivos css-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!--Bootstrap archivos css-->

    <!--Links para iconos en font awesome-->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Links para iconos en font awesome-->

    <!--Bootstrap archivos js-->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!--Bootstrap archivos js-->
</head>
<body>
<!--Cabezera de la pagina-->
<header class="cabezera">
        <div class="logo"><img src="../assets/img/global mov logo.jpeg" alt=""></div>
        <nav class="navbar">
            <ul class="lista">
                <li>
                 <label for="btn-menu">☰</label>
                </li>
                <li>
                <a class="link" href="index.php">Personas</a>
                </li>
                <li>
                    <a class="link" href="#">Empresas</a>
                </li>
                <li>
                    <a class="link" href="tienda.php">Tienda</a>
                </li>
                <li>
                    <a class="link" href="noticias.php">Noticias</a>
                </li>
                <li>
                    <a class="link" href="ayuda.php">Ayuda</a>
                </li>
                <li>
                    <a class="login" href="">Mi cuenta</a>
                </li>
            </ul>
        </nav>
</header>
<!--Cabezera de la pagina-->
<!--Contenido de la pagina-->
<div class="contenido">
    <!--Menu vertical-->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
    <img src="../assets/img/global mov logo.jpeg" alt="">
        <div class="cont-menu">
            <nav>
                <a href="index.php">Personas</a>
                <a href="#">Empresas</a>
                <a href="tienda.php">Tienda</a>
                <a href="noticias.php">Noticias</a>
                <a href="ayuda.php">Ayuda</a>
                <a href="#">Mi cuenta</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div class="container-carousel">
        <div class="carruseles" id="slider">
            <section class="slider-section">
                <img src="../assets/img/carrusel-5.jpg">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel 6.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-4.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-5.jpg">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel 6.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-4.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-5.jpg">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel 6.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-4.webp">
            </section>
            <section class="slider-section">
                <img src="../assets/img/carrusel-5.jpg">
            </section>
        </div>
        <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
        <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
    </div>

    <script src="../assets/js/carrusel1.js"></script>
    <!--Menu vertical-->
    <!--
    <div class="carrousel">
        <div class="grande">
            <img src="../assets/img/carrusel-4.webp" alt="Imagen 1" class="img">
            <img src="../assets/img/carrusel-2.jpg" alt="Imagen 2" class="img">
        </div>

        <ul class="puntos">
            <li class="punto activo"></li>
            <li class="punto"></li>
        </ul>
        <hr>

    </div>
    <script defer src="../assets/js/carrusel.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    -->
    <!--Carrusel
    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta"><img src="../assets/img/carrusel-4.webp" alt="img"></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta"><img src="../assets/img/carrusel-2.jpg" alt="img"></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta"><img src="../assets/img/carrusel-1.jpg" alt="img"></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="conteCarrouselController">
            <a href="#itemCarrousel-1">•</a>
            <a href="#itemCarrousel-2">•</a>
            <a href="#itemCarrousel-3">•</a>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
    Carrusel-->
    <!--Aca se muestran nuestras ofertas de planes-->
    <div class="planes">
        <div class="plan">
            <div class="cont_titulo">
                <h3>Plan:</h3><h1 class="gigas">20 GIGAS</h1>
            </div>
            <div class="info_plan">
            <div class="detalles">
                    <p>Ver detalles</p>
                    <hr>
                    <ul>
                        <li>
                            <img src="../assets/img/icon-gigas.png" alt="">
                            20 Gigas
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-msg.png" alt="">
                            50 Mensajes de texto
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-mnts.png" alt="">
                            250 Minutos libres
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-redes.png" alt="">
                            Redes sociales libres
                        </li>
                    </ul>
                </div>
                <!-- <div class="acordeon-plan">
                    <section class="ver_detalles">
                        <details>
                        <summary class="incluye">Ver lo que incluye <hr></summary>
                            <div class="info_plan">
                                <ul>
                                    <li>
                                        <img src="../assets/img/icon-gigas.png" alt="">
                                        20 Gigas
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-msg.png" alt="">
                                        50 Mensajes de texto
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-mnts.png" alt="">
                                        250 Minutos libres
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-redes.png" alt="">
                                        Redes sociales libres
                                    </li>
                                </ul>
                            </div>
                        </details>      
                    </section>
                </div> -->
                <h5 class="plan-precio">$4.990</h5>
                <p class="plan-texto">Al mes</p>
                <button class="comenzar">Contratar plan</button><br>
            </div>
        </div>
        <div class="plan">
            <div class="cont_titulo">
                <h3>Plan:</h3><h1 class="gigas">100 GIGAS</h1>
            </div>
            <div class="info_plan">
            <div class="detalles">
                    <p>Ver detalles</p>
                    <hr>
                    <ul>
                        <li>
                            <img src="../assets/img/icon-gigas.png" alt="">
                            20 Gigas
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-msg.png" alt="">
                            50 Mensajes de texto
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-mnts.png" alt="">
                            250 Minutos libres
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-redes.png" alt="">
                            Redes sociales libres
                        </li>
                    </ul>
                </div>
                <!-- <div class="acordeon-plan">
                    <section class="ver_detalles">
                        <details>
                        <summary class="incluye">Ver lo que incluye <hr></summary>
                            <div class="info_plan">
                                <ul>
                                    <li>
                                        <img src="../assets/img/icon-gigas.png" alt="">
                                        20 Gigas
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-msg.png" alt="">
                                        50 Mensajes de texto
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-mnts.png" alt="">
                                        250 Minutos libres
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-redes.png" alt="">
                                        Redes sociales libres
                                    </li>
                                </ul>
                            </div>
                        </details>      
                    </section>
                </div> -->
                <h5 class="plan-precio">$4.990</h5>
                <p class="plan-texto">Al mes</p>
                <button class="comenzar">Contratar plan</button><br>
            </div>
        </div>
        <div class="plan">
            <div class="cont_titulo">
                <h3>Plan:</h3><h1 class="gigas">200 GIGAS</h1>
            </div>
            <div class="info_plan">
            <div class="detalles">
                    <p>Ver detalles</p>
                    <hr>
                    <ul>
                        <li>
                            <img src="../assets/img/icon-gigas.png" alt="">
                            20 Gigas
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-msg.png" alt="">
                            50 Mensajes de texto
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-mnts.png" alt="">
                            250 Minutos libres
                        </li>
                        <hr>
                        <li>
                            <img src="../assets/img/icon-redes.png" alt="">
                            Redes sociales libres
                        </li>
                    </ul>
                </div>
                <!-- <div class="acordeon-plan">
                    <section class="ver_detalles">
                        <details>
                        <summary class="incluye">Ver lo que incluye <hr></summary>
                            <div class="info_plan">
                                <ul>
                                    <li>
                                        <img src="../assets/img/icon-gigas.png" alt="">
                                        20 Gigas
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-msg.png" alt="">
                                        50 Mensajes de texto
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-mnts.png" alt="">
                                        250 Minutos libres
                                    </li>
                                    <hr>
                                    <li>
                                        <img src="../assets/img/icon-redes.png" alt="">
                                        Redes sociales libres
                                    </li>
                                </ul>
                            </div>
                        </details>      
                    </section>
                </div> -->
                <h5 class="plan-precio">$4.990</h5>
                <p class="plan-texto">Al mes</p>
                <button class="comenzar">Contratar plan</button><br>
            </div>
    </div>
    <!--Aca se muestran nuestras ofertas de planes-->
    <!--Inforacion sobre las redes sociales incluidas en nuestros planes-->
    <div class="info_redes">
        <hr>
        <p>Todos nuestros planes incluyen estas <br>
            Redes Sociales Libres:</p>
        <!--Muestro un imagen con iconos de las redes sociales-->
        <img src="../assets/img/redes.png" alt="">
        <hr>
        <!--Muestro un imagen con iconos de las redes sociales-->
    </div>
    <!--Inforacion sobre las redes sociales incluidas en nuestros planes-->
 
    <!-- Swiper -->
        <div class="container">
            <!--
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            -->
            <div class="swiper-container mySwiper">
            
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../assets/img/cel2.png"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>Redmi Note 10</h4>
                            </div>
                            <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                            </div>
                            <div class="card-link">
                            <a href="#">Ver más</a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/img/cel3.jpg"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>Redmi Note 10</h4>
                            </div>
                            <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                            </div>
                            <div class="card-link">
                            <a href="#">Ver más</a>
                            </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="../assets/img/cel4.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>MOTOROLA G71 128GB VERDE</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                        </div>
                        <div class="card-link">
                        <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="../assets/img/cel2.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                        </div>
                        <div class="card-link">
                        <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="../assets/img/cel3.jpg"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                        </div>
                        <div class="card-link">
                        <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                
                    <div class="swiper-slide">
                        <img src="../assets/img/cel4.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Galaxy A54 5G 256GB</h4>
                        </div>
                        <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                modi
                                sunt ips.</p>
                            <h5>$32.000</h5>
                            <p>Antes: 40.000</p>
                        </div>
                        <div class="card-link">
                        <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                    </div>
        
                </div>
            
            

            </div>

        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/carrusel_slider.js"></script>
    <!-- Swiper JS -->
    <!--<div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
            <div class="prod">
                  <div class="img">
                       <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto-1.jpg" alt="">
                  </div>
                   <div class="info">
                       <p>Samsung</p>
                       <h2>Galaxy A30S</h2>
                       <h3>$290.000</h3>
                      <h5>Antes: $350.000</h5>
                    </div>
            </div>
            <div class="prod">
                    <div class="img">
                        <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto-2.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Xaomi</p>
                        <h2>Redmi Note 10 Pro</h2>
                        <h3>$249.990</h3>
                        <h5>Antes: $309.990</h5>
                    </div>
            </div>
            <div class="prod">
                    <div class="img">
                        <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto 3.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Motorola</p>
                        <h2>MOTOROLA G71 128GB VERDE</h2>
                        <h3>$209.990</h3>
                        <h5>Antes: $349.990</h5>
                    </div>
            </div>
            <div class="prod">
                    <div class="img">
                        <img style="width:130px; height:200px; margin:5px;" src="../assets/img/producto 4.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Samsung</p>
                        <h2>Galaxy A54 5G 256GB</h2>
                        <h3>$290.000</h3>
                        <h5>Antes: $499.990</h5>
                    </div>
            </div>
            <div class="prod">
                <div class="img">
                    <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto-1.jpg" alt="">
                </div>
                   <div class="info">
                       <p>Samsung</p>
                       <h2>Galaxy A30S</h2>
                       <h3>$290.000</h3>
                      <h5>Antes: $350.000</h5>
                    </div>
            </div>
            <div class="prod">
                <div class="img">
                    <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto-2.jpg" alt="">
                </div>
                    <div class="info">
                        <p>Xaomi</p>
                        <h2>Redmi Note 10 Pro</h2>
                        <h3>$249.990</h3>
                        <h5>Antes: $309.990</h5>
                    </div>
            </div>
            <div class="prod">
                <div class="img">
                        <img style="width:200px; height:200px; margin:5px;" src="../assets/img/producto 3.jpg" alt="">
                </div>
                    <div class="info">
                        <p>Motorola</p>
                        <h2>MOTOROLA G71 128GB VERDE</h2>
                        <h3>$209.990</h3>
                        <h5>Antes: $349.990</h5>
                    </div>
            </div>
            <div class="prod">
                    <div class="img">
                        <img style="width:130px; height:200px; margin:5px;" src="../assets/img/producto 4.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Samsung</p>
                        <h2>Galaxy A54 5G 256GB</h2>
                        <h3>$290.000</h3>
                        <h5>Antes: $499.990</h5>
                    </div>
            </div>
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>-->
    <hr>
    <!--Mensaje con informacion de "¿Por que contratarnos?"-->
    <div class="mensaje">
        <img src="../assets/img/msg.jpg" alt="">
        <div class="msg">
            <h1>¿Porque contratarnos?</h1>
            <p>Porque somos una compañía a la que le
            importan las personas y queremos
            entregar un buen servicio tanto en Red,
            como atención a través de nuestro Call
            Center y planes que sean convenientes
            para personas y emprendedores, sin
            importar el tamaño de su empresa. La
            portabilidad te permite decidir quien te
            entrega lo que más se acomoda a tu
            necesidad. Es tiempo de cambiarte a
            Smobi.</p>
        </div>
    </div>
    <!--Mensaje con informacion de "¿Por que contratarnos?"-->
  <br>
  <br>
  <!--Formulario para que el usuario envie sus datos y nos contactemos con el-->
  <div class="formulario">
        <div>
            <img src="../assets/img/atencion.webp" alt="">
        </div>
        <div>
            <h3>Dejanos tus datos y en breve te
                contactaremos:</h3>
            <form action="">
                <input type="text" name="" id="" placeholder="Nombre">
                <input type="text" name="" id="" placeholder="Telefono">
                <input type="text" name="" id="" placeholder="Correo">
                <select type="text" name="" id="" placeholder="Departamento">
                            <option value="">Departamento</option>
                </select><br>
                <label for="">5+5:</label>
                <input class="number" type="number">
                <button>Enviar</button>
            </form>
        </div>
  </div>
<!--Formulario para que el usuario envie sus datos y nos contactemos con el-->

</div>
<!--Contenido de la pagina-->


<!--Pie de pagina (Footer) de la pagina-->
<footer class="footer">
    <div class="container p-1 pb-0">
        <!--Acordeon con informacion-->
        <div class="acordeon">
            <section class="acordeon">
                <details>
                <summary>Informacion</summary>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil nisi ipsa repellendus rerum autem sunt earum, in vel inventore. Officia possimus sunt eum doloribus? Quod perspiciatis nobis unde inventore atque.
                </p>
                </details>
                <details>
                <summary>Informacion</summary>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum doloribus, aliquam consectetur laboriosam commodi reiciendis saepe inventore odit odio, dolorem harum rem reprehenderit, vitae maiores at veritatis quia suscipit minus!
                </p>
                </details>
        
                <details>
                <summary>Informacion</summary>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias animi dolor commodi maxime recusandae sed modi atque, minus odit nobis voluptates voluptatum possimus enim aut optio. Minus odit numquam dicta?
                    </p>
                </details>
                <details>
                    <summary>Informacion</summary>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ullam voluptas tempora fuga debitis dolorem distinctio, sunt consectetur iure rerum laborum ex alias sit quas atque saepe. Quaerat, quas sunt.
                    </p>
                </details>
                <details>
                    <summary>Informacion</summary>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat repellendus in sed neque provident ut sequi qui! Temporibus minima, praesentium at laboriosam totam numquam veniam neque. Eos porro repellendus eum!
                    </p>
                </details>
                <details>
                    <summary>Informacion</summary>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint placeat facilis eos maxime nam porro, nulla voluptatem quia accusamus necessitatibus consequuntur omnis laborum dolores perspiciatis pariatur, doloribus, excepturi alias vitae.
                    </p>
                </details>
        
            </section>
        </div>
        <!--Acordeon con informacion-->
        <hr>
        <!--Seccion "Ayuda" con informacion sobre contactos y informacion general de la empresa-->
        <section class="ayuda">
            <h4>Te ayudamos</h4>
                <ul class="ayuda">
                    
                        <div class="list">
                            <h5>Escribenos por whatsapp</h5>
                            <p>+56 9 12345678</p>
                            <h5>Llamanos</h5>
                            <p>600 085 0400</p>
                        </div>
                        <div class="list">
                            <h5>Clientes</h5>
                            <a href="">Personas</a><br>
                            <a href="">Empresas</a>
                        </div>
                        <div class="list">
                            <h5>Te ayudamos:</h5>
                            <a href="">Reclamos</a><br>
                            <a href="">Derechos de consumidor</a><br><br>
                            <h5>Mi Smobi:</h5>
                            <a href="">Portal de pagos</a>
                            <a href="">Trabaja con nosotros</a>
                        </div>
                        <div class="list">
                            <h5>Legal y regulatorio:</h5>
                            <a href="">Reglamento de telecomunaciones</a><br>
                            <a href="">Reglamento de reclamos</a>
                        </div>
                </ul>
        </section>
    <!--Seccion "Ayuda" con informacion sobre contactos y informacion general de la empresa-->
    <!-- Copyright -->
    <div class="copyright">
      <div>
        <img src="../assets/img/facebook.svg" alt="">
        <img src="../assets/img/instagram.svg" alt="">
        <img src="../assets/img/whatsapp.svg" alt="">
      </div>
      <div>© TODOS LOS DERECHOS RESERVADOS:</div>
    </div>
    <!-- Copyright -->        
    </div>
  </footer>
<!--Pie de pagina (Footer) de la pagina.-->
</div>
</body>
</html>
