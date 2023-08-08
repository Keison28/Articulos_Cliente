<?php

include("conexion.php");

        
        if (isset($_POST['Enviar_articulo'])){

            $Id2 = trim($_POST['Id2']);
            $Nombre2 = trim($_POST['Nombre2']);
            $Descripcion1 = trim($_POST['Descripcion1']);
            $Marca1 = trim($_POST['Marca1']);
            $Cantidad1 = trim($_POST['Cantidad1']);
    
    
            $Enviar = "INSERT INTO articulo (Id_articulo, Nombre, Descripcion, marca, cantidad) VALUES ('$Id2','$Nombre2','$Descripcion1','$Marca1','$Cantidad1')";
            $Resultado = mysqli_query($conex,$Enviar);

                
            }
    header("articulo.php");

?>