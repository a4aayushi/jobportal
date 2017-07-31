<?php
include 'dbconfig.php';

$name=$_POST['name'];
$blood_group=$_POST['blood_group'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="insert into employee (id,name,blood_group,email,password) values ('','$name','$blood_group','$email','$password')";
mysql_query($query);

echo "Succesful";

?>