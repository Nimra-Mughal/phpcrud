<?php 
    $name= $_POST['name'];
    $pass= $_POST['pass'];

    $imagename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $url="images/".$imagename;
    move_uploaded_file($tmpname, $url);

    include 'conn.php';
    $query="INSERT INTO `student`(`name`,`password`,`image`) VALUES('$name','$pass','$url')";
    mysqli_query($con,$query);
    header('location:studentdata.php');
    ?>