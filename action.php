<?php
session_start();
header("Content-type:application/json;charset=utf-8");
$username = $_REQUEST['username'];
if ($username == "admin") {
    echo json_encode(array('msg' => '登陆成功', 'username' => $username, 'code' => '200'));
} else {
    echo "没有该用户";
}
