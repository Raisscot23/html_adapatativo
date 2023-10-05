<?php

    $conexion = new mysqli("localhost","root","","hisotrietas_02");

    if($conexion){
        echo "conexion exitosa"; 
    }else{
        echo "fallo en el sistema";
    }


?>