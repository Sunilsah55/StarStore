<?php

 $conn = mysqli_connect("localhost","root","","starstore");
 if(isset($_REQUEST["registration"])){
    $name=$_REQUEST["UserName"];
    $email=$_REQUEST["Email"];
    $password=$_REQUEST["Password"];
   //  $hpass=password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM `registration` WHERE Email='$email'";
    $res=mysqli_query($conn,$query);
    $num=mysqli_num_rows($res);
    if($num==1){
       header('location:login.php?info=duplicate');
    }
    else{
    $query = "INSERT INTO `registration` (`Username` , `Email`, `Password`) VALUES ('$name', '$email', '$password');";
    mysqli_query($conn,$query);
   
       header('location:account.php?info=success');
   }
 }

 ?>
