<?php
session_start();
$_SESSION['email'];
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:llogin.php?msg=3");
}
?>
<h1>librarian registration</h1>
<form action="addlibcode.php" method="post">
email<input type="email" name="email"><br/>
password<input type="password" name="password"><br/>
<input type="submit">
</form>