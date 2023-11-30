<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Mov | Noticias</title>
    <!--Archivos css propios-->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/ayuda.css">
    <link rel="stylesheet" href="../assets/css/menu_ayuda_tabs.css">
    <link rel="stylesheet" href="../assets/css/nav_vertical.css">
    <!--Archivos css propios-->

    <!--Bootstrap archivos css-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!--Bootstrap archivos css-->

    <!--Archivos js propios-->
    <!--Archivos js propios-->
    
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
<!--Fondo de la pagina-->
<div class="fondo">
    <!--Titulo de la pagina con un "titulo" y  un texto explicativo de la seccion"-->
    <div class="titulo">
        <h3>Ayuda:</h3>
        <p>Podemos resolver tus dudas a traves de esta seccion.</p>
        <a href="index.php">Inicio</a> / <a href="noticias.php">Noticias</a>
    </div>
    <!--Titulo de la pagina con un "titulo" y  un texto explicativo de la seccion"-->
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
        <!--Menu vertical-->
        <!--Menu con informacion de los contactos de la emrpesa, nuestros clientes, ayudas generales y en el ambito legal-->
        <div class="menu_tabs">
            <div class="content-container">
                <nav class="menu">
                    <span style="position:static;" data-title="contacto">Contactos</span>
                    <span style="position:static;" data-title="ayuda">Ayuda</span>
                    <span style="position:static;" data-title="legal">Legal</span>
                    <div class="slider"></div>
                </nav>
                <hr>
                <div class="content">
                    <p data-content=""><strong class="text_menu_info">Menu informativo</strong></p>
                    <p class="texto" data-content="contacto"><strong>Contactos: </strong> <br>                
                        Escribenos por whatsapp:  <br>
                        +56 9 12345678 <br><br>
                        Llamanos: <br>
                        600 085 0400
                    </p>
                    <p class="texto" data-content="ayuda"><strong>Ayuda: </strong> <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam magnam sit et, perspiciatis ipsa nemo consequatur minima praesentium nisi aliquam.</p>
                    <p class="texto" data-content="legal"><strong>Legal: </strong> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sequi tempora sunt ex neque quidem numquam eaque aliquam consequuntur non!</p>
                </div>
            </div>
        </div>
        <script src="../assets/js/app.js"></script>
        <!--Menu con informacion de los contactos de la emrpesa, nuestros clientes, ayudas generales y en el ambito legal-->
        <!--Informacion de Nuestra direccion, nuestro correo y numero de telefono-->
        <div class="cont_info_form">
        <div class="info">
            <div class="cont">
                <h3>Cuentanos en que te podemos ayudar</h3>
                <p>Queremos ofrecerte una experiencia única.</p><br>
                <div class="direccion">
                    <h5>Dirección</h5>
                    <p><img src="../assets/img/adress.svg" alt=""><br>Av. Libertador Bernardo O´Higgins 1302 Oficina 70 Santiago,<br> Región Metropolitana Chile</p>
                </div>
                <div class="correo">
                    <h5>Escribenos</h5>
                    <p><img src="../assets/img/correo.svg" alt="">Correo: gmov@gmail.cl</p>
                </div>
                <div class="llamar">
                    <h5>LLamanos</h5>
                    <p><img src="../assets/img/phone.svg" alt="">Telefono: 600 085 0400</p>
                </div>
            </div>
        </div>
        <!--Informacion de Nuestra direccion, nuestro correo y numero de telefono-->
        <!--Formulario para que el usuario envie sus datos-->
        <div class="formulario">
            <form action="">
                <h5>Envianos estos datos y te contactaremos:</h5>
                <input type="text" name="" id="" placeholder="Nombre">
                <input type="text" name="" id="" placeholder="Telefono"><br>
                <input type="text" name="" id="" placeholder="Correo">
                <select type="text" name="" id="" placeholder="Departamento">br
                    <option value="">Departamento</option>
                </select>
                <br>
                <label for="">5+5:</label>
                <input class="number" type="number">
                <button>Enviar</button>
            </form>
        </div>
        <!--Formulario para que el usuario envie sus datos-->
        </div>
    </div>
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
    <!--Seccion "Ayuda" con informacion sobre contactos y informacion general de la empresa-->
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
<!--Pie de pagina (Footer) de la pagina-->

</div>
</body>
</html>
