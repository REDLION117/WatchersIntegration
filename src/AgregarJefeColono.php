<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Jefe Colono</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="contenedor">
      <section class="encabezado">
        <div class="logo">
          <img class="img" src="img/logo.png" alt="">
        </div>
        <div class="info_usuario">
          <div class="user_name">
            <p>UserName</p>
          </div>
          <div class="user_id">
            <!-- <p>UserId</p> -->
          </div>
        </div>
        <div class="menu1">
          <nav>
              <li> <a href="#">Colonos</a></li>
              <!-- <li> <a href="#">Encargados</a></li> -->
              <li> <a href="#">Mas</a></li>
          </nav>
        </div>
      </section>
      <section class="padre"><!-- padre es un contenedor con flex -->
        <div class="hijo"><!-- hijo es una caja dentro de padre -->
          <h2 class="title">Agregar Jefe Colono</h2>
          <div class="form-flex">
            <form action="#" method="POST">
              <div class="form-box">
                <label for="nombre" class="form-label">Nombre </label>
                <input type="text" name="nombre" required class="form-input inp-llenado">
              </div>
              <div class="form-box">
                <label for="apellido" class="form-label">Apellido </label>
                <input type="text" name="apellido" required class="form-input inp-llenado">
              </div>
              <div class="form-box">
                <label for="correo" class="form-label">Correo </label>
                <input type="email" name="correo" required class="form-input inp-llenado">
              </div>
              <div class="form-box">
                <label for="pass" class="form-label">Contraseña </label>
              <input type="password" name="pass" required class="form-input inp-llenado">
              </div>
              <div class="form-box">
                <label for="cp" class="form-label">Código Postal </label>
              <input type="number" name="cp" required class="form-input inp-llenado">
              </div>
              <div class="form-box">
                <button type="submit" class="btn-verde btn-block">Agregar </button>
              </div>
          </form>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
