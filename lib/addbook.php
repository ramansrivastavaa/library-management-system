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
                            <li><a href="lprofile.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

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
                        <h3>Add Books</h3>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Enter Book Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
<form action="addcode.php" method="post" enctype="multipart/form-data" class="col-lg-6">
<table class="table">
<tr>
<td>book name</td><td><input type="text" name="bname" class="form-control"></td>
</tr><tr>
</tr><tr>
<td>author name</td><td><input type="text" name="aname" class="form-control"></td>
</tr><tr>
<td>purchase date</td><td><input type="date" name="pdate" class="form-control"></td>
</tr><tr>
<td>books price</td><td><input type="text" name="price" class="form-control"></td>
</tr><tr>
<td>quantity</td><td><input type="text" name="qty" class="form-control"></td>
</tr><tr>
<td>available quantity</td><td><input type="text" name="aqty" class="form-control"></td>
</tr>


<tr>
<td>upload pic</td><td><input type="file" name="file" class="form-control"></td>
</tr><tr>
<td><input type="submit" class="form-control"></td>

</tr></table>
</form>
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

