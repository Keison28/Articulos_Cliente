<?php
include("conexion.php");
   if (isset($_POST['Enviar'])){ 


        $Nombre1 = trim($_POST['Nombre1']);
        $Apellido1 = trim($_POST['Apellido1']);
        $telefono1 = trim($_POST['telefono1']);
        $Id1 = trim($_POST['Id1']);

        $Enviar = "INSERT INTO `clientes`(Nombre, Apellido, telefono, Id_cliente) VALUES ('$Nombre1','$Apellido1','$telefono1','$Id1')";
        $Resultado = mysqli_query($conex,$Enviar);

        }
  
?>