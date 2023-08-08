<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" class="form-register">

       
<h2>LLenar el siguiente formulario</h2>

<strong>
<p class="iulo"> Id:  </p><input class="controls" type="text" name="Id1" placeholder="Ingresar un ID" required /> </label> </p>
<br>
<p class="iulo"> Nombre:  </p><input class="controls" type="text" name="Nombre1" placeholder="Ingresar su nonbre" required /> </label> </p>
<br>
<p class="iulo"> Apellido:</p> <input class="controls" type="text" name="Apellido1" placeholder="Ingresar su apellido" required /> </label> </p>
<br>
<p class="iulo"> Telefono:  </p><input class="controls" type="text" name="telefono1" placeholder="Ingresar su Telefono" required /> </label> </p>
<br>


</strong>
<input class="presionador" type="submit" value="Enviar formulario" name="Enviar">

<a href="articulo.php" style="color: red;">Insertar Articulos</a>
<br>
<br>
<a href="mostrardatos.php" style="color: red;">Ver datos</a>








</form>
<?php
include ("Formulario.php");
    ?>
    
</body>
</html>