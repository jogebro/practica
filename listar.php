<?php
//4. listando registros o filas desde la tabla de base de datos desde php

try {
    require_once("connect_pdo.php");
    $sql = "SELECT * FROM clientes ORDER BY nombre";

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <table class= "table table-striped">
        <th>Nombres</th>
        <th>Direccion</th>
        <th>Compras</th>
        <?php foreach($db->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row ['nombre'];?></td>
                <td><?php echo $row ['direccion'];?></td>
                <td><?php echo $row ['compras'];?></td>
            </tr>

        <?php } ?>
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>