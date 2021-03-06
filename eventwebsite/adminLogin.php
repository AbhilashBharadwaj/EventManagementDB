<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Title goes here</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- container -->
        <div class="container">
            <!-- navbar header -->
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.html">
                        <img class="logo-img" src="./img/logo.png" alt="logo">
                        <img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                <!-- /Mobile toggle -->
            </div>
            <!-- /navbar header -->

            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="index.html#home">Home</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

    <!-- /ADMIN LOGIN -->
    <div class="loginbox">
        <img src="avatar.png" class="avatar">
        <h2 style="color:#dd0a37">ADMIN LOGIN</h2>
        <form action="adminlobby.html">
            <p>USERNAME</p>
            <input type="text" name="username" placeholder="username">
            <p>PASSWORD</p>
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit" value="LOGIN" class="button">
            
            
        </form>

        <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "select * from admin WHERE username = '$username' AND password = '$password'";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                $_SESSION['username']= $username;
                echo '<script type="text/javascript"> alert("LOGGED IN") </script>';
                header('location:eventScreen.html');
            }
            else
            {
                echo '<script type="text/javascript"> alert("LOGIN FAILED") </script>';
            }
    }
    ?>

    </div>


   

    <div class="section">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    

    

    

                

          

    
</body>

</html>
