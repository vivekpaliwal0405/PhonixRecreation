<?php
include 'db.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM addgame where id = '$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo"deleted successfully";
        header('location:veiwgame.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>