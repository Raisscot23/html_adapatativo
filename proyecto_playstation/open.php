<?php

    $conexion = new mysqli("localhost","root","","playstation");

    if($conexion){
        echo "conexion exitosa"; 
    }else{
        echo "fallo en el sistema";
    }


?>