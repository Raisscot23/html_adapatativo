<?php
    /*Conexión a la base de datos*/
    $conn = new mysqli("localhost","root","","universidad")

    /*Proceso de encriptación */
    if(isset($_POST['registro'])){
        if(!empty(trim($_POST['password_usu']))) && !empty(trim($_POST['usuario_usu'])){
            $password_usu = $_POST['password_usu'];
            $usuario_usu = $_POST['usuario_usu'];
            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);
            $conn->query("INSERT INTO usuario (usuario_usu, passwrord_usu) VALUES('$usuario_usu','$enc_password_usu')")
            
        }
    }



?>