<?php
include 'dbconfig.php';
$name=$_POST['name'];
$email=$_POST['email'];
$blood_group=$_POST['blood_group'];
$password=$_POST['password'];


$query="select * from employee";
$res=mysql_query($query);

while ($row=mysql_fetch_assoc($res)) {
	
	echo $row['name'].$row['email'].$row['blood_group'].$row['password']."<br>";
}

?>