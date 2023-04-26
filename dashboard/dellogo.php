<?php
include('conf.php');
$id = $_GET['id'];

$sql = "DELETE FROM `logoimg` WHERE id = $id";
$result =  mysqli_query($con,$sql);
if($result){
    echo "<script>
    location.href = 'listlogo.php';
    </script>";
}


?>