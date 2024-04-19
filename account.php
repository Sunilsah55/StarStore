<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dev
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarStore-All products</title>
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
    if(isset($_REQUEST["info"])){
    if($_REQUEST["info"]=="duplicate"){?>
        <script>alert("You are alredy registered")</script>
    <?php }else{?>
        <script>alert("Registration successfull... please login using UserId and Password..")</script>
    <?php }}?>
   

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
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px" alt=""></a>

            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>
    </div>


    <!-- -----------Account-page-------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/pngwing.com.png" width="100%" alt="">
                </div>
                <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="Login()">Login</span>
                        <span onclick="Register()">Register</span>
                        <hr id="indicator">
                    </div>
                    <form id="LoginForm" action = "login.php" METHOD="POST">
                        <input type="text" placeholder="Username" name ="username">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" name="Login" class="btn">Login</button>
                        <a href="">Forgot password</a>

                    </form>
                    <form id="RegForm" action ="registration.php" method="GET">
                        <input type="text" placeholder="User Name" name = "UserName">
                        <input type="email" placeholder="Email" name = "Email">
                        <input type="Password" placeholder="Password" name = "Password">
                        <button type="submit" name="registration" class="btn">Register</button>

                    </form>

                </div>
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
                        <li>Instagram</li>
                        <li>YouTube </li>
                        <li>Facbook </li>
                        <li>Twitter</li>
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
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }

            else {
                MenuItems.style.maxHeight = "0px";
            }


        }

    </script>



<!-- ------------js for toggle form-------- -->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var indicator = document.getElementById("indicator");

    function Register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";

    }

    
    function Login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";

    }
</script>

</body>

</html>