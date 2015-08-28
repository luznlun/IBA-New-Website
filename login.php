<?php
include('connection.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.ico">

    <title>SJSU - International Business Association</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/more.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      
		
</head>

<body>


    <div class="container" style="padding-top: 15px;">
            <div class="col-md-offset-5 col-md-3">
                <form class="form-login" method="post">
                    <h4>Admin Login</h4>
                    <input type="text" id="userName" name="username" type="text" class="form-control input-sm chat-input" placeholder="username" />
                    </br>
                    <input type="text" id="userPassword" name="password" typex="password" class="form-control input-sm chat-input" placeholder="password" />
                    </br>
                    <div class="wrapper">
                    <span class="group-btn">
                        <input class="btn btn-primary btn-md" name="submit" type="submit" value=" Login ">     
                    </span>
                    </div>
                </form>
            
            </div>
    </div>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</body>

</html>
