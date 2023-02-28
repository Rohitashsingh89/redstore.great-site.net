<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Website</title>
    <link rel="stylesheet" href="../static/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

                <!-- <img class="image2"style="margin: 40px" src="/Image/product-2.jpg" alt=""> -->
                
                <div class="formcontainer">
                    <div class="form-btn">
                        <a href="account.php"><span onclick="login()" style="background-color: black"> login </span></a>
                        <a href="register.php"><span onclick="signup()"> signup </span></a>
                        <!-- <hr id="indicator"> -->
                        <br>
                        <hr>
                    </div>
                    <div class="loginbox">
                    <form action="action.php" id="loginForm" class="loginbox" method="POST">
                        <label for="email">
                            <p class="mt1">Email </p> <p><input type="email" name="email" id="email"  class="chead" placeholder="enter your email"> </p>
                        </label>
                        <label for="password">
                            <p class="mt1">Password </p> <p><input type="pass" name="pass" id="pass" class="chead"  placeholder="enter your password"> </p>
                        </label>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn mt2 btn1">
                        <p class="forgot pt1"><a href="#" class="forgot">forgot password?</a></p>
                    </form>
                    </div>                    
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
                <img src="../Image/logo.png" alt="This is logo image">
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