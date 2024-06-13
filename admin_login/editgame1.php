<?php
ob_start();
$id = $_GET['edit']; // Outputs: value1
$con = new mysqli("localhost", "root", "", "phoenixrecreation");

$r = $con->query("select * from addgame");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="dashboard.css" />
  <title>Edit game</title>
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
            <li><a href="dashboard.html" class="link active">Home</a></li>
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

        <?php


       
          $game_id = $_GET['edit'];

          $query = "select * from addgame where id='$game_id'";
          $query_run = mysqli_query($con, $query);
        $row=$query_run->fetch_row();
?>
              <form id="gameForm" action="" method="POST" enctype="multipart/form-data">
                <h
                2>Edit Game</h2>
                <tr>
                  <td>Game Name</td>
                  <td>
                  <input type="hidden" value="<?php echo $game_id ?>" name="game_id">  
                  <input type="text" id="name" name="gamename" value="<?php echo $row[1];  ?>" /></td>
                </tr>
                <br />
                <tr>
                <td>Genre</td>
        
        <td><select name="genre" id="genre" class="genre">
        <?php
        $ww=$con->query("select * from gamecate");
        while($roww=$ww->fetch_array())
        {
        echo "<option value='$roww[1]'>$roww[1]</option>";
        }
        ?>  
        </select></td>
      </tr>
                <br />
                <tr>
                  <td>Release Date</td>
                  <td><input type="date" id="date" name="date" value="<?php echo $row[4];  ?>"/></td>
                </tr>
                <br />
                <tr>
                  <td>Description</td>
                  <td><input type="text" id="description" name="description" value="<?php echo $row[5];  ?>" /></td>
                </tr>
                <br />
                <tr>
                  <td>Pricing</td>
                  <td><input type="bigint" id="price" name="price" value="<?php echo $row[6];  ?>" /></td>
                </tr>
                <br />
                <tr>
                  <td>Photo 1</td>
                  <td><input type="file" id="photo" name="photo1" /><img src="<?php echo 'upload/' . $row[7];  ?>" /></td>
                </tr>

                <br />
                <tr>
                  <td>Photo 2</td>
                  <td><input type="file" id="photo" name="photo2" /><img src="<?php echo 'upload/' . $row[8];  ?>" /></td>
                </tr>
                <tr>
                  <td>Photo 3</td>
                  <td><input type="file" id="photo" name="photo3" /><img src="<?php echo 'upload/' . $row[9];  ?>" /></td>
                </tr>
                <tr>
              <td>Game exe file</td>
              <td><input type="file" id="game_exe_file" name="game_exe_file"  value="<?php echo $row[10];  ?>" /></td>
            </tr>

                <br />
                <button type="submit" name="up">Update Game</button>
              </form>
        
      </div>
    </div>
  </div>
</body>

</html>


<?php
if (isset($_REQUEST['up'])) {

  $r = move_uploaded_file($_FILES["photo1"]["tmp_name"], "upload/" .
    $_FILES["photo1"]["name"]);
  $r1 = move_uploaded_file($_FILES["photo2"]["tmp_name"], "upload/" .
    $_FILES["photo2"]["name"]);
  $r2 = move_uploaded_file($_FILES["photo3"]["tmp_name"], "upload/" .
    $_FILES["photo3"]["name"]);
  $r3=move_uploaded_file($_FILES["game_exe_file"] ["tmp_name"],"upload/".
    $_FILES["game_exe_file"]["name"]);

  $name = $_POST["gamename"];
  $genre = $_POST["genre"];
  $date = $_POST["date"];
  $desc = $_POST["description"];
  $price = $_POST["price"];
  $photo1 = $_FILES["photo1"]["name"];

  $photo2 = $_FILES["photo2"]["name"];
  $photo3 = $_FILES["photo3"]["name"];  
  $file=$_FILES["game_exe_file"]["name"];
  $game_id=$_REQUEST["game_id"];


  // $rr = $con->query("update addgame set gamename='$name' where id ='$game_id'");
  $rr=$con->query("update addgame set gamename='$name', genre=' $genre',releasedate='$date',description='$desc',pricing='$price',photo1='$photo1',photo2='$photo2',photo3='$photo3',game_exe_file='$file' where id ='$game_id'");

  if ($rr)
  header("location:veiwgame.php");
}
?>