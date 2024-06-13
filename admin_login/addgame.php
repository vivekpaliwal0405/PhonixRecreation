<?php
$con=new mysqli("localhost","root","","phoenixrecreation");
$rr=$con->query("select * from gamecate");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dashboard.css" />
    <title>Add game</title>
  </head>
  <body>
    <div class="main">
      <div class="wrapper">
        <nav class="nav">
          <div class="nav-logo">
            <img src="img/wallpaper .jpg" alt="Logo" height="100px" />
          </div>
          <div class="nav-menu" id="navMenu">
            <ul>
              <li><a href="dashborad.php" class="link active">Home</a></li>
              <li><a href="addgame.php" class="link">Add Games</a></li>
              <li><a href="veiwgame.php" class="link">View Games</a></li>
              <li><a href="customerquery.php" class="link">Customer Query</a></li>
              <li>
                <a href="gamecategory.php" class="link">Game Category</a>
              </li>
              <li><a href="index.php" class="link">Log Out</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="content">
        <div class="addgame">
          <form
            id="gameForm"
            action="addgame.php"
            method="post"
            enctype="multipart/form-data"
          >
          <h3><?php 
          if(isset($_POST['gamename']))
          {
          $r=move_uploaded_file($_FILES["photo1"] ["tmp_name"],"upload/".
          $_FILES["photo1"]["name"]);
          $r1=move_uploaded_file($_FILES["photo2"] ["tmp_name"],"upload/".
          $_FILES["photo2"]["name"]);
          $r2=move_uploaded_file($_FILES["photo3"] ["tmp_name"],"upload/".
          $_FILES["photo3"]["name"]);
          $r3=move_uploaded_file($_FILES["game_exe_file"] ["tmp_name"],"upload/".
          $_FILES["game_exe_file"]["name"]);
          
          $name=$_POST["gamename"];
          $genre=$_POST["genre"];
          $date=$_POST["date"];
          $desc=$_POST["description"];
          $price=$_POST["price"];
          $photo1=$_FILES["photo1"]["name"];
          
          $photo2=$_FILES["photo2"]["name"];
          $photo3=$_FILES["photo3"]["name"];
          $file=$_FILES["game_exe_file"]["name"];
          //  $photo2=$_POST["photo2"];
          
          
          
          $con=new mysqli("localhost","root","","phoenixrecreation");
          $query = "select * from gamecate where id = $genre";
          $query_run = mysqli_query($con, $query);
          $roww=$query_run->fetch_row();
          $r=$con->query("insert into addgame(gamename,genre,genre_id,releasedate,description,pricing,photo1,photo2,photo3,game_exe_file) values
          ('$name',' $roww[1]','$genre','$date','$desc','$price','$photo1','$photo2','$photo3','$file')");
          
          
        
 if($r)
	 echo "Record Insert Successfully";
 else
	 echo "Record Not Inserted";  } ?></h3>
            <h2>Add New Game</h2>
            <tr>
              <td>Game Name</td>
              <td><input type="text" id="name" name="gamename" required /></td>
            </tr>
            <br />
            <tr>
              <td>Genre</td>
        
              <td><select name="genre" id="genre" class="genre" required>
              <?php
              while($row=$rr->fetch_array())
              {
              echo "<option value='$row[0]'>$row[1]</option>";
              }
              ?>  
              </select></td>
            </tr>
            <br />
            <tr>
              <td>Release Date</td>
              <td><input type="date" id="date" name="date" required/></td>
            </tr>
            <br />
            <tr>
              <td>Description</td>
              <td><input type="text" id="description" name="description" required/></td>
            </tr>
            <br />
            <tr>
              <td>Pricing</td>
              <td><input type="bigint" id="price" name="price" required/></td>
            </tr>
            <br />
            <tr>
              <td>Photo 1</td>
              <td><input type="file" id="photo" name="photo1" required /></td>
            </tr>

            <br />
            <tr>
              <td>Photo 2</td>
              <td><input type="file" id="photo" name="photo2" /></td>
            </tr>
            <tr>
              <td>Photo 3</td>
              <td><input type="file" id="photo" name="photo3" /></td>
            </tr>
            <tr>
              <td>Game exe file</td>
              <td><input type="file" id="game_exe_file" name="game_exe_file" /></td>
            </tr>

            <br />
            <button type="submit">Add Game</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>



<?php

?>