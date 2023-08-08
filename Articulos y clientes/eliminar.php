<?php
    include("conecxion_bd.php");  

    $id = $_GET['id'];

    $consul = "DELETE from datos1 where ID ='$id'";
    $ejecute_consul = mysqli_query ($conex,$consul);
            
    header("location: mostrar_datos.php")
                


                
                

?> 