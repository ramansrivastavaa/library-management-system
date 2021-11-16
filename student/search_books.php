<?php
session_start();
include("../connect.php");



$email=$_SESSION['semail'];
?>
<?php


$s=$_SESSION['semail'];

$tot=0;
$res=mysql_query("select * from messages where rname='$s' && read1='n'");
$tot=mysql_num_rows($res);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sprofile| LMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2><?php echo $s=$_SESSION['semail']; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="sprofile.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a  href="my_issued_books.php"><i class="fa fa-edit"></i> My Issued Books <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="search_books.php"><i class="fa fa-desktop"></i> Search Books <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
                           

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt=""><?php echo $s=$_SESSION['semail']; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="msg.php" class="dropdown-toggle info-number" 
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green"><?php echo $tot; ?></span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Student Panal</h3>
                    </div>

                   
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Search Books </h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                             <form action="" method="post">
<table >
<tr>
<td><input type="text" name="t1" placeholder="enter book name" required class="form-control"></td>
<td><input type="submit" name="submit1" value="search book" class="btn btn-primary"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["submit1"]))
{
	$res=mysql_query("select * from tbl_book where bname like('$_POST[t1]%')");
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo "<table  class='table table-hover'>";
	?>
	<tr>
	<th>Books Image</th>
	<th>Book Name</th>
	<th>Available Quantity</th>
	</tr>
	<?php
	echo "<tr>";
	
	echo "<td>";
	?>
<img src="../lib/bookpic/<?php echo $row['photo']; ?>" height="100" width="100"> 	
	<?php
	echo "</td>";
	echo "<td>";
	echo $row['bname'];
	echo "</td>";
	echo "<td>";
	echo $row['aqty'];
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
}
else
{

$res=mysql_query("select * from tbl_book");
	?>
<table class="table table-hover">
	<tr>
	<th>Books Image</th>
	<th>Book Name</th>
	<th>Available Quantity</th>
	</tr>
	<?php	
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	

	echo "<tr>";
	
	echo "<th>";
	?>
<img src="../lib/bookpic/<?php echo $row['photo']; ?>" height="100" width="100"> 	
	<?php
	echo "</th>";
	echo "<th>";
	echo $row['bname'];
	echo "</th>";
	echo "<th>";
	echo $row['aqty'];
	echo "</th>";
	echo "</tr>";
	
}
echo "</table>";
}
?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Library Management System
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>



