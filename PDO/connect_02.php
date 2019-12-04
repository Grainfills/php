<?php
$path = __DIR__ . '/config.txt';
$dsn = 'uri:file://' . $path . ''; //数据源
echo $path;
echo "<br />";
$user = 'root';
$pwd = '123456';
$conn = new PDO($dsn, $user, $pwd);

var_dump($conn);//object(PDO)#1 (0) { }
