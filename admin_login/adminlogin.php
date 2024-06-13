<?php
 session_start();
 $con=new mysqli("localhost","root","","phoenixrecreation");
 
 $name=$_POST["username"];
 $pass=$_POST["password"];
 
 $r=$con->query("select * from adminlogin where username='$name' and password='$pass'");
 
 if($row=$r->fetch_array())
	 header("location:dashborad.php");
 else
    {
      $_SESSION["err"]= "Invalid Username And Password";
	  header("location:adminlogin.php");
	
	}
?>