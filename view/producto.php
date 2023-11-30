<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Mov | Inicio</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/producto.css">
    <link rel="stylesheet" href="../assets/css/seleccionar_img.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/nav_vertical.css">
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
                    <a class="link" href="empresas.php">Empresas</a>
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
                    <a class="login" href="#">Mi cuenta</a>
                </li>
            </ul>
        </nav>
</header>
<!--Cabezera de la pagina-->
<!--Contenido de la pagina-->
<div class="contenido-prod">
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
    <!--Menu vertical-->
    <!--Acá se mostrarán unas "Migas de pan" que servirán al usuario para ver en que 
    Sección de la página se encuentra y como volver a una sección anterior.-->
    <div class="migas_de_pan">
        <a href="tienda.php">Tienda </a>/<a href="#">Producto</a>
    </div>
    <!--Acá se mostrarán unas "Migas de pan" que servirán al usuario para ver en que 
    Sección de la página se encuentra y como volver a una sección anterior.-->
    <hr>
    <div id="product-details" class="product-details"></div>
    <!--Sección para mostrar imágenes y información del producto-->
<script src="../assets/js/producto.js"></script>
<script>
  // Obtener el ID del producto de la URL
  const urlParams = new URLSearchParams(window.location.search);
  const productId = urlParams.get('id');

  // Buscar el producto con el ID correspondiente
  const product = products.find(p => p.id == productId);

  // Mostrar los detalles del producto si se encuentra
  if (product) {
    const productDetailsContainer = document.getElementById('product-details');
    const productDetailsHTML = `
    <div clas="contenedor-producto">
        <div class="row">
            <div class="col-5 m-5">
                <div class="cont">
                    <div class="img_container">
                        <img style="width: 250px; height:250px; margin-left: 100px;" src="${product.image}" alt="img" class="main_img">
                    </div>

                    <div class="thumbnail_container">
                        <img style="width: 120px; height:120px;" class="thumbnail active" src="${product.image}" alt="img">
                        <img style="width: 120px; height:120px;" class="thumbnail" src="../assets/img/producto 3.jpg" alt="img">
                        <img style="width: 120px; height:120px;" class="thumbnail" src="../assets/img/producto-4.avif" alt="img">
                        <img style="width: 120px; height:120px;" class="thumbnail" src="../assets/img/producto-5.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div id="info_prod" class="col-5">
                <a class="cabeza" href="">Marca</a>/ ${product.name}<br>
                <p class="marca">Marca</p>
                <h4 class="nombre">${product.name}</h4>
                <p class="descripcion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quae dolorem vel minima nisi ratione, eum fugit ullam a neque veritatis laboriosam quos expedita incidunt nam nesciunt cupiditate non voluptas?</p>
                <li style="list-style-type: none;" class="precio"><h4>${product.price}</h4></li>
                <li style="list-style-type: none;" class="descuento"><h5>${product.desc}</h5></li> <br>
                <hr>
                <div class="row mb-0 justify-content-center">                 
                        <div class="justify-content-center">
                            <form action="post">
                                <div class="boton">
                                    <button class="comprar">Comprar</button>
                                </div><br>
                                <!--
                                    <div class="col-md-6 offset-md-4">
                                    <button class="comprar">Comprar</button>
                                </div>-->
                                <div class="compartir">
                                    <img src="../assets/img/facebook.svg" alt="">
                                    <img src="../assets/img/instagram.svg" alt="">
                                    <img src="../assets/img/whatsapp.svg" alt="">
                                </div>
                            </form>
                        </div>
                </div>
             </div>
        </div>
    </div>
    `;
    productDetailsContainer.innerHTML = productDetailsHTML;
  } else {
    // Mostrar un mensaje si el producto no se encuentra
    const productDetailsContainer = document.getElementById('product-details');
    productDetailsContainer.innerHTML = '<p>Producto no encontrado</p>';
  }
</script>
    <!--Sección para mostrar imágenes y información del producto-->
    <!--Sección para mostrar las características del producto-->
    <div class="caracteristicas">
        <div class="texto">
            <h5>Caracteristicas</h5>
        </div>
        <hr>
        <div class="infos">
            <div class="info">
                <img src="../assets/img/info-producto.svg" alt=""><br>
                CAPACIDAD128 GB
                <div class="detalles"></div>
            </div>
            <div class="info">
            <img src="../assets/img/info-producto1.svg" alt=""><br>
                PANTALLA6.5" Pulgadas
            </div>
            <div class="info">
                <img src="../assets/img/info-producto2.svg" alt=""><br>
                CAMARA PRINCIPAL48 MP
            </div>
            <div class="info">
                <img src="../assets/img/info-producto4.svg" alt=""><br>
                RAM4 GB
            </div>
            <div class="info">
                <img src="../assets/img/info-producto5.svg" alt=""><br>
                 PROCESADOROcta-Core (2x2.2 GHz + 6x2.0 GHz)
                </div>
            <div class="info">
                <img src="../assets/img/info-producto6.svg" alt=""><br>
                TAMAÑO DE CAMARA48 + 2 + 2 MP
            </div>
        </div>
    </div>
    <!--Sección para mostrar las características del producto-->
    <br>
    <!--Sección para mostrar las características del de forma más detallada y con un menú de tipo "Acordeón" interactivo.-->
    <div class="acordeon-prod">
		<section class="acordeon-prod-section">
            <details>
               <summary>Sistema</summary>
               <p>
               Sistema Operativo Android v11 <br>
                Sistema Operativo Android v11 <br>
                Procesador Octa-Core (2×2.2 GHz + 6×2.0 GHz) – MediaTek Dimensity 700 <br>
                Memoria RAM 4 GB <br> 
                Capacidad Almacenamiento 128 GB <br>
                Almacenamiento Externo Micro SD hasta 512 GB <br>
              </p>
            </details>
            <hr>
            <details>
               <summary>Pantalla</summary>
               <p>
               Tipo IPS LCD – 90Hz <br>
                Tamaño de Pantalla 6.5 Pulgadas <br>
                Resolución 720 x 1600 Pixeles  <br>           
                </p>
            </details>
            <hr>
            <details>
               <summary>Cámara</summary>
               <p>
               Principal 48 + 2 + 2 MP <br>
                Frontal 13 MP <br>
                Grabación de Video Full HD    <br>            
                </p>
            </details>
            <hr>
            <details>
                <summary>General</summary>
                <p>
                Tamaño equipo 166.96 × 76.42 × 9.26 mm <br>
                Peso 206 g <br>
                Tipo SIM 1 Nano Simcard (4FF) + Micro SD   <br>           
                </p>
            </details>
            <hr>
            <details>
                <summary>Batería</summary>
                <p>
                Tipo Li-Ion 5000 mAh <br>
                Duración en Reposo Hasta 263 Horas <br>
                Duración en Conversación Hasta 33 Horas <br>
                </p>
            </details>
            <hr>
             <details>
                <summary>Conectividad y Red</summary>
                <p>
                Banda 2G 850/900/1800/1900 MHz <br>
                Banda 3G 850/900/1700-2100/1900/2100 MHz <br>
                Banda 4G Banda 1(2100), 2(1900), 4(AWS), 5(850), 7(2600), 8(900), 28(700), 66(AWS) (MHz) <br>
                Banda 5G Bandas n28 (700 MHz), n66 (AWS-3 1.7/2.1 GHz), n78 (3.5 GHz) <br>
                Wifi 802.11 a/b/g/n/ac (2.4GHz + 5GHz) <br>
                Bluetooth 5.0 <br>
                Hotspot / Tethering vía USB – WiFi <br>
                GPS Sí <br>
                Sincronización y Carga USB Tipo C <br>
                Voz 4G Soportado <br>
                Voz WiFi Soportado <br>                  </p>
             </details>
         </section>
	</div>
    <!--Sección para mostrar las características del de forma más detallada y con un menú de tipo "Acordeón" interactivo.-->    
</div>
<!--Contenido de la pagina-->
<!--Pie de pagina (Footer) de la pagina.-->
<footer class="footer">
    <div class="container p-1 pb-0">
    <!--Acordeon con informacion-->
    <div class="acordeon-prod">
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
</div>
</body>
</html>
