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


            <div class="row">
                <div class="cart-detail" >
                    <table >
                        <thead >
                            <tr>
                                <th >Products</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 
                                    <div class="cart-info">
                                        <img class="" src="../Image/gallery-1.jpg" alt="This is a product image">
                                        <div class="prod-info">
                                            <p>Red T-Shirt </p>  
                                            <p>Price: $35.00 </p>  
                                            <a href="#"><span class="" style="color: #d46f62">remove </span></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="number"  onkeypress="return event.charCode >= 48" min="1" value="1" class="no_of_piece">
                                </td>
                                <td>$35.00 </td>
                            </tr>
                            <tr>
                                <td> 
                                    <div class="cart-info">
                                        <img class="" src="../Image/product-2.jpg" alt="This is a product image">
                                        <div class="prod-info">
                                            <p>Black Shoes  </p>
                                            <p>Price: $25.00 </p> 
                                            <a href="#"><span style="color: #d46f62">remove </span> </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="number"  onkeypress="return event.charCode >= 48" min="1" value="1" class="no_of_piece">
                                </td>
                                <td>$25.00 </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="total-price">
                        <table>
                            <tr>
                                <td>Subtotal</td>
                                <td>$200.00</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>$35.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$235.00</td>
                            </tr>
                        </table>
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