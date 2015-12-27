<?php
require_once 'config.php';
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME) or die("数据库挂啦！".mysqli_connect_error());
//mysqli_set_charset($con,'utf-8') or die(mysqli_connect_error());
?>