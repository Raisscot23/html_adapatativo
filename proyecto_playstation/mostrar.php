<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Hisotrietas</title>
</head>
<body>
    <center>
        <tr>Indice de Hisotrietas</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre/th>
                    <th>Juego más conocido</th>
                    <th>Premios</th>
                </tr>
                <!---------------titulos-------------- -->
                <tbody>
                    <?php
                        include("open.php");
                        $consulta = "SELECT * FROM escritores";
                        $resultado = $conexion -> query($consulta);
                        while($row = $resultado -> fetch_assoc()){
                    ?>
                            <tr>
                                <td> <?php echo $row['id']?> </td>
                                <td> <?php echo $row['name']?> </td>
                                <td> <?php echo $row['games']?> </td>
                                <td> <?php echo $row['award']?> </td>
                                <td> <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMG']);?>"> </td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </thead>
        </table>
    </center>
</body>
</html>