<?php
include('conf.php');
$id = $_GET['id'];

$sql = "DELETE FROM `procate` WHERE proid = $id";
$result =  mysqli_query($con,$sql);
if($result){
    echo "<script>
    location.href = 'listcatpro.php';
    </script>";
}


?>