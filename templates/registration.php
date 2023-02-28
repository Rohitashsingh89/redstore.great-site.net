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
                        // When form submitted, insert values into the database.
                        if (isset($_REQUEST['uname'])) {
                            // removes backslashes
                            $uname = stripslashes($_REQUEST['uname']);
                            //escapes special characters in a string
                            $uname = mysqli_real_escape_string($con, $uname);
                            $email = stripslashes($_REQUEST['email']);
                            $email = mysqli_real_escape_string($con, $email);
                            $pass = stripslashes($_REQUEST['pass']);
                            $pass = mysqli_real_escape_string($con, $pass);
                            $create_datetime = date("Y-m-d H:i:s");
                            $query = "INSERT into `users` (uname, pass, email, create_datetime) VALUES ('$uname', '" . md5($pass) . "', '$email', '$create_datetime')";
                            $result= mysqli_query($con, $query);
                            if ($result == 1) {
                                echo "<div class='form'>
                                    <h3>You are registered successfully.</h3><br/>
                                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                                    </div>";
                            } else {
                                echo "<div class='form'>
                                    <h3>Required fields are missing.</h3><br/>
                                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                                    </div>";
                            }
                        } else {
                    ?>

                    <!-- </div> -->
                    <div class="container">
                        <form class="form" action="" method="post">
                            <h1 class="login-title">Registration</h1>
                            <input type="text" class="login-input" name="uname" placeholder="Name*" required />
                            <input type="text" class="login-input" name="email" placeholder="Email Address*">
                            <input type="password" class="login-input" name="pass" placeholder="Password*">
                            <input type="submit" name="submit" value="Register" class="login-button">
                            <p class="link"><a href="login.php">Click to Login</a></p>
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
                <img src="../Image/logo.png" alt="This is home image">
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
