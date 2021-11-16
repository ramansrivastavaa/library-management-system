<?php
session_start();
$_SESSION['lemail'];
if($_SESSION['lemail']=="")
{
	session_destroy();
	header("location:llogin.php?msg=3");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plain Page | LMS </title>


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

                        <h2><?php echo $_SESSION['lemail']; ?></h2>
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
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="stdlist.php"><i class="fa fa-edit"></i> Student List <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="addbook.php"><i class="fa fa-desktop"></i> Add Books <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="showbook.php"><i class="fa fa-table"></i> Show Books <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="issuebook.php"><i class="fa fa-bar-chart-o"></i> Issue Books <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
							
							 <li><a href="returnbook.php"><i class="fa fa-bar-chart-o"></i> Return Books <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
							
							 <li><a href="books_with_detail.php"><i class="fa fa-bar-chart-o"></i>  Books With Detail <span
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
                                <img src="images/img.jpg" alt=""><?php echo $_SESSION['lemail']; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
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
                        <h3>Books Details..</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Books With Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
        
<?php
include("../connect.php");
$res=mysql_query("select * from tbl_book");
echo "<table border='1' class='table'>";
	echo "<tr>";
		echo "<th>";
	echo "BOOK PHOTO";
	echo "</th>";
	echo "<th>";
	echo "BOOK NAME";
	echo "</th>";
	echo "<th>";
	echo "TOTAL BOOKS";
	echo "</th>";
	echo "<th>";
	echo "AVAILABLE BOOKS";
	echo "</th>";
	echo "<th>";
	echo "CLICK TO CHECK WHO HAD TAKEN THIS BOOK";
	echo "</th>";
	
	echo "</tr>";
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	
	echo "<tr>";
	
	echo "<tH>";
	?>
<img src="../lib/bookpic/<?php echo $row['photo']; ?>" height="100" width="100"> 	
	<?php
	echo "</tH>";
	echo "<tH>";
	echo $row['bname'];
	echo "</tH>";
	echo "<tH>";
	echo $row['qty'];
	echo "</tH>";
	echo "<tH>";
	echo $row['aqty'];
	echo "</tH>";

	echo "<tH><a href='sdetailswithbook.php?bname=$row[bname]'>student detail with this book</a></tH>";
	
	echo "</tr>";
	
}
echo "</table>";
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




