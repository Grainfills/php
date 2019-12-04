<?php
$dsn = 'mysql:host=localhost;dbname=phptest';
$user = 'root';
$pwd = '123456';

try {
    $conn = new PDO($dsn, $user, $pwd);
    //---------------------建表--------------------------
    $sql_create_table = <<<EOT
      CREATE TABLE IF NOT EXISTS php_pic(
         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         pic_path  VARCHAR(120)   NOT NULL,
         pic_length  INT UNSIGNED  DEFAULT 0,
         pic_mime TINYINT UNSIGNED,
         pic_width SMALLINT UNSIGNED,
         pic_height SMALLINT UNSIGNED
       );
EOT;
    $len = $conn->exec($sql_create_table);
    echo $len; //0
} catch (Exception $e) {
    $e->getMessage();
}
