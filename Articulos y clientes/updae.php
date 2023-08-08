<!DOCTYPE html>
<?php
include("conecxion_bd.php");
$id = $_GET["id"];
?>

<head>

<title>Mostrar datos</title>

<link rel="stylesheet" href="updae.css">


</head>

<body>
<br>
    <form border="3" class="form-register" action="procesar_updae.php" method="POST">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            
        </tr>

        <?php

        $Mostrar = "SELECT * FROM datos1 WHERE ID = '$id' ";
        $result = mysqli_query($conex,$Mostrar);

        while($Mostrar2 = mysqli_fetch_array($result)){

        ?>
        
        <tr>
            
            <input type="hidden" class="table__item"  value="<?php echo $Mostrar2 ['ID'] ?>" name="idtt"><br>
            <input type="text" class="table__item"  value="<?php echo $Mostrar2 ['Nombre'] ?>" name="Nombre1"><br>
            <input type="text" class="table__item"  value="<?php echo $Mostrar2 ['Apellido'] ?>" name="Apellido1"><br>
            <input type="text" class="table__item"  value="<?php echo $Mostrar2 ['Edad'] ?>" name="Edad1"><br>
            <input type="submit" value="Actualizar" name="Actualizar">            
        </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <br>
</body>

</html>
