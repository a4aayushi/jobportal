<?php
// this is index.php and opens by defauly you need not mention index.ph in url


include 'dbconfig.php';
$id=$_GET['id'];
// $_GET catches the query string parameters
$query="select * from girls where id=$id";

$res=mysql_query($query);
$row=mysql_fetch_assoc($res);
echo json_encode($row);
?>