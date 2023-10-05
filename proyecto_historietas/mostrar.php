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
                    <th>Editorial</th>
                    <th>Personaje</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>País</th>
                    <th>Imagen</th>
                </tr>
                <!---------------titulos-------------- -->
                <tbody>
                    <?php
                        include("open.php");
                        $consulta = "SELECT * FROM historietas";
                        $resultado = $conexion -> query($consulta);
                        while($row = $resultado -> fetch_assoc()){
                    ?>
                            <tr>
                                <td> <?php echo $row['id']?> </td>
                                <td> <?php echo $row['edit']?> </td>
                                <td> <?php echo $row['personaje']?> </td>
                                <td> <?php echo $row['genero']?> </td>
                                <td> <?php echo $row['autor']?> </td>
                                <td> <?php echo $row['año']?> </td>
                                <td> <?php echo $row['pais']?> </td>
                                <td> <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']);?>"> </td>
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