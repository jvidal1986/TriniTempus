
<head>

    <meta charset="utf-8">


    <link rel='stylesheet' href={{ "css/estilos4.css" }} type='text/css' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lobster&family=Sacramento&display=swap" rel="stylesheet"><!-- Fuente de google-->

    <title> TriniTempus</title>
  </head>

  <body>


    <header>
        <div id="logo">
            <img src={{ "imagenes/iconoTriniTempus.png"}} alt="login"  width="60px" height="60px ">
        </div>
      
        <div id="login">
          <ul class="acorh">
            <li>
      
          <img src={{ "imagenes/login.png" }} alt="login"  width="50px" height="50px">
              <ul>
                <li><a href={{ url("/login") }}> Inicio de sesión </a></li>
                <li><a href={{ url("/registro") }}> Regístrate </a></li>
                <li><a href={{ url("/logout") }}> Logout </a></li>
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
  <body>
    <div id="titulo">
      <h1> TriniTempus </h1>
      </div>
        <main>
            <div class="container">

          <ul class="slider">
            <li id="slide1">
              <img src={{ "imagenes/imagen1.png" }} alt="tiempoigualadinero" >

            </li>
            <li id="slide2">
              <img src={{ "imagenes/imagen2.png" }} alt="personasReloj">
            </li>
            <li id="slide3">
              <img src={{ "imagenes/imagen3.png" }} alt="dondeComprarTiempo">
            </li>
          </ul>

          <ul class="menu">
            <li>
              <a href="#slide1">1</a>
            </li>
            <li>
              <a href="#slide2">2</a>
            </li>
             <li>
              <a href="#slide3">3</a>
            </li>
          </ul>

        </div>
    </main>
    <footer>
      
      <h4> <a href="https://copyright.es/"> Copyright © All rights reserved</a> </h4>
        <a href="https://www.instagram.com"> <img id="instagram_imagen" src={{ "imagenes/ig.jpg" }} alt="Instagram" >  </a>
    </footer>
  </body>
</html>





