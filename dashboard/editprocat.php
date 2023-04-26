<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
    $id = $_GET['id'];
    $sql1 = "select * from procate where proid = $id";
    $result1 = mysqli_query($con,$sql1) or die('query expired');
    $row = mysqli_fetch_assoc($result1);
    // print_r($row);
    $tilte = $row['procatename'];
    
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
                <h2 class="text-center">Edit project category</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Project category name</label>
    <input type="text" name="pname" class="form-control"  value="<?php echo  $tilte ?>">
  </div>
 


  
  <button type="submit" class="btn btn-primary" name="update">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['update'])){
      $cat_name =  $_POST['pname'];
       
      $sql = "UPDATE `procate` SET `procatename`='$cat_name' WHERE proid = $id";
      $result = mysqli_query($con,$sql) or die('quary unsusseccfully');
      if($result){
        echo "
        <script>
        location.href = 'listcatpro.php';
        </script>";

      }
  


    }


?>

               
            </div>
        </div>

    </div>




















<?php include('js.php') ?>
</body>
</html>