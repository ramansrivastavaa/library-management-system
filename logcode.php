<?php
//echo "logcode page";
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connect.php");
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['email']=$email;
	header("location:profile.php");
	
}
else
{	
	
	header("location:index.php?msg=1");
}	

?>