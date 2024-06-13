<?php
 $name=$_POST["name"];
$con=new mysqli("localhost","root","","phoenixrecreation");
$r=$con->query("insert into gamecate(name) values('$name')");
 
 if($r)
	 echo "Record Insert Successfully";
 else
	 echo "Record Not Inserted";
?>