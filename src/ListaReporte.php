<?php
$array = array(
        "reporte1" => array(
                      "fecha" => "01-01-01",
                      "tipo" => "agua",
                      "descripcion" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum commodi architecto accusantium fuga impedit fugit assumenda velit hic maiores quam temporibus asperiores iste quas sed, illum laudantium beatae ratione dolore!",
                      "estado" => true
        ),
        "reporte2" => array(
                      "fecha" => "02-02-02",
                      "tipo" => "luz",
                      "descripcion" => "descripcion2",
                      "estado" => false
        ),
        "reporte3" => array(
                      "fecha" => "03-03-03",
                      "tipo" => "general",
                      "descripcion" => "descripcion3",
                      "estado" => true
        ),
        "reporte4" => array(
                      "fecha" => "04-04-04",
                      "tipo" => "general",
                      "descripcion" => "descripcion4",
                      "estado" => false
                      )
);
?>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Lista Reportes</title>
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
          <!--  <p>User</p> -->
        </div>
      </div>
      <div class="menu1">
        <nav>
          <li> <a href="#">Colonos</a></li>
          <!--    <li> <a href="#">Encargados</a></li> -->
          <li> <a href="#">Mas</a></li>
        </nav>
      </div>
    </section>
    <section class="cuerpo">
      <table>
        <tr class="principal">
          <!-- <th class="rep">Reporte ID</th> -->
          <th class="fec">Fecha</th>
          <th class="tip">Tipo</th>
          <th class="des">Descripción</th>
          <th class="est">Estado</th>
        </tr>
        <?php foreach ($array as $reporte) : ?>
          <tr class="sobrante">
            <!-- <td>Prueba 1</td> -->
            <td><?= $reporte["fecha"] ?></td>
            <td><?= $reporte["tipo"] ?></td>
            <td class="des"><?= $reporte["descripcion"] ?></td>
            <td><?= $reporte["estado"] ?></td>
            <td><form action="VistaReporte.php" method="GET">
                  <input type="hidden" value="<?php $reporte["tipo"]?>">
                  <button class="btn btn-verde">VER</button>
                </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </section>
  </div>
</body>

</html>