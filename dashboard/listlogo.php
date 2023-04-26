<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
        ?>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="row p-0">
            <div class="col-md-3 p-0">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="col-md-8 mt-5">
                <h2 class="text-center">List logo</h2>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Logo Name</th>
                            <th scope="col">Logo Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select * from logoimg';
                       $result =  mysqli_query($con,$sql);
                       if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                            ?><tr>
                            <th scope='row'><?php echo $row['id']; ?></th>
                            <td><?php echo $row['logo_name'] ?></td>
                            <td><img src="pimages/<?php echo $row['logo_img']?>" width='50px' /></td>
                            <td>
                            <a href="editlogo.php?id=<?php echo $row['id'] ?>" class='btn btn-primary'>Edit</a>
                            <a href="dellogo.php?id=<?php echo $row['id'] ?>"class='btn btn-dark'>Delect</a>
                            </td>
                        </tr>

                            
                            
                            
                            <?php
                        }
                       }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




















<?php include('js.php') ?>
</body>
</html>