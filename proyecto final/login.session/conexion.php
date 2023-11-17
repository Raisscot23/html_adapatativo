<?php

    $host   =   "localhost";
    $user   =   "id20330137_211375";
    $pass   =   "Micaelo11#";
    $db     =   "id20330137_playstation";
 
    $conexion = mysqli_connect($host, $user, $pass, $db);
 
    if(!$conexion){
        echo "fallo la conexion";
    }

?>