<!-- Special type of variables in programming languages that are accessible from any scope within a program 
$_GET
$_POST
$_REQUEST
-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="per" id="">
        <button>Check</button>
    </form>
<?php 
    // $per=$_POST['per'];
    // if($per>= 70){
    //     echo "GRADE : A";
    // }
    // else if($per >= 60){
    //     echo "GRADE : B";
    // }
    // else if($per >= 50){
    //     echo "GRADE : C";
    // }
    // else if($per >= 40){
    //     echo "GRADE : D";
    // }
    // else{
    //     echo "GRADE : F";
    // }

?>
</body>
</html> -->
<?php 
if(isset($_POST['save'])){
    $password= $_POST['pass'];
    $error="";
    if(empty($password)){
        $error= "password is required";
    }
    else if(strlen($password) <=8){
        $error= "password must be 8 characters";
    }
    else if(strlen($password) >=20){
        $error= "password is too long";
    }
    else if(empty(strpos($password,"@"))){
        $error= "please include @";
    }
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="password" name="pass" id="">
        <p style="color: red;"><?php echo $error?></p>
        <button name="save">add</button>
    </form>
</body>
</html>

