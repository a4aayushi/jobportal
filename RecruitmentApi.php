<?php
include 'dbconfig.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$bday=$_POST['bday'];
$blood=$_POST['blood'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$schoolper=$_POST['schoolper'];
$schoolname=$_POST['schoolname'];
$schoolpass=$_POST['schoolpass'];
$highper=$_POST['highper'];
$highschoolname=$_POST['highschoolname'];
$highschoolpass=$_POST['highschoolpass'];
$course=$_POST['course'];
$collegeper=$_POST['collegeper'];
$college=$_POST['college'];
$yearpass=$_POST['yearpass'];
$masterpass="abcd";
$masterper=$_POST['masterper'];
$col1=$_POST['col1'];
$colyr=$_POST['colyr'];
$comp=$_POST['comp'];
$desig=$_POST['desig'];
$y3=$_POST['y3'];
$ctc=$_POST['ctc'];
$exp=$_POST['exp'];
$query="INSERT INTO `emptohire`(`fname`, `lname`, `gender`, `bday`) VALUES ('Aniun','Mukhre','Male','2018-09-08')";	
$sql="INSERT INTO `empDb` (`id`, `fname`, `lname`, `gender`, `bday`, `blood`, `address`, `mobile`, `email`, `schoolper`, `schoolname`, `schoolpass`, `highper`, `highschoolname`, `highschoolpass`, `course`, `collegeper`, `college`, `yearpass`, `masterpass`, `masterper`, `col1`, `colyr`, `comp`, `desig`, `y3`, `ctc`, `exp`) VALUES
('', '$fname', '$lname', '$gender', '$bday', '$blood', '$address', '$mobile', '$email', '$schoolper', '$schoolname', '$schoolpass', '$highper', '$highschoolname', '$highschoolpass', '$course', '$collegeper', '$college', '$yearpass', '$masterpass', '$masterper', '$col1', '$colyr', '$comp', '$desig', '$y3', '$ctc', '$exp')";
mysql_query($sql);
echo "Succesful";
header('location:Recruitment.php?msg=1');
?>