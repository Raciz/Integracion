<?php

   session_start();
   $_SESSION['alias'] = $_GET['alias'];
   
  /* Si no hay una sesión creada, redireccionar al index. */
  if(empty($_SESSION['alias'])) { // Recuerda usar corchetes.
    header('Location: ../../login.php');
   } // Recuerda usar corchetes


   if(isset($_POST['regresar'])){
     header("Location: ../../perfil.php");  
   }

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>grillo</title>

        <link rel="stylesheet" href="../../css/style.css">

         <!-- Bootstrap core CSS -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template  BARRA DE NAVEGACION--> 
        <!-- Material Design Bootstrap -->
        <link href="../../bootstrap/css/mdb.min.css" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="../../css/style_registro.css">
    </head>

    <body style="background: green;">
        <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top"><h2>Grillo!!</h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>            
            </div>
          </nav>


        <center><canvas style="border: 1px solid #000000"></canvas></center>

    <form action="../../perfil.php?alias=<?=$_SESSION['alias']?>" method="POST">
    <div class="Input">
    <center>
    <center>
          <div class="p-3 mb-2 bg-success text-white animated pulse infinite"><h1>Une los puntos</h1></div>
    </center>
      <button style="width: 200px; height: 90px; font-size:25px;" type="submit" class="btn btn-red" name="regresar">Regresar</button>
    </center>


  </div>

  </form>


        <img src="img/grillo.png"; id="grillo" width="0" height="0">
        <script src="js/main.js"></script>
    </body>
</html>





