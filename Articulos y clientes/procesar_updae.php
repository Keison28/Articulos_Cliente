<?php
include("conecxion_bd.php");  


if (isset($_POST['Actualizar'])){
        $id = ($_POST['idtt']);
        $Nombre1 = ($_POST['Nombre1']);
        $Apellido1 = ($_POST['Apellido1']);
        $Edad1 = ($_POST['Edad1']);
        $updae = "UPDATE `datos1` SET Nombre = '$Nombre1', Apellido = '$Apellido1', Edad = '$Edad1' WHERE ID = $id";
        $resultado = mysqli_query($conex, $updae);
        if ($resultado){
                ?>
                <?php
                echo "<script> window.location='mostrar_datos.php'</script>";
                ?> 
                
                <?php
                }else{
                ?> 
                <?php
                echo "<script>alert(' ha ocurrido un error');</script>";
        
                


                
                
        }
}
?> 