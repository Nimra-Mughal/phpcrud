<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <table class="table w-50 mx-auto">
        <a href="form.php" class="btn btn-primary">Add Student</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'conn.php';
                $query="SELECT * FROM `student`";
                $data=mysqli_query($con,$query);
                foreach($data as $d){       
            ?>
                <tr>
                    <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['name'] ?></td>
                    <td><img height="100px" src="<?php echo $d['image']?>" alt=""><td>
                    <td>
                        <a href="delete.php? id=<?php echo $d['id']?>" >
                            <i class="fa-solid fa-trash text-danger"></i>
                        </a>
                    </td>
                    <td>
                        <a href="update.php? id=<?php echo $d['id']?>" >
                        <i class="fa-solid fa-pen-to-square text-success"></i>
                        </a>
                    </td>
                    <td>
                        <a href="deatils.php? id=<?php echo $d['id']?>" >
                             <i class="fa-regular fa-eye text-primary"></i>
                        </a>
                    </td>

                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>