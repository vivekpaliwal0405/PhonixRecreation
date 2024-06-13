<?php
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from addgame");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
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
        <div class="content">
            <div class="cards" style="display: inline-grid; column-gap: 30px; row-gap: 30px; grid-template-columns: auto auto auto; backdrop-filter: blur(2px);">
              <?php
              while ($row = $r->fetch_array()) {
                  echo '<div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="">
                      <img src="upload/' . $row[7] . '" class="img-fluid rounded-start" alt="..." style="width: 100%; height: 200px; object-fit: cover; border-radius: 0px; object-position: center top; ">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> '.$row[1].'</h5>
                        <p class="card-text">'.$row[5].'.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>';
              }
              ?>

            
            </div>
        </div>
        </div>

            
</body>
</html>