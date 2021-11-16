
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
                        <h3>Plain Page</h3>
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
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
								
								<?php
include("../connect.php");

?>

				<form action="" method="post" name="form1" class="col-lg-6">
<table class="table">
<tr>
<td>

<select name="enr" class="form-control">
<?php
$query="select enr from tbl_student";
$res=mysql_query($query);
?>


<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<option>
	<?php
	echo $row['enr'];
	?>
	</option>
	<?php
}
?>
	
</select>

</td>
<td><input type="submit" name="submit1" value="search" class="btn btn-submit"></td>




</tr>
</table>

<?php
if(isset($_POST['submit1']))
{
	//echo "hello";
	$res3=mysql_query("select * from tbl_student where enr='$_POST[enr]'");
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		$name=$row3['name'];
		 $enr=$row3['enr'];
		$sem=$row3['sem'];
		$email=$row3['email'];
		$mobile=$row3['mobile'];
		$branch=$row3['branch'];
	}
	?>
	<table>
	<tr>
	<td>Enrollment No.</td>
	<td><input type="text" name="enr" class="form-control" value="<?php echo $enr; ?>" ></td>
	</tr>
	<tr>
	<td>Student Name</td>
	<td><input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required></td>
	</tr>
	<tr>
	<td>Branch</td>
	<td><input type="text" name="branch" class="form-control" value="<?php echo $branch; ?>" required></td>
	</tr>
	<tr>
	<td>Semester</td>
	<td><input type="text" name="sem" value="<?php echo $sem; ?>"class="form-control" required></td>
	</tr>
	<tr>
	<td>Mobile</td>
	<td><input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" required></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required></td>
	</tr>
	<tr>
	<td>Book Name</td>
	<td>
	<select name="bname" class="form-control">
	<?php
	$query1="select bname from tbl_book";
	$res1=mysql_query($query1);
	while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	{
		echo "<option>";
		echo $row1['bname'];
		echo "</option>";
	}
	?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Issue Date</td>
	<td><input type="text" name="issue_date" class="form-control" value="<?php echo date('d/m/Y'); ?>" ></td>
	</tr>
	
	<tr>
	<td><input type="submit" name="submit2" value="issue book" class="btn btn-submit"></td>
	</tr>
	
	</table>
		
	<?php
}
if(isset($_POST["submit2"]))
{
	$res4=mysql_query("select * from tbl_book where bname='$_POST[bname]'");
	while($row4=mysql_fetch_array($res4,MYSQL_BOTH))
	{
		$aqty=$row4['aqty'];
	}
	if($aqty==0)
	{
		echo "this book is not available";
	}
	else
	{
	$query4="insert into issue_books(name,branch,sem,enr,email,bname,issue_date,mobile,date) values('$_POST[name]','$_POST[branch]','$_POST[sem]','$_POST[enr]','$_POST[email]','$_POST[bname]',curdate(),'$_POST[mobile]',now())";
	mysql_query($query4);
	$query5="update tbl_book set aqty=aqty-1 where bname='$_POST[bname]'";
	mysql_query($query5);
	}
}
	?>

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
