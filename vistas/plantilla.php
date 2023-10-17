<?php

  session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>SISTEMA DE INVENTARIO</title>

  <link rel="icon" href="vistas/img/plantilla/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
</head>

<!--INICIO MAQUETADO DEL SISTEMA-->

<body class="hold-transition sidebar-collapse sidebar-mini login-page">

<!-- Inicio wrapper -->
  <?php

    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

      echo '<div class="wrapper">';

        /*Header o cabecera de página */
        include "modulos/header.php";

        /*Menu Lateral o Sidebar */
        include "modulos/menuLateral.php";

        /*Contenido */

        if(isset($_GET["ruta"])){

          if($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "ventas" ||
            $_GET["ruta"] == "crearVenta" ||
            $_GET["ruta"] == "reporteVentas" ||
            $_GET["ruta"] == "salir"){

            include "modulos/".$_GET["ruta"].".php";
          }else{
            include "modulos/404.php";
          }
        }else{
          include "modulos/inicio.php";
        }
        

        /*Footer o pie de página*/
        include "modulos/footer.php";

      echo '</div>';
    }else{
      include "modulos/login.php";
    }
  ?>
<!-- Fin wrapper -->

<!--PLUGINS DE JAVASCRIPT-->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>

<!--Archivo personal JavaScript-->
<script src="vistas/js/plantilla.js"></script>


</body>
</html>
