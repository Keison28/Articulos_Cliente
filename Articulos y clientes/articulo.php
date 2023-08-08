<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="articulo.css">
</head>
<body>

<form method="POST" action="Enviar_articulo.php" class="form-register">

       
<h2>LLenar el siguiente formulario sobre el articulo</h2>

<strong>
<p class="iulo"> Id del articulo:  </p><input class="controls" type="text" name="Id2" placeholder="Ingresar ID de articulo" required /> </label> </p>
<br>
<p class="iulo"> Nombre:</p> <input class="controls" type="text" name="Nombre2" placeholder="Ingresar nombre" required /> </label> </p>
<br>
<p class="iulo"> Descripcion:  </p><input class="controls" type="text" name="Descripcion1" placeholder="Ingresar la descripcion" required /> </label> </p>
<br>
<p class="iulo"> Marca:  </p><input class="controls" type="text" name="Marca1" placeholder="Ingresar la marca" required /> </label> </p>
<br>
<p class="iulo"> Cantidad:  </p><input class="controls" type="text" name="Cantidad1" placeholder="Ingresar la cantidad" required /> </label> </p>
<br>

</strong>
<input class="presionador" type="submit" value="Enviar formulario de articulo" name="Enviar_articulo">
</form>
<br>
<br>

<?
include ("Enviar_articulo.php")
?>


</form>

    
</body>
</html>