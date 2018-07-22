<?php 
    $arr = array('username' => "zhangsan", "password"=>"132456");
    $cb = $_GET['cb'];
    $uname = $_GET['username'];
    $pw = $_GET['password'];

    echo $cb.'({"username":"'.$arr["username"].'","password":"'.$arr["password"].'"})'; // hellow({"username":"zhangsan","password":"123"})
 ?>
