<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Website</title>
    <link rel="stylesheet" href="../static/loginsystem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .popup {
            padding: 10px;
            background-color: green;
            text-align: center
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="row">
                <div class="logo">
                    <a href="/"><img src="../Image/logo.png" alt="This is a logo image" class="logo"></a>
                </div>
                <div class="navbar">
                    <nav>
                        <ul>
                            <div class="box1" id="">
                                <li><a href="/">Home</a></li>
                                <li><a href="product.php">Products</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="login.php">account</a></li>
                            </div>
                            <li><a href="cart.php"><img src="../Image/cart.png" alt="This is card image" class="cart"></a></li>
                            <div class="container">
                                <img src="../Image/menu.png" alt="This is menu image" class="menu" onclick="menutoggle()">
                            </div>
                        </ul>
                    </nav>
                </div>    
            </div>
            
            <div class="box">
                <ul id="menuItems">
                    <li><a href="/">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">account</a></li>
                </ul>
            </div>
     
            <div class="contactrow">

                <div class="row">
                    <?php
                        require('db.php');
                        session_start();
                        // When form submitted, check and create user session.
                        if (isset($_POST['uname'])) {
                            $uname = stripslashes($_REQUEST['uname']);    // removes backslashes
                            $uname = mysqli_real_escape_string($con, $uname);
                            $pass = stripslashes($_REQUEST['pass']);
                            $pass = mysqli_real_escape_string($con, $pass);
                            // Check user is exist in the database
                            $query = "SELECT * FROM `users` WHERE uname='$uname' AND pass='" . md5($pass) . "'";
                            $result = mysqli_query($con, $query) or die(mysql_error());
                            $rows = mysqli_num_rows($result);
                            if ($rows == 1) {
                                $_SESSION['uname'] = $uname;
                                // Redirect to user dashboard page
                                header("Location: dashboard.php");
                            } else {
                                echo "<div class='form'>
                                    <h3>Incorrect uname/pass.</h3><br/>
                                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                                    </div>";
                            }
                        } else {
                    ?>

                
                    <div class="loginbox">
                        <form action="" class="form" method="post" name="login">
                            <h1 class="login-title">Login</h1>
                            <input type="text" class="login-input" name="uname" placeholder="Username*" autofocus="true"/>
                            <input type="password" class="login-input" name="pass" placeholder="Password*"/>
                            <input type="submit" value="Login" name="submit" class="login-button"/>
                            <p class="link"><a href="registration.php">New Registration</a></p>
                        </form>
                    </div>
                    
                    <?php
                        }
                    ?>
                
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------footer-------------------- -->
    <div class="container">
        <div class="footer ">
            <div class="col-4">
                <h1>REDSTORE</h1>
                <P>Thank you for choosing and supporting us!</P>
            </div>
            <div class="col-4">
                <h1>Explore More</h1>
                <p>Watches</p>
                <p>T-Shirt</p>
                <p>Lower</p>
                <p>Shoes</p>
            </div>
            <div class="col-4">
                <!-- <h1>logo</h1> -->
                <img src="I../Image/logo.png" alt="This is logo image">
                <p>Our Purpose is to Sustainably Make the Pleasure <br> and Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="col-4">
                <h1>Follow Us</h1>
                <p><a href="https://www.github.com/rohitashsingh89/"><span class="fa fa-github" target="_blank"></span></a></p>
                <p><a href="https://www.linkedin.com/in/rohitash-singh-12a879213/" target="_blank"><span class="fa fa-linkedin"></span> </a></p>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2023</p>
        </div>
    </div>



    
    <!-- JavaScript for menu icon -->
    <script src="/static/script.js"></script>
    
</body>
</html>