<?php

?>
<h1>new student registration</h1>
<form action="sregcode.php" method="post" enctype="multipart/form-data">
name:<input type="text" name="name">
<br/>fathers name:<input type="text" name="fname"><br/>
gender:<input type="radio" name="a" value="male">male
<input type="radio" name="a" value="female">female<br/>	
dob:<input type="date" name="dob"><br/>
email:<input type="email" name="email"><br/>
contact<input type="number" name="mobile"><br/>
branch<input type="text" name="branch"><br/>
<br/>semester:<input type="number" name="sem"><br/>
address:<textarea name="address"></textarea><br/>
enrollment no.:<input type="text" name="enr"><br/>
password:<input type="password" name="password"><br/>
confirm password:<input type="password"><br/>
upload pic:<input type="file" name="file">
<input type="submit">
</form>