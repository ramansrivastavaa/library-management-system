<?php
include("../connect.php");
session_start();
if(isset($_GET["id"]))
{
$_SESSION['lemail'];
$id=$_GET["id"];
$query="delete from tbl_book where bookid=$id";
mysql_query($query);
?>
<script type="text/javascript">
window.location="showbook.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
window.location="showbook.php";
</script>
<?php	
}
?>