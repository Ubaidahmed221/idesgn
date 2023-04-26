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
                <h2 class="text-center">Add project category</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Project cate name</label>
    <input type="text" name="name" class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-primary" name="insart">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['insart'])){
      $cat_name =  $_POST['name'];

    
       $sql = "INSERT INTO procate(`procatename`) VALUES ('$cat_name')";
       $result = mysqli_query($con,$sql);
       if($result){
           echo "<script>location.href = 'listcatpro.php';
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