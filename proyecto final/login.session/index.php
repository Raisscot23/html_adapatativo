<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php_css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="imgs\logo.png">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="iniciarsesion.php" method="post">
        <div>
            <a href="https://indexgeneralhtml5.000webhostapp.com/proyecto%20final/index.html">Regresar a inicio</a>
        </div> <br>
        <h1>Inicio Sesion</h1>
        <hr>
        <?php
            if(isset($_GET['error'])){
        ?>
        <p id="error">
           <?php
            echo $_GET['error']
           ?> 
        </p>
        <?php
            }
        ?> 
        <br>
        <hr>

        <i class="fa-solid fa-user"></i>
            <label for="">Usuario</label>
            <input type="text" name="usuario" placeholder="Nombre del ususario">
        
        <i class="fa-solid fa-user"></i>
            <label for="">Clave</label>
            <input type="text" name="clave" placeholder="Clave">

            <button type="submit">Iniciar sesión</button>
            <a href="crearcuenta.php">Crear cuenta</a>
    </form>

</body>
</html>