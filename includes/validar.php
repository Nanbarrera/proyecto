<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 && strlen($_POST['rol']) >= 1 ){

    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);
    $rol = trim($_POST['rol']);
    $ver = trim($_POST['ver']);
    $guardar = trim($_POST['guardar']);

    $consulta= "INSERT INTO user (nombre, correo, telefono, password, rol) VALUES ('$nombre', '$correo','$telefono','$password', '$rol' )";

    $consulta2 = "INSERT INTO permisos (ver, guardar) VALUES ('$ver', '$guardar')";

    mysqli_query($conexion, $consulta,);
    mysqli_query($conexion, $consulta2,);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }
}









?>