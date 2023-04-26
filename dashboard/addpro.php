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
                <h2 class="text-center">Add Project</h2>
                <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Project Tittle</label>
    <input type="text" name="name" class="form-control" >
  </div>
    
  <div class="mb-3">
    <label class="form-label">Project Description</label>
    <textarea    rows="6" name="pro_des" class="form-control"></textarea>
</div>
  <div class="mb-3">
    <label class="form-label">Project Image</label>
    <input type="file" class="form-control" name="pimage" >
  </div>
  <div class="mb-3">
    <label class="form-label">Project category</label>
    <select name="pcat" id="" class="form-control form-select">
        <option value="">select</option>
        <?php
        $sql1 = "select * from procate";
     $result1 = mysqli_query($con,$sql1);
     while($row = mysqli_fetch_assoc($result1)){
        echo "<option value='$row[proid]'>$row[procatename]</option>";
     }
        ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Project Client</label>
    <input type="text" name="pclient" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-primary" name="insart">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['insart'])){
      $cat_name =  $_POST['name'];
       $des = $_POST['pro_des'];
       $pclient = $_POST['pclient'];
       $pcat = $_POST['pcat'];

       if(isset($_FILES['pimage'])){
       $name = $_FILES['pimage']['name'];
        $tmp = $_FILES['pimage']['tmp_name'];
        $type = $_FILES['pimage']['type'];

        if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg"){
            $sql = "INSERT INTO project(`procatids`,`ptillte`,`pshortdes`,`pimg`,`pclient`) VALUES ( $pcat,'$cat_name','$des','$name','$pclient')";
    
            $result = mysqli_query($con,$sql);
            if($result){
                move_uploaded_file($tmp,"pimages/".$name);
                echo "
                 <script>
           location.href = 'listpro.php';
           
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