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
                <h2 class="text-center">List Project</h2>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Tittle</th>
                            <th scope="col">Project Short Des</th>
                            <th scope="col">Project Image</th>
                            <th scope="col">Project Client</th>
                            <th scope="col">Project category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $sql = "select * from project inner join procate on project.procatids = procate.proid";
                        
                       $result =  mysqli_query($con,$sql);
                       if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                            ?><tr>
                            <th scope='row'><?php echo $row['pid']; ?></th>
                            <td><?php echo $row['ptillte'] ?></td>
                            <td><?php echo $row['pshortdes']?></td>
                            <td><img src="pimages/<?php echo $row['pimg']?>" width='50px' /></td>
                            <td><?php echo $row['pclient'] ?></td>
                            <td><?php echo $row['procatename'] ?></td>
                            <td>
                            <a href="editpro.php?id=<?php echo $row['pid'] ?>" class='btn btn-primary'>Edit</a>
                            <a href='delectpro.php?id=<?php echo $row['pid'] ?>' class='btn btn-dark'>Delect</a>
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