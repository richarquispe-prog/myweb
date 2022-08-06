<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $celular  = $_POST['celular'];
 $cuenta = $_POST['cuenta'];

$insertar = "INSERT INTO user VALUES ('$nombre','$celular','$cuenta') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.php';
    </script>";
}






?>