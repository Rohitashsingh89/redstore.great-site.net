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
        <div class="">
            <div class="row">
                <div class="logo">
                    <a href="/"><img src="/Image/logo.png" alt="This is a logo image" class="logo"></a>
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
                            <li><a href="cart.php"><img src="/Image/cart.png" alt="This is card image" class="cart"></a></li>
                            <div class="container">
                                <img src="/Image/menu.png" alt="This is menu image" class="menu" onclick="menutoggle()">
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
                <div class="imagecontainer">
                    <div class="card">
                        <img class="image2" id="image2" src="/Image/gallery-1.jpg" alt="This is a product image" id="ProductImage">
                    </div>
                    <div class="cartImage">
                        <a href="#image2" > <img class="image3" src="/Image/gallery-1.jpg" alt="This is a product image" id="smallImage"> </a>
                        <a href="#image2" > <img class="image3" src="/Image/gallery-2.jpg" alt="This is a product image" id="smallImage"> </a>
                        <a href="#image2" > <img class="image3" src="/Image/gallery-3.jpg" alt="This is a product image" id="smallImage"> </a>
                        <a href="#image2" > <img class="image3" src="/Image/gallery-4.jpg" alt="This is a product image" id="smallImage"> </a>
                    </div>
                </div>

                <div class="card1">
                    <h3>Red T-Shirt <br> by R.L.D</h3>
                    <p class="mt1">$35.00</p>
                    <p>
                    <select name="size-select" id="size" class="mt1">
                        <option value="select">select</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                    </select>
                    </p>
                    <input type="number"  onkeypress="return event.charCode >= 48" min="1" value="1" class="no_of_piece mt1 mx1">
                    <input type="submit" id="submit" name="submit" value="add to cart" class="btn">
                    <h4 class="mt1">PRODUCTS DETAILS <span class="fa fa-indent symbol"></span></h4>
                    <P class="mt1 text" style="color: #555;">Give your summer wardrobe a style upgrade with the R.L.D Men's Active T-Shirt Team it with a pair of shorts for you morning workout or a denims for and evening out with the guys.</P>
                </div>

            </div>
                
            <h3 class="title">Related Products</h3>

            <div class="row">
                <div class="category">
                    <div class="col-2">
                        <img src="/Image/product-5.jpg" alt="" class="image1">
                        <p>white printed Shoes</p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        <p>50$</p>
                    </div>
                    <div class="col-2">
                        <img src="/Image/product-6.jpg" alt="" class="image1">
                        <p>Black printed T-Shirt</p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half"></span>
                        <span class="fa fa-star-o"></span>
                        <p>30$</p>
                    </div>
                    <div class="col-2">
                        <img src="/Image/product-7.jpg" alt="" class="image1">
                        <p>Black & white Socks</p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <p>35$</p>
                    </div>
                    <div class="col-2">
                        <img src="/Image/product-8.jpg" alt="" class="image1">
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