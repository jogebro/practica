<?php

try {
    require_once("connect_pdo.php");
} catch (Exception $e) {
    $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONECTANDO A BASE DE DATOS MYSQL</h1>
    <?php
    if ($db){
        echo "<h2>Coenxion a base de datos satisfactoriamente";
    }else{
        echo "<p> ña </p>";
    }
    ?>
</body>
</html>