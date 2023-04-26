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
                <h2 class="text-center">Add Logo</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Logo Tittle</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">logo Image</label>
    <input type="file" class="form-control" name="pimage" >
  </div>
  <button type="submit" class="btn btn-primary" name="insart">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['insart'])){
      $cat_name =  $_POST['name'];

       if(isset($_FILES['pimage'])){
       $name = $_FILES['pimage']['name'];
        $tmp = $_FILES['pimage']['tmp_name'];
        $type = $_FILES['pimage']['type'];

        if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg"){
            $sql = "INSERT INTO`logoimg`(`logo_name`,`logo_img`) VALUES ('$cat_name','$name')";
            $result = mysqli_query($con,$sql);
            if($result){
                move_uploaded_file($tmp,"pimages/".$name);
                echo "<script>location.href = 'listlogo.php';
                </script>";
            //  header('location: listpro.php');
            }
        }
       }
    }
?>

               
            </div>
        </div>

    </div>




















<?php include('js.php') ?>
</body>
</html>