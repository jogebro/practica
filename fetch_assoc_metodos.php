<?php 

    //4. Listando registros o filas desde la tabla de base de datos desde php

    try {
        require_once("connect_pdo.php");
        $stm = $db -> prepare("SELECT * FROM clientes");
        //especificar el fecth mode antes de llegar a fetch
        $stm -> setFetchMode(PDO:: FETCH_ASSOC);
        $stm -> execute();
    } catch (Exception $e) {
        return $e -> getMessage();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped">
        <th>Nombres</th>
        <th>Direccion</th>
        <th>Compras</th>
        <?php while($row=$stm->fetch()) { ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['compras']; ?></td>
            </tr>
        <?php } ?>
    <table>
</body>
</html>