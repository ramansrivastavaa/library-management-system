<?php
session_start();
$lemail=$_SESSION['lemail'];
include("../connect.php");
  $bname=$_POST['bname'];
 $aname=$_POST['aname'];
  $pdate=$_POST['pdate'];
 $price=$_POST['price'];
 $qty=$_POST['qty'];
 $aqty=$_POST['aqty'];
 $filename=$_FILES['file']['name'];
 $type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
 $tmp_name=$_FILES['file']['tmp_name'];
 $location="bookpic/";
 $query="insert into tbl_book (bname,aname,pdate,price,qty,aqty,photo,libname,date) value('$bname','$aname','$pdate','$price','$qty','$aqty','$filename','$lemail',now())";
 
 
 
  mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("location:addbook.php");
?>