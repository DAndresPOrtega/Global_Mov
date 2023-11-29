<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Mov | Inicio</title>
    <link rel="stylesheet" href="../assets/css/hr.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/tienda.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/nav_vertical.css">
    <link rel="stylesheet" href="../assets/css/galeria.css">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <style>

    #productos{
        max-width: 1200px;
        width: 100%;
        margin: 40px auto;
        display: flex;
    }
    @media screen and (max-width:500px){
        #productos{
            margin-top:700px
        }
    }
    .mostrador{
        width: 100%;
        transition: .5s ease;
    }
    .mostrador .fila{
        width: 100%;
        display: flex;
        justify-content:center;
        margin-bottom: 40px;
    }
            .gallery {
        display: flex;
        flex-wrap: wrap;
    }

    .item{
        max-width: 300px;
        padding: 30px;
        height: auto;
        /*border: 2px solid red;*/
        text-align: center;
        margin: 10px;
        cursor: pointer;
        border-radius: 5px;
        transition: .3s;
    }


    .item:hover{
        background-color: #e6e6e6;
    }
    .item img{
        width: 100%;
        margin: 30px 0;
    }
    .item .descripcion{
        color: #707070;
        font-weight: bold;
    }
    .item .precio{
        color: #f85151;
        font-weight: bold;
        font-size: 20px;
    }

    .seleccion{
    transition: .5s ease;
    opacity: 0;
    width: 0%;
    border: 1px solid #ccc;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    }
    .cerrar{
        position: absolute;
        right: 0;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }

    .info{
        padding: 20px;
    }
    .info img{
        display: block;
        margin: 30px auto;
        width: 80%;
    }
    .info h2{
        color: #707070;
        margin-bottom: 10px;
    }
    .info p{
        font-size: 14px;
        color: #707070;
        margin-bottom: 10px;
    }
    .info .precio{
        font-size: 30px;
        font-weight: bold;
        color: #f85151;
        margin-bottom: 10px;
        display: block;
    }
    .info .fila{
        display: flex;
        align-items: flex-end;
    }
    .info .fila label{
        display: block;
        margin-bottom: 10px;
    }
    .info .fila select{
        width: 100px;
        font-size: 18px;
        padding: 6px;
        margin-right: 30px;
    }
    .info .fila button{
        height: 40px;
        border: none;
        padding: 0 10px;
        color: #fff;
        background-color: #f85151;
    }

    .info .fila button:hover{
        background-color: white;
    }


    .pagination {
            margin-top: 20px;
    }

    /* Estilo para resaltar la página actual */
    .pagination button.active {
    background-color: rgb(44, 44, 114);
    color: white;
    }
</style>
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
    <!--Aca se mostraran unas "Migas de pan" que serviran al usuario para ver en que 
    seccion de la pagina se encuentra y como volver a una seccion anterior.-->
    <div class="migas_de_pan">
            <a href="tienda.php">Inicio </a>/<a href="producto.php">Tienda</a>
    </div>
    <div class="contenido_tienda">
    <!--Aca se mostraran unas "Migas de pan" que serviran al usuario para ver en que 
    seccion de la pagina se encuentra y como volver a una seccion anterior.-->
    <hr>
    <section id="productos">
        <input type="text" name="buscador" id="buscador" placeholder="Buscar...">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div id="gallery" class="gallery"></div>
            </div> 
        </div>
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo">NIKE MODEL 1</h2>
                <p id="descripcion">Descripción Modelo 1</p>

                <span class="precio" id="precio">$ 130</span>

                <div class="fila">
                    <div class="size">
                        <label for="">SIZE</label>
                        <select name="" id="">
                            <option value="">40</option>
                            <option value="">42</option>
                            <option value="">44</option>
                            <option value="">46</option>
                        </select>
                    </div>
                    <button>AGREGAR AL CARRITO</button>
                </div>
            </div>
            <script src="../assets/js/buscador.js"></script>
            <script src="../assets/js/galeria.js"></script>
        </div>
        <!-- Numero paginacion -->
        <div id="pagination" class="pagination">
        <!-- Numero paginacion -->

        <!-- Flecha "Anterior" t SIguiente -->
        <button id="prevBtn"><hr>Anterior</button>
        <button id="nextBtn"><hr>Siguiente</button>
        <!-- Flecha "Anterior" t SIguiente -->

        </div>



    </section>
    <!--Seccion de mostrar productos-->
    <!--Aca se muestra una barra de paginacion para navegar por los productos
            <section class="paginacion">
                <ul>
                    <li><button><img style="width: 10px; height:10px;" src="../assets/img/prev.svg" alt=""></button></li>
                    <li><button name="pagina" type="submit" value="1">1</button></li>
                    <li><button name="pagina" type="submit" value="2">2</button></li>
                    <li><button><img style="width: 10px; height:10px;" src="../assets/img/next.svg" alt=""></button></li>
                </ul>
            </section>
    Aca se muestra una barra de paginacion para navegar por los productos-->
<script src="../assets/js/producto.js"></script>

</div>
<!--Contenido de la pagina-->
<!--Pie de pagina (Footer) de la pagina.-->
<footer class="footer">
    <div class="container p-1 pb-0">
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
        <hr>
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
