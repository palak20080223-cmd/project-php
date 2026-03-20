<?php
$user=$_POST['userid'];
$pass=$_POST['password'];
include "db.php";
$sql="select * from admin where userid='$user' and password='$pass'";
?>