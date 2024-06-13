<?php
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from gamecate");
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
            <div class=category>
                <form action="gamecaetgoryupload.php" method="post">
                    <div>
                        <H2>GAME CATEGORIES</H2>
                    </div>
                    <div>
                        <tr>
                            <td>Category Name: </td>
                            <input type="text" id="categoryName" name="name" required><br><br>
                        </tr>
                        <button onclick="addCat()">Add Category</Button>
                    </div>
                </form>
            </div>
            <div class="gamecategory">
                <div class="container-fluid mt-3 gamelist">
                    <h1>All CATEGORIES</h1>
                    <div class="row">
                        <!-- <div class="col p-3 bg-dark text-white">S.NO.</div> -->
                        <div class="col p-3 bg-primary text-white">Categories</div>
                        <div class="col p-3 bg-primary text-white">Actions</div>
                    </div>
                    
                    <?php
                while ($row = $r->fetch_array()) {
                    echo ' <div class="row">
     
              <div class="col p-3 bg-dark text-white">' . $row[1] . '</div>
              <div class="col p-3 bg-dark text-white"><button class ="btn btn-danger"><a href="delete.php?deleteid='.$row[0].'"class ="text-light"> Delete</a></button> </div>
            </div>';
                }
                ?>

                </div>
            </div>
        <div>
</body>

</html>