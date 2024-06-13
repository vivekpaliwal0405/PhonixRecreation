<?php
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM cart where id = '$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:cart.php?message=deleted');
        //  echo"deleted successfully";
    }
    else{
        die(mysqli_error($con));
    }
}
?>