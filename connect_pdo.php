<?php 

//1. dsn -> DATABASES SOURCE NAME
$dsn = 'mysql:host=localhost;dbname=empresa';

//UserName
$username = "campus";

//Password
$password = "campus2023";

//2. Conectarse a base de datos , motor mysql usando POO

$db = new PDO($dsn , $username , $password);



?>