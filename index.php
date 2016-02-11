<?php 
    session_start();
    session_unset();
    session_destroy();
  
  if (isset($_POST['alumnos'])) {
    header("Location: login.php");
  }
  if (isset($_POST['maestros'])) {
    header("Location: info_maestros.html");
  }
  if (isset($_POST['registro'])) {
    header("Location: registro.php");
  }

 ?>



<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio nuevo</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template  BARRA DE NAVEGACION-->
    

    <!-- Material Design Bootstrap -->
    <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    
    <link rel="stylesheet" type="text/css" href="css/style_inicio.css">
   
      <!--  Script Validacion  -->



  </head>

  <body class="Fondo">
    <!-- Navigation -->
    
<style type="text/css">
  .Fondo
  {
    background-image: url('imagenes/math.png');
    /*background: green;*/
  }
</style>

<center>
  <div class="p-3 mb-2 bg-success text-white"><h1>Software educativo para alumnos de 1° y 2° grado de primaria</h1></div>
</center>
    <!-- Page Content -->
    <div class="container rgba-white-light rounded col-lg-5 justify-content-center">
        <br />
        
      <!-- Login -->
            <form action="#" method="POST">
              <center>
              <div class="row justify-content-center">
                <div class="col-md-6">
                      
                      <button type="submit" name="maestros" class="btn btn-primary animated pulse infinite">Maestros, clic aquí</button>
                </div>
              </div>
              <div class="row justify-content-center">
                <button type="submit" name="alumnos" class="btn btn-warning animated pulse infinite">Alumnos, clic aquí</button>
              </div>
               <div class="row justify-content-center">
                <button type="submit" name="registro" class="btn btn-red animated pulse infinite">Registrarse, clic aquí</button>
               </div>

              <br/>
               <div class="contenedor">
      <p>Bienvenidos</p>
      <dl>
        <dt>Maestros</dt>
        <dt>Alumnos</dt>
      </dl>
    </div>
              
           </form>     
            <script type="text/javascript">
        function grupos()
        {
          //Obtener los datos de los campos
          alert();
          <?php echo "string"; ?>
        }
      </script>
      <!-- Login -->

      <!--    -->
    
    </div>
    <!-- /.container -->
    <br>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

