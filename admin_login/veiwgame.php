<?php
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from addgame");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veiwgame</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
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
                        <li><a href="gamecategory.php" class="link">Game Category</a></li>
                        <li><a href="index.php" class="link">Log Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content veiwgames">

            <div class="container-fluid mt-3 gamelist" style="overflow-y: scroll; height: 600px; backdrop-filter: blur(5px);">

                <h1>All GAMES</h1>
                <!-- <p>Note: Try to add a new div with class="col" inside the row class - this will create four equal-width columns.</p> -->
                <div class="row">
                    <div class="col p-3 bg-primary text-white">Serial no.</div>
                    <div class="col p-3 bg-primary text-white">Game Name</div>
                    <div class="col p-3 bg-primary text-white">Genre</div>
                    <div class="col p-3 bg-primary text-white">Date</div>
                    <div class="col p-3 bg-primary text-white">Description</div>
                    <div class="col p-3 bg-primary text-white">Price</div>
                    <div class="col p-3 bg-primary text-white">Photo 1</div>
                    <div class="col p-3 bg-primary text-white">Photo 2</div>
                    <div class="col p-3 bg-primary text-white">Photo 3</div>
                    <div class="col p-3 bg-primary text-white">Exe file</div>
                    <div class="col p-3 bg-primary text-white">Actions</div>
                </div>

                <?php
                while ($row = $r->fetch_array()) {
                    echo ' <div class="row">
              <div class="col p-3 bg-dark text-white">' . $row[0] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[1] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[2] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[4] . '</div>
              <div class="col p-3 bg-dark text-white text single-line" style=" overflow: hidden;
              text-overflow: ellipsis;
              white-space: nowrap;">' . $row[5] . ' </div>
              <div class="col p-3 bg-dark text-white">' . $row[6] . '</div>
              <div class="col p-3 bg-dark text-white"><img style="width: 50px; height: 50px;"src="upload/' . $row[7] . '" /></div>
              <div class="col p-3 bg-dark text-white"><img style="width: 50px; height: 50px;"src="upload/' . $row[8] . '" /></div>
              <div class="col p-3 bg-dark text-white"><img style="width: 50px; height: 50px;"src="upload/' . $row[9] . '" /></div>
              <div class="col p-3 bg-dark text-white"><button class ="btn btn-info"><a href="upload/'.$row[10].'"class ="text-light"> Download</a></button> </div>
              <div class="col p-3 bg-dark text-white"><button class ="btn btn-primary"> <a href="editgame1.php?edit='.$row[0].'" class ="text-light"> Edit</a></button> <button class ="btn btn-danger"><a href="delete.php?deleteid='.$row[0].'"class ="text-light"> Delete</a></button> </div>
            </div>';
                }
                ?>

            </div>



        </div>
    </div>

</body>

</html>