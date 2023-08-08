<!DOCTYPE html>
<?php
include("conecxion_bd.php");
?>

<head>

<title>Mostrar datos</title>
<script src='https://kit.fontawesome.com/a076d05399.js'> </script>
<link rel="stylesheet" href="Diseno_Daos.css">


</head>

<body>
<br>
    <table border="3" class="form-register">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            
        </tr>

        <?php

        $Mostrar = "SELECT * FROM datos1";
        $result = mysqli_query($conex,$Mostrar);

        while($Mostrar2 = mysqli_fetch_array($result)){

        ?>
        
        <tr>
            <td><?php echo $Mostrar2 ['ID'] ?></td>
            <td><?php echo $Mostrar2 ['Nombre'] ?></td>
            <td><?php echo $Mostrar2 ['Apellido'] ?></td>
            <td><?php echo $Mostrar2 ['Edad'] ?></td>
            <td><a method= "GET" href="updae.php?id= <?php echo $Mostrar2 ['ID'] ?> class="table__link" ><i class='fas fa-edit'></i></td> |
            <td><a  method= "GET" href="eliminar.php?id= <?php echo $Mostrar2 ['ID'] ?> class="table__link"><i class='far fa-trash-alt'></i></a></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <br>
    <center><a href="http://localhost/trabajos%20PHP/tarea1/">Pagina Principal</a></center>
</body>

</html>
