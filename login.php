<?php 
 
  include 'config.php';
  include 'db.php';

  session_start();
  session_unset();
  session_destroy();

  if (isset($_POST['continuar'])) { //validación del button continuar
    $alias = $_POST['alias'];
    $db = getPDO();
    $stmt = $db->prepare('SELECT *FROM alumnos WHERE  alias =:alias'); 
    $stmt->bindParam('alias',$alias);
    $stmt->execute();
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($r){ //validación de la consulta sql   
      if($r['contrasena'] === $_POST['contraseña']){ // validación de contraseña
          session_start();
          $_SESSION['alias'] = $r['alias'];
          $_SESSION['nombre'] = $r['nombre'];
          $_SESSION['coreoElectronico'] = $r['coreoElectronico'];
          $_SESSION['fechaDeNacimiento'] = $r['fechaDeNacimiento'];
          $_SESSION['contrasena'] = $r['contrasena'];
          echo "<script>alert('Bienvenido!')</script>";
          header('Location: perfil.php');
          exit(); 
      }else{
        if($_POST['contraseña'] ===''){
          echo "<script> alert('No ingresaste contraseña!') </script>";
        }else{
          echo "<script> alert('La contraseña es incorrecta') </script>";
        }
      }
    }else{
      if($alias===''){
        echo "<script> alert('No ingresaste el alias') </script>";
      }else{
      echo "<script> alert('Alias no registrado!') </script>";
      }
  }
}

if (isset($_POST['principal'])) {
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

    <!-- Navigation -->
    
<style type="text/css">
  .Fondo
  {
    background-image: url('imagenes/triangulo.gif');
    /*background: green;*/
  }
</style>

    <!-- Page Content -->
    <div class="Wrapper">
  <h1 class="Title" style="font-size: 40px;">Inicio de sesión!</h1>
  
<form action="" method="POST">
 
   <div class="Input">
    <input type="text" id="alias" name="alias" class="Input-text" placeholder="Teclea tu Alias!">
    <label for="input" class="Input-label">Alias</label>
  </div>
  
  <br>
   <div class="Input">
    <input type="password" id="contraseña" name="contraseña"class="Input-text" placeholder="Teclea tu contraseña!">
    <label for="input" class="Input-label">Teclea tu contraseña!</label>
  </div>
  <br>
    <center>
    <div class="Input">
    
      <button style="width: 200px; height: 80px; font-size: 30px;" type="submit" class="btn btn-blue animated pulse infinite" name="continuar">Continuar!</button>
    <br>
    
    <span> | <a href="index.php">Página Principal!</a></span>

  </div>
   </center>
  </form>
</div>
    <!-- /.container -->
    <br>
</body>

</html>

