<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "starstore");
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name= $_POST["username"];
    $password =$_POST["password"];
    $query = "SELECT * FROM `registration` WHERE Username='$name'";

    $res=mysqli_query($conn,$query);
    $num = mysqli_num_rows($res);
    if($res==1){
        $row=mysqli_fetch_assoc($res);

            $name=$row['Username'];
            $password=$row['password'];

            header('location:index.php?info=login_success');
        }
        else{
            header('location:index.php?info=login_failed');
        }
    }
    else{
        echo"<script>alert('Invalid username')</script>";
    }

?>
