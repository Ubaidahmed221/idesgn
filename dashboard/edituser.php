<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php'); 
    include('conf.php');
    $id = $_GET['id'];
    $sql1 = "select * from user where id = $id";
    $result1 = mysqli_query($con,$sql1) or die('query expired');
    $row = mysqli_fetch_assoc($result1);
    // print_r($row);
   
   $name =   $row['name'];
   $email =    $row['email']; 
   $sub =    $row['subject']; 
     $phon =  $row['phone'];
     $mass =  $row['massege'];
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
    <label class="form-label">user name</label>
    <input type="text" name="name" value="<?php echo $name ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">user Email</label>
    <input type="email" name="email" value="<?php echo $email ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">user subject</label>
    <input type="text" name="subj" value="<?php echo $sub ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">user phone</label>
    <input type="number" name="phon" value="<?php echo $phon ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">user massege</label>
    <!-- <textarea name="mass" id="" cols="" rows="10"></textarea> -->
    <textarea name="mass" rows="5"  class="form-control"><?php echo $mass ?></textarea>
  </div>


  
  <button type="submit" class="btn btn-primary" name="update">Insart</button>
</form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['update'])){
        $cat_name =  $_POST['name'];
        $email =  $_POST['email'];
        $sub =  $_POST['subj'];
        $phon =  $_POST['phon'];
        $mass =  $_POST['mass'];

       $sql = "UPDATE `user` SET `name`='$cat_name',`email`='$email',`subject`='$sub ',`phone`='$phon',`massege`='$mass' WHERE id  = $id";
       $result = mysqli_query($con,$sql) or die('quary unsusseccfully');
       if($result){
        echo "<script>
                    location.href = 'listuser.php';
                    </script>";
       } }


?>

               
            </div>
        </div>

    </div>




















<?php include('js.php') ?>
</body>
</html>