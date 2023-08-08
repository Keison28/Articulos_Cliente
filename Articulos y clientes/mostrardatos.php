<!DOCTYPE html>

<?php
include("conexion.php");
include("Formulario.php");

?>

<head>

<title>Mostrar datos</title>

<link rel="stylesheet" href="estilo_mostrar.css">

</head>

<body>

<div class="cont_formu">
    <form class="formu">

<p>Texto a buscar</p> <input class="buscador" id="searchTerm" type="text" onkeyup="doSearch()" />

</form>
</div>





<br>
    <table border="3" class="form-register styled-table" id="datos">
    <thead>    
    <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Telefono</td>
            
        </tr>
    </thead>

        <?php

        $Mostrar = "SELECT Id_cliente,Nombre,Apellido,telefono FROM clientes";
        
        $result = mysqli_query($conex,$Mostrar);

        while($Mostrar2 = mysqli_fetch_array($result)){

        ?>
        
        <tr>
            <td><?php echo $Mostrar2 ['Id_cliente'] ?></td>
            <td><?php echo $Mostrar2 ['Nombre'] ?></td>
            <td><?php echo $Mostrar2 ['Apellido'] ?></td>
            <td><?php echo $Mostrar2 ['telefono'] ?></td>
        </tr>
        <?php
        }
        ?>
        


    </table>

    <br>
    <br><div class="cont_formu">
    <form class="formu">

<p>Texto a buscar</p> <input class="buscador" id="searchTerm2" type="text" onkeyup="doSearch2()" />

</form></div>    <br>    <br>
    <table border="3" class="form-register styled-table2" id="datos2">
    <thead>    
    <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>marca</td>
            <td>cantidad</td>
            
        </tr>
    </thead>

        <?php

        $Mostrar0 = "SELECT Id_articulo,Nombre,Descripcion,marca,cantidad FROM articulo";
        $result = mysqli_query($conex,$Mostrar0);

        while($Mostrar3 = mysqli_fetch_array($result)){

        ?>
        
        <tr>
            <td><?php echo $Mostrar3 ['Id_articulo'] ?></td>
            <td><?php echo $Mostrar3 ['Nombre'] ?></td>
            <td><?php echo $Mostrar3 ['Descripcion'] ?></td>
            <td><?php echo $Mostrar3 ['marca'] ?></td>
            <td><?php echo $Mostrar3 ['cantidad'] ?></td>
                
        </tr>
        <?php
        }
        ?>
    </table>








    <center><a href="index.php">Pagina Principal</a></center>

<script src="Buscar.js"></script>
<script src="Buscar2.js"></script>

</body>

</html>












