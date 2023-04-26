<?php
include('conf.php');
$id = $_GET['id'];

$sql = "DELETE FROM `news_letter` WHERE id= $id";
$result =  mysqli_query($con,$sql);
if($result){
    echo "<script>
    location.href = 'listnew.php';
    </script>";
}


?>