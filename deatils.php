<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    
    $ID=$_GET['id'];
    include 'conn.php';
    $query="SELECT * FROM `student` WHERE id =$ID";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_array($data);
    ?>
    <div class="container shadow-lg p-5 mt-5">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?php echo $result['image']?>" alt="">
            </div>
            <div class="col-lg-6">
                <h1><?php echo $result['name']?></h1>
                <p></p>
                <button class="btn btn-primary">Add tp cart</button>
            </div>
        </div>
    </div>
</body>
</html>