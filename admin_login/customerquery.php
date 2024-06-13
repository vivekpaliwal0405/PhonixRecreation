<?php
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from contactus");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
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
          
           
                <div class="container-fluid mt-3 gamelist" style="backdrop-filter: blur(5px); ">
                    <h1>Query</h1>
                    <div class="row">
                        <!-- <div class="col p-3 bg-dark text-white">S.NO.</div> -->
                        <div class="col p-3 bg-danger text-white">Serial no.</div>
                        <div class="col p-3 bg-danger text-white">Name</div>
                        <div class="col p-3 bg-danger text-white">Email</div>
                        <div class="col p-3 bg-danger text-white">Message</div>
                    </div>
                    
                    <?php
                while ($row = $r->fetch_array()) {
                    echo ' <div class="row">
     
              <div class="col p-3 bg-dark text-white">' . $row[0] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[1] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[2] . '</div>
              <div class="col p-3 bg-dark text-white">' . $row[3] . '</div>
            </div>';
                }
                ?>

                
            </div>
        <div>
</body>

</html>