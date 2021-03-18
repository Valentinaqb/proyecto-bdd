<?php 
    session_start();
    $usuarios   = $_POST['nombreusuario'];
    $_SESSION['nombreusuario']=$usuarios;
    $contrasena = $_POST['contrasena'];
    include 'conexion.php';
    $consulta  = "Select*FROM usuarios where nombreusuario='$usuarios' AND contrasena='$contrasena'";
    $enviar= mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($enviar);
    if($filas>0){
        header('location:home.php');
    }
    else{
        include("index.html");
    }

?>