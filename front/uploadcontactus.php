<?php
 
 $name=$_POST["name"];
 $email=$_POST["email"];
 $message=$_POST["message"];
  
 
 
$con=new mysqli("localhost","root","","phoenixrecreation");
 $r=$con->query("insert into contactus(name,email,message) values
 ('$name',' $email','$message')");
 
 if($r)
	header("location:contact.php");
 else
	 echo "Record Not Inserted";
?>