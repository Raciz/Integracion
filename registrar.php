<?php
   include 'db.php';
   include 'config.php';

   $nombre = filter_input(INPUT_POST,'nombre');
   $alias = filter_input(INPUT_POST,'alias');
   $correoElectronico = filter_input(INPUT_POST,'correoElectronico');
   $fechaDeNacimiento = filter_input(INPUT_POST,'fechaDeNacimiento');
   $contraseña =  filter_input(INPUT_POST,'contraseña');


   if($nombre === '' || $alias==='' || $correoElectronico==='' || $fechaDeNacimiento==='' || $contraseña==='' ){
     
    
    echo "<script>alert('hay campos vacios!')
                  location.href='registro.php';
         </script>";
          exit();      
   }

    $db = getPDO();   

    $stmt = $db->prepare('INSERT INTO alumnos(alias,nombre,correoElectronico,fechaDeNacimiento,contrasena)  
                          VALUES(:alias,:nombre,:correoElectronico,:fechaDeNacimiento,:contrasena)');        


    $stmt->bindParam(':alias',$alias);
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':correoElectronico',$correoElectronico);
    $stmt->bindParam(':fechaDeNacimiento',$fechaDeNacimiento);
    $stmt->bindParam(':contrasena',$contraseña);
    $stmt->execute();


    echo "<script>alert('Agregado!')
                  location.href='index.php';
         </script>";
          exit(); 
?>