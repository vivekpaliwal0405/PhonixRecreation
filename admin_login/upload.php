<?php
 $r=move_uploaded_file($_FILES["photo1"] ["tmp_name"],"upload/".
 $_FILES["photo1"]["name"]);
 $r1=move_uploaded_file($_FILES["photo2"] ["tmp_name"],"upload/".
 $_FILES["photo2"]["name"]);
 $r2=move_uploaded_file($_FILES["photo3"] ["tmp_name"],"upload/".
 $_FILES["photo3"]["name"]);

 $name=$_POST["gamename"];
 $genre=$_POST["genre"];
 $date=$_POST["date"];
 $desc=$_POST["description"];
 $price=$_POST["pricing"];
 $photo1=$_FILES["photo1"]["name"];

 $photo2=$_FILES["photo2"]["name"];
 $photo3=$_FILES["photo3"]["name"];
 //  $photo2=$_POST["photo2"];
 
 
 
$con=new mysqli("localhost","root","","phoenixrecreation");
 $r=$con->query("insert into addgame(gamename,genre,releasedate,description,pricing,photo1,photo2) values
 ('$name',' $genre','$date','$desc','$price','$photo1','$photo2')");
 
 if($r)
	 echo "Record Insert Successfully";
 else
	 echo "Record Not Inserted";
?>