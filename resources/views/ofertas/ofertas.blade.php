<head>
    <meta charset="utf-8">
    <link rel='stylesheet' href={{ "css/estilos4.css"}} type='text/css' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lobster&family=Sacramento&display=swap" rel="stylesheet"><!-- Fuente de google-->

    <title> TriniTempus</title>
  </head>
    
  <body>
    <header>
      <div id="logo">
          <img src={{ "imagenes/iconoTriniTempus.png" }} alt="login"  width="60px" height="60px ">
      </div>

      <div id="login">
        <ul class="acorh">
          <li>
          <img src={{ "imagenes/login.png" }} alt="login"  width="50px" height="50px">
            <ul>
              <li><a href={{ url("/login") }}> Inicio de sesión </a></li>
             
              <li><a href={{ url("/registro") }}> Regístrate </a></li>
              <li><a href={{ url("/logout") }}> Inicio de sesión </a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div id="buscador">
        <ul class="acorh">
          <li>
          <img src={{ "imagenes/lupa.png" }} alt="login"  width="40px" height="40px ">
            <ul>
              <li><input type="text" name="buscador" id="buscador" placeholder="Introduce lo que deseas buscar: "></li>
            </ul>
          </li>
        </ul>
      </div>

      <section class="barraMenu">
        <nav>
          <ul>
            <li><a href={{url("/")}}>Inicio</a></li>
            <li><a href={{url("/ofertas")}}>Ofertas</a></li>
            <li><a href={{url("/contacto")}}>Contacto</a></li>
            <li><a href={{url("/informacion")}}>Informacion</a></li>
          </ul>
        </nav>
        </section>
    </header>
    <div id="titulo">
      <h1> TriniTempus </h1>
    </div>
    <div><!--imágenes-->
      <img src={{ "imagenes/servicios/matematicas.png" }} alt="Clases de matemáticas" id="imagenes">
      <img src={{ "imagenes/servicios/lengua.png" }} alt="Clases de lengua" id="imagenes">
      <img src={{ "imagenes/servicios/informatica.png" }} alt="Clases de informática"   id="imagenes">
      <img src={{ "imagenes/servicios/peluqueria.png" }} alt="Servicios de peluquería" id="imagenes">
      <img src={{ "imagenes/servicios/pintor.png" }} alt="Servicios de pintura" id="imagenes">
      <img src={{ "imagenes/servicios/taller.png" }} alt="Servicios de mecánica" id="imagenes">
      <img src={{ "imagenes/servicios/comida.png" }} alt="Servicio de comida a recoger"id="imagenes">
      <img src={{ "imagenes/servicios/comidaDomicilio.png" }} alt="Servicios de comida a domicilio" id="imagenes">
    </div> 
    
    <footer>
      <h4> Creado por: Grupo 3 {Dani, Jesús & Pepe}</h4>
      <h4> <a href="https://copyright.es/"> Copyright © All rights reserved</a> </h4>

        <a href="https://www.instagram.com"> <img src={{ "imagenes/ig.jpg" }} alt="Instagram" >  </a>
    </footer>
  </body>
