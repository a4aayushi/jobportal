<?php

include 'dbconfig.php';

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


/*
$username="kiyu";
$email="kittu@gmail.com";
$password="post@1234";
*/

$query="insert into girls (id,username,email,password) values ('','$username','$email','$password')";
mysql_query($query);
echo "Successfully printed";
?>