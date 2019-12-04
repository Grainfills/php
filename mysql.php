<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "连接成功";
    try {
        // 设置 PDO 错误模式，用于抛出异常
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@gmail.com')";
        // 使用 exec() ，没有结果返回 
        $conn->exec($sql);
        echo "新记录插入成功";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE MyGuests (
        id  INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
        $conn->exec($sql);
        echo "数据表  创建成功";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}




$conn = null;

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // 设置 PDO 错误模式，用于抛出异常
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//     // 使用 sql 创建数据表
//     $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
//     )";
 
//     // 使用 exec() ，没有结果返回 
//     $conn->exec($sql);
//     echo "数据表 MyGuests 创建成功";
// }
// catch(PDOException $e)
// {
//     echo $sql . "<br>" . $e->getMessage();
// }
 
// $conn = null;




// try {
//     $conn = new PDO("mysql:host=$servername;", $username, $password);
//     echo "连接成功";
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
