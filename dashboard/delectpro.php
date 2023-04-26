<?php
include('conf.php');
$id = $_GET['id'];

$sql = "DELETE FROM `project` WHERE pid= $id";
$result =  mysqli_query($con,$sql);
if($result){
    echo "<script>
    location.href = 'listpro.php';
    </script>";
}


?>