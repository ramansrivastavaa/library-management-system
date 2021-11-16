<?php
 include("../connect.php");
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query="insert into tbl_lib(email,password) values('$email','$password')";
 mysql_query($query);
 header("location:addlib.php");
?>