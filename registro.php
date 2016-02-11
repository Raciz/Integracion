<?php 
  
  if (isset($_POST['regresar'])) {
    header('Location: index.php');
  }

 ?>



<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro nuevo</title>

    
    <!-- Your custom styles (optional) -->

        <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template  BARRA DE NAVEGACION-->
    

    <!-- Material Design Bootstrap -->
    <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/style_registro.css">
   
      <!--  Script Validacion  -->



  </head>

  <body class="Fondo">
<?php 

//include 'conexion.php';

?>
    <!-- Navigation -->
    
<style type="text/css">
  .Fondo
  {
    background-image: url('imagenes/cubo.gif');
    /*background: green;*/
  }
</style>

    <!-- Page Content -->
    <div class="Wrapper">
  <h1 class="Title">Formulario de registro!</h1>
  
<form action="registrar.php" method="POST">
  <div class="Input">
    <input type="text" id="nombre" name="nombre" class="Input-text" placeholder="Teclea tu nombre completo!">
    <label for="input" class="Input-label">Nombre completo</label>
  </div>
    <br>
   <div class="Input">
    <input type="text" id="alias" name="alias" class="Input-text" placeholder="Teclea tu Alias!">
    <label for="input" class="Input-label">Alias</label>
  </div>
 
  <br>
   <div class="Input">
    <input type="date" id="fechaDeNacimiento" name="fechaDeNacimiento"  class="Input-text" placeholder="Introduce tu fecha de nacimiento!" required="">
    <label for="input" class="Input-label">Fecha de nacimiento</label>
  </div>
  <br>
   <div class="Input">
    <input type="email" id="correoElectronico" name="correoElectronico" class="Input-text" placeholder="Teclea tu correo electrónico!" required>
    <label for="input" class="Input-label">Correo electrónico</label>
  </div>
  <br>
   <div class="Input">
    <input type="password" id="contraseña" name="contraseña" class="Input-text" placeholder="Teclea tu contraseña!">
    <label for="input" class="Input-label">Teclea tu contraseña!</label>
  </div>
  <br>

    <div class="Input">
    <center>
      
    <button style="width: 200px; height: 80px; font-size: 30px;" type="submit" class="btn btn-blue animated pulse infinite" name="continuar">Continuar!</button>
    </center>
  </div>
  </form>
<form action="" method="POST">
 <center>
    <button style="width: 120px; height: 48px; font-size: 15px;" type="submit" class="btn btn-red animated pulse infinite" name="regresar">Regresar!</button>
 </center>   
</form>

</div>
    <!-- /.container -->
    <br>


  </body>

</html>

