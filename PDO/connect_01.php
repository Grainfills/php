<?php 
$dsn = 'mysql:host=localhost;dbname=phptest';
$user = 'root';
$pwd = '123456';
$conn = new PDO($dsn,$user,$pwd);

var_dump($conn)

?>
