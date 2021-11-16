<?php
include("connect.php");
 $name=$_POST['name'];
$fname=$_POST['fname'];
 $gender=$_POST['a'];
 $sem=$_POST['sem'];
 $mobile=$_POST['mobile'];
 $enr=$_POST['enr']; $dob=$_POST['dob'];
 $address=$_POST['address'];
 $filename=$_FILES['file']['name'];
 $type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
 $tmp_name=$_FILES['file']['tmp_name'];
 $location="stpic/";
 $branch=$_POST['branch'];
 $email=$_POST['email'];
 $password=$_POST['password'];
$query="insert into tbl_student(name,fname,gender,sem,mobile,dob,address,photo,branch,email,password,enr,date,status) values('$name','$fname','$gender','$sem','$mobile','$dob','$address','$filename','$branch','$email','$password','$enr',now(),'no') ";
 mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("location:register.php");

?>
