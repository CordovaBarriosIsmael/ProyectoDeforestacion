<?php
include("bd.php");


if(isset($_POST['Register']))
if  (
    strlen($_POST['RegNombre']) >= 1 &&
    strlen($_POST['RegApellidoPaterno']) >= 1 &&
    strlen($_POST['RegApellidoMaterno']) >= 1 &&
    strlen($_POST['RegEmail']) >= 1 &&
    strlen($_POST['RegContraseña']) >= 1 &&
    strlen($_POST['TipoCuenta']) >= 1
    )
    {
        $R_Nombre=trim($_POST['RegNombre']);
        $R_Paterno=trim($_POST['RegApellidoPaterno']);
        $R_Materno=trim($_POST['RegApellidoMaterno']);
        $R_Gmail=trim($_POST['RegEmail']);
        $R_Password=trim($_POST['RegContraseña']);
        $R_TipoCuenta=trim($_POST['TipoCuenta']);
        $R_Consulta = " INSERT INTO `login`(`Id`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Correo`, `Password`, `TipoCuenta`) 
            VALUES (NULL,'$R_Nombre','$R_Paterno','$R_Materno','$R_Gmail','$R_Password','$R_TipoCuenta') ";
        $Resultado = mysqli_Query($conexion,$R_Consulta);
        if($Resultado){
            header("location:../Pages/cuenta.html");
        }
        else{
            header("location:Login.html");
            echo'<h3>
                    Ubs, ah ocurrido un error.
                    Porfavor verifique los datos.
                </h3>';

        }
    }

?>
