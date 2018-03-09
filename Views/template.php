<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory System - Pos Venta</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Views/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 
      //include() Si no se encuentra dicho código, saltará un error tipo “Warning” y el programa seguirá ejecutándose (aunque como consecuencia de no incluirse el código puede que no funcione correctamente, o sí, depende de la situación).
      // HEAD OF THE VIEW
      include "modules/head.php";
      // MENU OF THE VIEW
      include "modules/menu.php";
      // CONTENT OF THE VIEW
      // Si viene una variable get llamada ruta 
      if (isset($_GET["ruta"])) {
        // y esa variabe get ruta tiene una ruta entonces que me abra la ruta
        if($_GET["ruta"] == "inicio" || 
           $_GET["ruta"] == "usuarios" || 
           $_GET["ruta"] == "categorias" ||
           $_GET["ruta"] == "productos" ||
           $_GET["ruta"] == "clientes" ||
           $_GET["ruta"] == "ventas" ||
           $_GET["ruta"] == "crear-ventas" ||
           $_GET["ruta"] == "reportes"){
                include "modules/".$_GET["ruta"].".php";
        }else{
          include "modules/404.php";
        }
      }else{
        include "modules/inicio.php";
      }
    
      // FOOTER OF THE VIEW
      include "modules/footer.php";
  ?>

</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="Views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="Views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="Views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Views/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="Views/dist/js/demo.js"></script> -->
<script src="Views/js/template.js"></script>
</body>
</html>
