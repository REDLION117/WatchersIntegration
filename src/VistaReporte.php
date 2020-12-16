<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Ver reporte</title>
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
    <section class="padre">
      <!-- padre es un contenedor con flexbox -->
      <!-- hijo solo funciona dentro de padre -->
      <div class="hijo">
        <h2 class="title">Detalles del Reporte</h2>
        <div class="form-block">
          <form action="#" method="POST" class="form-block">
            <div class="form-box">
              <label for="id" class="form-label">id </label>
              <input type="text" name="id" value="123" readonly class="form-input">
            </div>
            <div class="form-box">
              <label for="fecha" class="form-label">Fecha </label>
              <input type="date" name="fecha" value="01/01/01" readonly class="form-input">
            </div>
            <div class="form-box">
              <label for="descripcion" class="form-label">Descripcion </label> <br>
              <textarea name="descripcion" id="" cols="50" rows="6" readonly class="form-text-area">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore et, molestias, dignissimos modi saepe incidunt suscipit quia aliquid soluta deserunt nemo dolorem laboriosam optio, veniam id libero sunt totam ullam?
                   </textarea> <br>
            </div>
            <div class="form-box">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" name="estado" value="Pendiente" readonly class="form-input">
            </div>
          </form>
        </div>
      </div>
      <div class="hijo">
        <h2 class="title">Reportado por</h2>
        <div class="form-block">
          <form action="#" method="POST">
            <div class="form-box">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" name="nombre" value="Leonardo" readonly class="form-input">
            </div>
            <div class="form-box">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" name="apellido" value="Orozco" readonly class="form-input">
            </div>
            <div class="form-box">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" name="correo" value="algo@brutal.com" readonly class="form-input">

            </div>
            <div class="form-box">
              <label for="calle" class="form-label">Calle</label>
              <input type="text" name="calle" value="sfsadfsadfsad" readonly class="form-input">

            </div>
            <div class="form-box">
              <label for="numero" class="form-label">Número</label>
              <input type="text" name="numero" value="#233" readonly class="form-input">
            </div>
          </form>
        </div>

      </div>
      <div class="hijo">
        <h2 class="title">Acciones</h2>
        <div class="form-block">
          <form action="#" method="POST">
            <div class="form-box">
              <label class="form-label">Agregar o corregir información</label><br>
              <button class="btn-naranja btn-block">Editar</button>
            </div>
            <!-- <div class="form-box">
              <label class="form-label">Eliminar reporte</label><br>
              <button class="btn-rojo btn-block">Eliminar</button><br><br>
            </div>
            <div class="form-box">
              <label class="form-label">Este problema se ha resuelto</label><br>
              <button class="btn-verde btn-block">Resuelto</button><br><br>
            </div> -->
          </form>
        </div>
      </div>
    </section>
  </div>
</body>
</html>