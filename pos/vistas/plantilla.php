<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AIKING </title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins.  -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <link rel="stylesheet" href="sweetalert2.min.css">
  <!--PLUGINS DE JAVASCRIPTS-->

    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <!--<script src="vistas/js/plantilla.js"></script>-->

</head>

<!--cuerpo documento-->
<body class="hold-transition sidebar-collapse skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
        // header
        include"modulos/cabezote.php";
        //menu
        include "modulos/menu.php";
        

        if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "inicio" ||
             $_GET["ruta"] == "coorfacu" ||
             $_GET["ruta"] == "coorcarrera" || 
             $_GET["ruta"] == "docente" || 
             $_GET["ruta"] == "estudiante"|| 
             $_GET["ruta"] == "proyecto" || 
             $_GET["ruta"] == "componente" || 
             $_GET["ruta"] == "empresa" ||
             $_GET["ruta"] == "repempresa" ||
             $_GET["ruta"] == "actividades"||
             $_GET["ruta"] == "ingresarCFac"){
              include "modulos/".$_GET["ruta"].".php";
          }else {
              include "modulos/404.php";
          }

        }else {

          include "modulos/inicio.php";
        }

        //footer"
        include "modulos/footer.php";
        //contenido
    ?>
</div>
<!-- ./wrapper -->

  <script src="vistas/js/plantilla.js"></script>
</body>
</html>
