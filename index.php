<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="logcode.php" method="post">
            <h1>Admin Login Form</h1>

            <div>
                <input type="text" name="email" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                  <a href="student/slogin.php" class="btn btn-default submit" style="height:35px;font-family:Bahnschrift;">Student login</a>
  <a href="lib/llogin.php" class="btn btn-default" style="height:35px;margin-top:-9px;font-family:Bahnschrift;">Librarian login</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>

<div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white">Invalid</strong> Username Or Password.
</div>


</body>
</html>