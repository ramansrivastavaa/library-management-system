<?php
//echo "logcode page";
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connect.php");
$query="select * from tbl_student where email='$email' and password='$password' and status='yes'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['semail']=$email;
	header("location:sprofile.php");
	
}
else
{	
	
	header("location:slogin.php?msg=1");
}	

?>