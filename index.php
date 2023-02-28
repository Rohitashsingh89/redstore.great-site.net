<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Website</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="row">
                <div class="logo">
                    <a href="/"><img src="Image/logo.png" alt="This is a logo image" class="logo"></a>
                </div>
                <div class="navbar">
                    <nav>
                        <ul>
                            <div class="box1" id="">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="templates/product.php">Products</a></li>
                                <li><a href="templates/about.php">About</a></li>
                                <li><a href="templates/contact.php">Contact Us</a></li>
                                <li><a href="templates/login.php">account</a></li>
                            </div>
                            <li><a href="templates/cart.php"><img src="Image/cart.png" alt="This is card image" class="cart"></a></li>
                            <div class="container">
                                <img src="Image/menu.png" alt="This is menu image" class="menu" onclick="menutoggle()">
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <div class="box">
                <ul id="menuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="templates/product.php">Products</a></li>
                    <li><a href="templates/about.php">About</a></li>
                    <li><a href="templates/contact.php">Contact Us</a></li>
                    <li><a href="templates/account.php">account</a></li>
                </ul>
            </div>
            <div class="row col-1"> 
                <div class="card">
                    <h1 class="pd-b">Give your Workout <br> A New Style!</h1>
                    <p class="pd-b">When you adore quality in something then you feel like a king.
                    <br>
                    Let's feel like a king by purchasing quality products form Red Store. </p>
                    <button class="btn" ><a href="templates/product.php">Explore now &rarr;</a></button>
                </div>

                <div class="card p-y">
                    <img src="Image/image1.png" alt="This is atheletes image" class="image">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="category">
                <div class="col-2">
                    <img src="Image/category-1.jpg" alt="" class="image1">
                </div>
                <div class="col-2">
                    <img src="Image/category-2.jpg" alt="" class="image1">
                </div>
                <div class="col-2">
                    <img src="Image/category-3.jpg" alt="" class="image1">
                </div>
            </div>
        </div>
    </div>

    <!----------------------feature products-------------------->

    <div class="container">
        <div class="row">
            <h1 class="heading title">Featured products</h1>
            <div class="category">
                <div class="col-2">
                    <a href="templates/show.php" ><img src="Image/product-1.jpg" alt="" class="image1"></a>
                    <p>Red printed T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-2.jpg" alt="" class="image1">
                    <p>Black printed Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-3.jpg" alt="" class="image1">
                    <p>Black printed Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-4.jpg" alt="" class="image1">
                    <p>Black printed T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>60$</p>
                </div>
            </div>
            
            
            <div class="category">
                <div class="col-2">
                    <img src="Image/product-5.jpg" alt="" class="image1">
                    <p>white printed Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-6.jpg" alt="" class="image1">
                    <p>Black printed T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-7.jpg" alt="" class="image1">
                    <p>Black & white Socks</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="Image/product-8.jpg" alt="" class="image1">
                    <p>Black printed Watch</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>60$</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container companies">
        <div class="row">
            <h1 class="heading title">Connected companies</h1>
            <div class="row1 pd-b">
                <div class="box1"><img src="Image/logo-coca-cola.png" alt=""></div>
                <div class="box1"><img src="Image/logo-godrej.png" alt=""></div>
                <div class="box1"><img src="Image/logo-oppo.png" alt=""></div>
                <div class="box1"><img src="Image/logo-paypal.png" alt=""></div>
                <div class="box1"><img src="Image/logo-philips.png" alt=""></div>
                <!-- <div class="box1"><img src="Image/logo-white.png" alt=""></div> -->
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
                <img src="Image/logo.png" alt="">
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