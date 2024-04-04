<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body{
        background-image: url(https://static.vecteezy.com/system/resources/previews/000/962/809/original/abstract-gradient-background-with-colorful-and-modern-style-vector.jpg);
        background-size: cover;
    }
</style>
</head>
<body>
<?php 
include "navbar.php"
?>
 <?php 
 if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    include 'conn.php';
    $query="SELECT * FROM `register` Where `email`='$email' AND `password`='$password'";
    $data=mysqli_query($con,$query);

    if(mysqli_num_rows($data)>0){
        header('location:home.php'); 
    }
    else{
        echo "invalid input";

    }

 }
 
 ?>
    <form action="" class="w-50 shadow-lg mx-auto p-5 mt-5" method="post" style="background-color: rgba(0, 0, 0, 0.252);">
        <h1 class="text-center">Login User</h1>
        <input name="email" type="email" placeholder="Email" class="form-control mt-3">
        <input name="password" type="password" placeholder="Password" class="form-control mt-3">
        <button class="btn btn-primary mx-auto d-block mt-3" name="login">Login</button>
    </form>
    
</body>
</html>