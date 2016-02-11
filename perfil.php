<?php

session_start();
/* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['alias'])){ // Recuerda usar corchetes.
      header('Location: login.php');
  } // Recuerda usar corchetes


  /*if(isset($_POST['Estrella'])){
    header('Location: juegos/Estrella/index.php');
  }
  if(isset($_POST['Grillo'])){
      header('Location: juegos/grillo/index.php');
  }
  if (isset($_POST['ejercicio1'])) {
    header('Location: juegos/E1/ejercicio1.html');
  }
  if (isset($_POST['ejercicio2'])) {
    header('Location: juegos/E1/ejercicio2.html');
  }
  if (isset($_POST['ejercicio3'])) {
    header('Location: juegos/E1/ejercicio3.html');
  }
  if (isset($_POST['ejercicio4'])) {
    header('Location: juegos/E1/ejercicio4.html');
  }*/

  ?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>perfil</title>

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
<style type="text/css">
  .Fondo
  {
    /*background-image: url('imagenes/Escolar-login.jpg');*/
    background-image: url('imagenes/circulos.gif');
    /*background: green;*/
  }
</style>

    <!-- Page Content -->
    <div class="Wrapper">
   
    <div class="p-3 mb-5 bg-success text-white" style="text-align: right;">
     <h1 style="font-family: 'Kirang Haerang', cursive;"> <span>Bienvenido <b><?=$_SESSION['alias']?></b></span>
      <span style="color: black;"> | <a href="index.php">Cerrar Sesión</a></span>
</h1>
   </div>

<form action="juegos/Estrella/index.php?alias=<?=$_SESSION['alias']?>" method="POST">
 
    <div class="Input">
    <center>
          <div class="p-3 mb-2 bg-warning text-black animated pulse infinite"><h1>Une los puntos!!!</h1></div>
      <button style="width: 200px; height: 90px; font-size:25px;" type="submit" class="btn btn-red animated pulse infinite" name="Estrella">Estrella!</button>
    <br>
   </center>


  </div>

  </form>

<form action="juegos/grillo/index.php?alias=<?=$_SESSION['alias']?>" method="POST">
 
 <div class="Input">
 <center>
   <button style="width: 200px; height: 80px; font-size: 30px;" type="submit" class="btn btn-blue animated pulse infinite" name="Grillo">Grillo!</button>
 </center>


</div>

</form>


 <br><br>
<form action="juegos/E1/ejercicio1.html" method="POST">
 
 <div class="Input">
 <center>
  <div class="p-3 mb-2 bg-warning text-black animated pulse infinite"><h1>Juega con los números!!!</h1>
  </div>
   <button style="width: 200px; height: 80px; font-size: 20px;" type="submit" class="btn btn-red animated pulse infinite" name="ejercicio1">Ordenalos!</button>
 </center>

</div>

 </form>

<form action="juegos/E2/ejercicio2.html" method="POST">
 
 <div class="Input">
 <center>
   <button style="width: 200px; height: 80px; font-size: 25px;" type="submit" class="btn btn-blue animated pulse infinite" name="ejercicio2">Suma y resta!</button>
 </center>

 </div>

 </form>


 <form action="juegos/E3/ejercicio3.html" method="POST">
 
 <div class="Input">
 <center>
   <button style="width: 200px; height: 80px; font-size: 20px;" type="submit" class="btn btn-cyan animated pulse infinite" name="ejercicio3">Sigue ordenando!</button>
 </center>

 </div>

 </form>




</div>
    <!-- /.container -->
    <br>

  <div class="Wrapper">
 <form action="juegos/Gusano/index.html" method="POST">
 
 <div class="Input">
  <center>
    <div class="p-3 mb-2 bg-warning text-black animated pulse infinite"><h1>Completa la serie!!!</h1>
    </div>
    <button style="width: 200px; height: 80px; font-size: 20px;" type="submit" class="btn btn-red animated pulse infinite">Caracol marino!</button>
  </center>

  </div>

 </form>


  <form action="juegos/Hongo/index.html" method="POST">
 
 <div class="Input">
  <center>   
    <button style="width: 200px; height: 80px; font-size: 20px;" type="submit" class="btn btn-blue animated pulse infinite">Hongo!</button>
  </center>

  </div>

 </form>



 
  </div>


  </body>

</html>
