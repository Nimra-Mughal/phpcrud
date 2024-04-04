

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

<!-- To update records -->
<?php
     if(isset($_POST['update'])){
        $name=$_POST['name'];
        $imagename=$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        $url="";
        if(!empty($imagename)){
            $url="images/".$imagename;
        }
        else{
            $url=$result['image'];
        }
        move_uploaded_file($tmpname,$url);
   
       include "conn.php";
       $query="UPDATE `student` SET name='$name', image='$url' WHERE id = $ID";
       mysqli_query($con,$query);
       header('location:studentdata.php');
     }
    ?>

    <div class="w-50 mx-auto">
        <h1 class="text-center">Update Product Data</h1>
        <form action="" class="shadow-lg p-3" method="post" enctype="multipart/form-data">
            <input type="text" readonly name="id" value="<?php echo $result['id']?>" class="form-control mt-3">
            <input type="text" name="name" value="<?php echo $result['name']?>" class="form-control mt-3">
            <input type="file" name="image" value="<?php echo $result['image']?>" class="form-control mt-3">
            <img src="<?php echo $result['image']?>" height="100px" alt="">
            <button name="update" class="btn btn-success mx-auto d-block mt-3">Update</button>
        </form>

    </div>
    
    
</body>
</html>