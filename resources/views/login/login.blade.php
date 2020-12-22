

<head>
    <meta charset="utf-8">
    <link rel='stylesheet' href={{ "css/estilos4.css" }} type='text/css' />
    <title> Iniciar Sesión </title>
  </head>
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

          </ul>
        </li>
      </ul>
    </div>

    <div id="buscador">
      <ul class="acorh">
        <li>

      <img src={{ "imagenes/lupa.png" }} alt="lupa"  width="40px" height="40px ">
          <ul>
            <li><input type="text" name="buscador" id="buscador" placeholder="Introduce lo que deseas buscar: "></li>
          </ul>
        </li>
      </ul>

    </div>
    <section class="barraMenu">
      <nav>
        <ul>
          <li><a href={{ url("/") }}>Inicio</a></li>
          <li><a href={{ url("/ofertas") }}>Ofertas</a></li>
          <li><a href={{ url("/contacto") }}>Contacto</a></li>
          <li><a href={{ url("/informacion") }}>Informacion</a></li>
        </ul>
      </nav>

      </section>
  </header>
  <body>
    <div id="fondo">
      <div class="contacto_formulario">
        <div class="formulario">
         <h2> Iniciar sesión </h2>
             <form method="post" action="{{url('/login')}}">
                @csrf
                   <p>
                     <label for="email" class="colocar_email">Email</label>
                     <input type="email" name="email" id="email" placeholder="Escribe tu Email">
                   </p>

                   <p>
                     <label for="contraseña" > Contraseña </label>
                      <input type="text" name="password" id="contraseña"  placeholder="Escribe tu contraseña">
                   </p>

                   <button type="submit" name="enviar_formulario" id="enviar"><p> Iniciar sesión</p></button>
             </form>
           </div>
        </div>

          <footer>
            <h4> Creado por: Grupo 3 {Dani, Jesús & Pepe}</h4>
          </footer>
  </body>