<?php
    $conn = new mysqli("localhost","root","","universidad");

    if($conn){
        echo "Conexión Exitosa!!";
    }

    else{
        echo "Hubo un ERROR";
    }

?>