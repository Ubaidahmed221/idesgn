<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
    $id = $_GET['id'];
    $sql1 = "select * from project where pid = $id";
    $result1 = mysqli_query($con,$sql1) or die('query expired');
    $row = mysqli_fetch_assoc($result1);
    // print_r($row);
    $tilte = $row['ptillte'];
    $psdes = $row['pshortdes'];
    $img = $row['pimg'];
    $pclient = $row['pclient'];
    $pcat = $row['procatids']
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
                <h2 class="text-center">Add Project</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Project Tittle</label>
    <input type="text" name="pname" class="form-control"  value="<?php echo  $tilte ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Project category</label>
    <select name="pcat" id="" class="form-control form-select">
        <option value="">select</option>
        <?php
        $sql1 = "select * from procate";
     $result1 = mysqli_query($con,$sql1);
     while($row = mysqli_fetch_assoc($result1)){
        if($row['proid'] == $pcat){
            $sel = "selected";
        }else{
            $sel = "";
        }
        echo "<option $sel value='$row[proid]'>$row[procatename]</option>";
        // echo "<option value='$row[proid]'>$row[procatename]</option>";
     }
        ?>
    </select>
  </div>
    
  <div class="mb-3">
    <label class="form-label">Project Description</label>
    <textarea    rows="6" name="pro_des" class="form-control"><?php echo  $psdes ?></textarea>
</div>
  <div class="mb-3">
    <label class="form-label">Project Image</label>
    <input type="file" class="form-control" name="pimage" />
</div>
<input type="hidden" name="oldimg"  value="<?php echo $img ?>">
<img src="pimages/<?php echo $img ?>" width="50px" alt="">

  <div class="mb-3">
    <label class="form-label">Project Client</label>
    <input type="text" name="pclient" class="form-control"  value="<?php echo  $pclient  ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="update">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['update'])){
      $cat_name =  $_POST['pname'];
       $des = $_POST['pro_des'];
       $pclient = $_POST['pclient'];
       $oldimg = $_POST['oldimg'];
      $pcat = $_POST['pcat'];




       if(isset($_FILES['pimage'])){

        if($_FILES['pimage']['name'] != null){

            
            $name = $_FILES['pimage']['name'];
            $tmp = $_FILES['pimage']['tmp_name'];
        $type = $_FILES['pimage']['type'];

        if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg"){
            $sql = "UPDATE `project` SET `ptillte`='$cat_name',`procatids`= $pcat, `pshortdes`='$des',`pimg`='$name',`pclient`='$pclient' WHERE pid = $id";
          
            
            $result = mysqli_query($con,$sql) or die('quary unsusseccfully');
            if($result){
                move_uploaded_file($tmp,'pimages/' . $name );

                if($oldimg == ""){}else{
                    unlink("pimages/".$oldimg);
                }
                    echo "<script>
                    location.href = 'listpro.php';
                    </script>";
            //  header('location: listpro.php');
        }
    }
    }
    else{
        $sql2 = "UPDATE `project` SET `ptillte`='$cat_name',`procatids`= $pcat,`pshortdes`='$des',`pimg`='$oldimg',`pclient`='$pclient' WHERE  pid = $id";
      
        $result2 = mysqli_query($con,$sql2) or die('quary fasiled');

        if($result2){
            echo "
            <script>
            location.href = 'listpro.php';
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