<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
    $id = $_GET['id'];
    $sql1 = "select * from logoimg where id = $id";
    $result1 = mysqli_query($con,$sql1) or die('query expired');
    $row = mysqli_fetch_assoc($result1);
    // print_r($row);
    $tilte = $row['logo_name'];
    $img = $row['logo_img'];
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
                <h2 class="text-center">Edit Logo</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Logo Tittle</label>
    <input type="text" name="pname" class="form-control"  value="<?php echo  $tilte ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Logo Image</label>
    <input type="file" class="form-control" name="pimage" />
</div>
<input type="hidden" name="oldimg"  value="<?php echo $img ?>">
<img src="pimages/<?php echo $img ?>" width="50px" alt="">

  
  <button type="submit" class="btn btn-primary" name="update">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['update'])){
      $cat_name =  $_POST['pname'];
       $oldimg = $_POST['oldimg'];


       if(isset($_FILES['pimage'])){

        if($_FILES['pimage']['name'] != null){

            
            $name = $_FILES['pimage']['name'];
            $tmp = $_FILES['pimage']['tmp_name'];
            $type = $_FILES['pimage']['type'];

        if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg"){

            $sql = "UPDATE `logoimg` SET `logo_name`='$cat_name',`logo_img`=' $name' WHERE id = $id";
            
            $result = mysqli_query($con,$sql) or die('quary unsusseccfully');
            if($result){
                move_uploaded_file($tmp,'logoimg/'. $name );

                if($oldimg == ""){}else{
                    unlink("logoimg/".$oldimg);
                }
                    echo "<script>
                    location.href = 'listpro.php';
                    </script>";
            //  header('location: listpro.php');
        }
    }
    }
    else{
        $sql2 = "UPDATE `logoimg` SET `logo_name`='$cat_name',`logo_img`=' $oldimg' WHERE id = $id";
        $result2 = mysqli_query($con,$sql2) or die('quary fasiled');

        if($result2){
            echo "
            <script>
            location.href = 'listlogo.php';
            </script>";
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