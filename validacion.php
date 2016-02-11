<?php
 include 'db.php';
 include 'config.php';

function validar($alias,$contrasena){
    
  $db = getPDO();

  $stmt = $db->prepare('SELECT *FROM alumnos WHERE  alias =:alias'); 
  $stmt->bindParam('alias',$alias);
  $stmt->execute();
  $r = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if ($r) {   
    if ($r['contrasena'] === $contrasena) {
        session_start();
        $_SESSION['alias'] = (int)$r['alias'];
        $_SESSION['nombre'] = $r['nombre'];
        $_SESSION['cooreoElectronico'] = $r['cooreoElectronico'];
        $_SESSION['fechaDeNacimiento'] = $r['fechaDeNacimiento'];
        $_SESSION['contrasena'] = $r['contrasena'];
        header('Location: perfil.php');
        exit();   
        return true;
    }
 }else{
     return false;
 }
 
}