<?php
session_start();
error_reporting(0);
include("bd.php");

if(!$conexion){
    die("No Hay Conexion".mysqli_connect_error()); /*mensaje por si no hay conexion*/
}

$L_Correo = $_POST["LoginCorreo"];   /*validar dato del input placeholder="Login_Correo"*/
$L_Password = $_POST["LoginPass"];           /*validar dato del input placeholder="Login_Contraseña"*/

$_SESSION['LoginCorreo'] = $L_Correo;
/*BUSCAR EL Correo y Contraseña*/
$query = mysqli_query($conexion, "SELECT * FROM login where Correo = '".$L_Correo."' and Password = '".$L_Password."' ");
/*ALMACENAR EL NUMERO DE FILA que dio la busqueda que seria 1*/
$fila = mysqli_num_rows($query);

/*datos correctos*/
if($fila == 1){
    header("location:../Pages/cuenta.html");
}
/*datos incorrectos*/
else if($fila == 0){
    header("location:Login.html");
}
?>
