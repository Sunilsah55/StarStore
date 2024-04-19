<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dev
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarStore</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;600;700;800&family=Ibarra+Real+Nova&family=Kanit:ital,wght@1,100;1,600&family=Poppins:ital,wght@0,400;0,500;0,600;0,800;1,100;1,200;1,500&display=swap"
        rel="stylesheet">


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>

<body>
    <?php
            if($_REQUEST["info"]="login_success"){?>
                <script>alert("You are logged in successfully")</script>
            <?php }else{?>
                <script>alert("Pls Enter valid credentials")</script>
        <?php }?>
    <div class="header">

        <div class="container">

            <div class="navebar">
                <div class="logo">
                    <a href="index.php"><img src="images/starstore logo.png" alt="logo" width="200px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php"> Home</a></li>
                        <li><a href=""> About</a></li>
                        <li><a href="product.html"> Product</a></li>
                        <li><a href="account.php"> Account </a></li>
                        
                    </ul>
                </nav>
               <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px" alt=""></a>

                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Buy a product <br> in Low cost! </h1>
                    <p>Lorem ipsum dolor sit amet consect etur adipisicing elit. explicabo, iure ab voluptatibus!</p>
                    <a href="#exp" class="btn">Explore now &#10150;</a>

                </div>
                <div class="col-2">
                    <img src="images/pngwing.com.png" alt="">
                </div>
            </div>


        </div>
    </div>
    <!------ feature categories------>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/product1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/product2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/product3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

    <!------ feature products------>
    <div class="small-container" id=exp>
        <h2 class="title">Future Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-8.jpg" alt="">
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>
                <p>500.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-9.jpg" alt="">
                <h4>VGA </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>1000.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product6.jpg" alt="">
                <h4>Headphone </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>



                </div>
                <p>399.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product4.jpg" alt="">
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>100.00 ₹</p>
            </div>

        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.html"><img src="images/product-1.jpg" alt=""></a>
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>
                <p>500.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-6.jpg" alt="">
                <h4>VGA </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>1000.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-7.jpg" alt="">
                <h4>Headphone </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>399.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-10.jpg" alt="">
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>100.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-12.jpg" alt="">
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>
                <p>500.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-5.jpg" alt="">
                <h4>VGA </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>1000.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-8.jpg" alt="">
                <h4>Headphone </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>399.00 ₹</p>
            </div>

            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Game controller </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <p>100.00 ₹</p>
            </div>



        </div>


    </div>

    <!-------- offer ------>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/new.png" class="offer-img" alt="">
                </div>
                <div class="col-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h1>Apple Watch S12</h1>
                    <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus optio assumenda autem
                        corporis voluptate doloremque error consequuntur quaerat reiciendis, voluptatibus a eveniet
                        aspernatur nostrum. Amet molestiae delectus, sit esse maiores quo! Tenetur architecto at a nam,
                        sint animi eos corrupti et autem ut nobis sit ea consequuntur totam harum id.</small>
                    <a href="#" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!-- -------------testimonial-------------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem dolores debitis minus
                        exercitationem similique totam tenetur architecto nihil est eum.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>sonali roy</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem dolores debitis minus
                        exercitationem similique totam tenetur architecto nihil est eum.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>suman sah</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem dolores debitis minus
                        exercitationem similique totam tenetur architecto nihil est eum.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>sonam gupta</h3>
                </div>







            </div>
        </div>

        <!-- ---------brands-------- -->
        <div class="brands">
            <div class="small-contain">
                <div class="row">
                    <div class="col-5">
                        <img src="images/apple brand.png" alt="">
                    </div>


                    <div class="col-5">
                        <img src="images/boot logo.png" alt="">
                    </div>

                    <div class="col-5">
                        <img src="images/logo-oppo.png" alt="">
                    </div>

                    <div class="col-5">
                        <img src="images/logo-paypal.png" alt="">
                    </div>

                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!-- -------------footer-------- -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3> Download our aap </h3>
                        <P>Download Appp for android and ios mobile phone.
                        </P>
                        <div class="app-logo">
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/starstore_logo-removebg-preview.png" alt="">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni molestias amet iste suscipit
                            omnis cumque cum quam obcaecati, veritatis accusantium.</p>
                    </div>

                    <div class="footer-col-3">
                        <h3>User link</h3>
                        <ul>
                            <li>About</li>
                            <li>Home</li>
                            <li>Return Policy </li>
                            <li>Offers </li>
                            <li>Blog post </li>
                        </ul>
                    </div>

                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                           <a href="https://www.instagram.com/starsunil_/"><li>Instagram</li></a> 
                           <a href="https://www.youtube.com"> <li>YouTube </li></a>
                           <a href="facbook.com"><li>Facbook </li></a> 
                           <a href="twitter.com"><li>Twitter</li></a> 
                        </ul>
                    </div>
                </div>
            </div>

            <hr>
            <p class="copyright">Copyright 2023- StarStore</p>
        </div>
    </div>


    <!-- java scrip for toggle menu -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if(MenuItems.style.maxHeight == "0px")
             {
                MenuItems.style.maxHeight = "200px";
            }

            else 
            {
                MenuItems.style.maxHeight = "0px";
            }


        }

    </script>



</body>

</html>