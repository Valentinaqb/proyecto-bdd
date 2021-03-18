<?php

    include('conexion.php');
    $tabla="libro";
    $query = "SELECT * FROM ".$tabla;
    $stmt = mysqli_query($con,$query);
    $resultado = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado[]=$fila;
    }
    $n=$stmt->num_rows;


    $tabla1="editorial";
    $query = "SELECT * FROM ".$tabla1;
    $stmt = mysqli_query($con,$query);
    $resultado1 = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado1[]=$fila;
    }
    $n1=$stmt->num_rows;


    $tabla2="categoria";
    $query = "SELECT * FROM ".$tabla2;
    $stmt = mysqli_query($con,$query);
    $resultado2 = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado2[]=$fila;
    }
    $n2=$stmt->num_rows;

    $tabla3="usuario";
    $query = "SELECT * FROM ".$tabla3;
    $stmt = mysqli_query($con,$query);
    $resultado3 = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado3[]=$fila;
    }
    $n3=$stmt->num_rows;

    $tabla4="copialibro";
    $query = "SELECT * FROM ".$tabla4;
    $stmt = mysqli_query($con,$query);
    $resultado4 = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado4[]=$fila;
    }
    $n4=$stmt->num_rows;

    $tabla5="prestamo";
    $query = "SELECT * FROM ".$tabla5;
    $stmt = mysqli_query($con,$query);
    $resultado5 = array();
    while ($fila=mysqli_fetch_array($stmt)){
        $resultado5[]=$fila;
    }
    $n5=$stmt->num_rows;
    
    


    mysqli_close($con);
    

?>