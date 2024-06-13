<?php
 $r=move_uploaded_file($_FILES["photo1"] ["tmp_name"],"upload/".
 $_FILES["photo1"]["name"]);
 $r1=move_uploaded_file($_FILES["photo2"] ["tmp_name"],"upload/".
 $_FILES["photo2"]["name"]);

 $name=$_POST["gamename"];
 $genre=$_POST["genre"];
 $date=$_POST["date"];
 $desc=$_POST["description"];
 $price=$_POST["price"];
 $photo1=$_FILES["photo1"]["name"];

 $photo2=$_FILES["photo2"]["name"];
 //  $photo2=$_POST["photo2"];
 
 
 
$con=new mysqli("localhost","root","","phoenixrecreation");
 $r=$con->query("update addgame set gamename='$name', genre=' $genre',releasedate='$date',description='$desc',pricing='$price',photo1='$photo1',photo2='$photo2' where id ='$game_id'");
 
 
 if($r)
	 echo "Record Insert Successfully";
 else
	 echo "Record Not Inserted";
?>