

<head>
<meta charset="UTF-8">
<title>Formulario de contacto</title>
<link rel='stylesheet' href={{ "css/estilos4.css" }} type='text/css' />

</head>
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

<!-- formulario de contacto en html y css -->
  <div id="fondo">
    <div class="contacto_formulario">
      <div class="formulario">
       <h2>Formulario de contacto</h2>
         <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
           <form method="post" action="{{url('contacto')}}">
               @csrf
                 <p>
                   <label for="nombre" class="colocar_nombre">Nombre</label>
                    <input type="text" name="introducir_nombre" id="nombre" placeholder="Escribe tu nombre">
                 </p>
                 <p>
                   <label for="email" class="colocar_email">Email</label>
                   <input type="email" name="introducir_email" id="email" placeholder="Escribe tu Email">
                 </p>
                 <p>
                   <label for="telefone" class="colocar_telefono">Teléfono </label>
                  <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                 </p>

                 <p>
                   <label for="asunto" class="colocar_asunto">Asunto </label>
                     <input type="text" name="introducir_asunto" id="assunto"  placeholder="Escribe un asunto">
                 </p>

                 <p>
                   <label for="mensaje" class="colocar_mensaje">Mensaje </label>
                   <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" placeholder="Deja aquí tu comentario..."></textarea>
                 </p>

                 <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
           </form>
         </div>
      </div>

        <footer>
          <h4> Creado por: Grupo 3 {Dani, Jesús & Pepe}</h4>
          <h4> <a href="https://copyright.es/"> Copyright © All rights reserved</a> </h4>

        <a href="https://www.instagram.com"> <img src={{ "imagenes/ig.jpg" }} alt="Instagram" >  </a>
        </footer>
</div>
  </body>

