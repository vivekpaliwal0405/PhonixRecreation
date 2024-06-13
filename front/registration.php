<?php
 $firstname=$_POST["firstname"];
 $lastname=$_POST["lastname"];
 $email=$_POST["email"];
 $password=$_POST["password"];

$con=new mysqli("localhost","root","","phoenixrecreation");
 $r=$con->query("insert into usersignup(firstname,lastname,email,password) values
 ('$firstname',' $lastname','$email','$password')");
 
 if($r)
 header("location:from.php");
 else
	 echo "Record Not Inserted";
?>