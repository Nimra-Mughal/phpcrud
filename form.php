<?php 
// $table=3;
// $end=20;
// for($i=1; $i<=$end; $i++){
//     $result=$table*$i;
//     echo $table." x ".$i." = ".$result."<br>";
// }


// if(isset($_POST['save'])){
//     $table=$_POST['table'];
//     $end=$_POST['end'];
//      for($i=1; $i<=$end; $i++){
//             $result=$table*$i;
//             echo $table." x ".$i." = ".$result."<br>";
//         }
// }

// ?>
<!-- // <form action="" method="post">
//     <input type="text" name="table" id="">
//     <input type="text" name="end" id="">
//     <button name="save">Table geneartor</button>
// </form> -->

<!-- while loop check condition then execute   Entery controlled loop -->
<!-- <?php 
// $i=1;
// while($i<=10){
//     echo $i;
//     $i++;
// }
?> -->


<!-- do while loop once execute then check condition exit controlled loop -->
<?php 
// $i=1;
// do{
//     $i++;
//     echo $i;
// }while($i<10);
?>
<!-- foreach loop (or for-each loop) is a control flow statement for traversing items in a collection. -->
<?php  

// $allstudent=array("Ali","Fiza","Sehar","Mehwish","Kinza");
// foreach($allstudent as $std){
//     echo "<h1>$std</h1>";
// }
?>

<!-- 
$_POST
$_GET 
$_REQUEST 
$_SERVER 
$_SESSION 
$_COOKIE 
$_FILES -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="data.php" method="post" enctype="multipart/form-data" class=" mt-5 w-50 mx-auto shadow-lg p-3">
        <h1 class="text-center">Add Student</h1>
        <input type="text" name="name" id="" class="form-control mt-3">
        <input type="text" name="pass" id="" class="form-control mt-3">
        <input type="file" name="image" id="" class="form-control mt-3">
        <button name="save" class="btn btn-primary mt-3 mx-auto d-block">Submit</button>
    </form>
    <a href="studentdata.php">Go To List</a>
</body>
</html>













