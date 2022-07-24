<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$fname = $_POST['fname'];
$fname= ucwords(strtolower($fname));
$gender = $_POST['gender'];
$school = $_POST['school'];
$percentage=$_POST['percentage'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$fname = stripslashes($fname);
$fname = addslashes($fname);
$gender = stripslashes($gender);
$gender = addslashes($gender);
$school = stripslashes($school);
$school = addslashes($school);
$percentage = stripslashes($percentage);
$percentage = addslashes($percentage);
$email = stripslashes($email);
$email = addslashes($email);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q5=mysqli_query($con, "INSERT INTO user VALUES  ('$ID','$name' ,'$fname', '$gender','$school','$percentage','$email' ,'$mob', '$password')");
if($q5)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:index_pay.php?q=1");
}
else
{
header("location:index.php?q8=Email Already Registered!!!");
}
ob_end_flush();
?>