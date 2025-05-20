<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

</head>
<body>
    
<section class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2>Login Your Account</h2>
            <form method="post">
            <input type="text" placeholder="Enter your username" class="form-control mb-2" name="username">
            <input type="text" placeholder="Enter your email" class="form-control mb-2" name="email">
            <input type="password" placeholder="Enter your password" class="form-control mb-2" name="password">

            <button class="btn btn-dark w-100" name="btn_login">Login</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php

session_start();

//  if(isset($_SESSION['user'])){
// //    header("location:cart.php");
//  }
//  else{

    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $email =$_POST['email'];
        $password = $_POST['password'];
    
        if($username == "manahil" && $email == "soniaabid806@gmail.com" && $password == "biology" || $username == "saleha"  && $email == "manahil@gmail.com"&& $password == "aptech2"){
            echo "login Successfully";
            $_SESSION['user'] = $username;
            setcookie("user", $username , time()+ 60*60);
            header("Location:add-to-cart.php");
        }
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }
    }
?>  
</body>
</html>