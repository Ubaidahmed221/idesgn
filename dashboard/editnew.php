<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
    $id = $_GET['id'];
    $sql1 = "select * from news_letter where id = $id";
    $result1 = mysqli_query($con,$sql1) or die('query expired');
    $row = mysqli_fetch_assoc($result1);
    // print_r($row);
    $tilte = $row['name'];
    $email = $row['email'];
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
                <h2 class="text-center">Edit </h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">News Tittle</label>
    <input type="text" name="pname" class="form-control" value="<?php echo  $tilte ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">News Email</label>
    <input type="email" name="email" class="form-control"   value="<?php echo  $email ?>">
  </div>


  
  <button type="submit" class="btn btn-primary" name="update">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['update'])){
      $cat_name =  $_POST['pname'];
       $email = $_POST['email'];

       $sql = "UPDATE `news_letter` SET `name`='$cat_name',`email`='$email' WHERE id =$id";
       $result = mysqli_query($con,$sql) or die('quary unsusseccfully');
       if($result){
        echo "<script>
                    location.href = 'listnew.php';
                    </script>";
       } }


?>

               
            </div>
        </div>

    </div>




















<?php include('js.php') ?>
</body>
</html>