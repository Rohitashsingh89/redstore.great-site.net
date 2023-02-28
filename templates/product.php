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
    </div>

    <div class="container">
        <div class="row">
            <div class="category">
                <div class="col-2">
                    <img src="../Image/category-1.jpg" alt="" class="image1">
                </div>
                <div class="col-2">
                    <img src="../Image/category-2.jpg" alt="" class="image1">
                </div>
                <div class="col-2">
                    <img src="../Image/category-3.jpg" alt="" class="image1">
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
                    <img src="../Image/product-1.jpg" alt="" class="image1">
                    <p>Red  T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-2.jpg" alt="" class="image1">
                    <p>Black  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-3.jpg" alt="" class="image1">
                    <p>Black  Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-4.jpg" alt="" class="image1">
                    <p>Naive black  T-Shirt</p>
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
                    <img src="../Image/product-5.jpg" alt="" class="image1">
                    <p>Gray  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-6.jpg" alt="" class="image1">
                    <p>Black  T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-7.jpg" alt="" class="image1">
                    <p>Black & white Socks</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-8.jpg" alt="" class="image1">
                    <p>Black  Watch</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>60$</p>
                </div>
            </div>

            
            
            <div class="category">
                <div class="col-2">
                    <img src="../Image/product-12.jpg" alt="" class="image1">
                    <p>Black Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-9.jpg" alt="" class="image1">
                    <p>Black  Watch</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-10.jpg" alt="" class="image1">
                    <p>Black  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-11.jpg" alt="" class="image1">
                    <p>Gray Shoes</p>
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
                    <img src="../Image/product-11.jpg" alt="" class="image1">
                    <p>Black  Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-2.jpg" alt="" class="image1">
                    <p>Black  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-7.jpg" alt="" class="image1">
                    <p>Black and white Socks</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-5.jpg" alt="" class="image1">
                    <p>Gray Shoes  </p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>60$</p>
                </div>
            </div>

            
            
            <div class="category">
                <div class="col-2">
                    <img src="../Image/product-1.jpg" alt="" class="image1">
                    <p>Red  T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-2.jpg" alt="" class="image1">
                    <p>Black  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-3.jpg" alt="" class="image1">
                    <p>Black  Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-4.jpg" alt="" class="image1">
                    <p>Naive Blue T-Shirt</p>
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
                    <img src="../Image/product-5.jpg" alt="" class="image1">
                    <p>Gray  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-6.jpg" alt="" class="image1">
                    <p>Black  T-Shirt</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-7.jpg" alt="" class="image1">
                    <p>Black and white  Socks</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-8.jpg" alt="" class="image1">
                    <p>Black  Watch</p>
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
                    <img src="../Image/product-9.jpg" alt="" class="image1">
                    <p>Black  Watch</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>50$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-10.jpg" alt="" class="image1">
                    <p>Black  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>30$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-11.jpg" alt="" class="image1">
                    <p>Gray  Shoes</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half"></span>
                    <span class="fa fa-star-o"></span>
                    <p>35$</p>
                </div>
                <div class="col-2">
                    <img src="../Image/product-12.jpg" alt="" class="image1">
                    <p>Black  Lower</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <p>60$</p>
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
iv>

    <!-- JavaScript for menu icon -->
    <script src="/static/script.js"></script>



</body>
</html>