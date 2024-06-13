<?php
session_start();
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from addgame");
if(isset($_SESSION['id'])){


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoneix Recreation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="globle.css">
    <link rel="shortcut icon" href="img/dsBuffer.bmp.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
ul li ul.dropdown{
        min-width: 200px; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
        color: black;
        padding: 10px;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
    ul li ul.dropdown li a{
        color: black;
    }
        </style>     
</head>

<body>
    <header style="height: 200px; background: black!important;">
        <nav class="container">
            <div class="nav1 flex">
                <div class="icons flex">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-google-plus-g"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitch"></i>
                </div>
                <?php
                if(isset($_SESSION['id'])){
                    $id=$_SESSION['id'];
                    $sql = "SELECT  firstname,lastname FROM usersignup WHERE id='$id' ";
                    $result = mysqli_query($con, $sql);
                    $grow = mysqli_fetch_assoc($result);
                    echo "<div class='lsbtn flex'>
                    <button id='myButton2' class='float-left submit-button'>My Games</button><button> Welcome ".$grow['firstname']." ".$grow['lastname']."</button>
                    <script type='text/javascript'>
                    document.getElementById('myButton2').onclick = function () {
                        location.href = 'mygames.php';
                    };
                </script>
                </div>";
                }
                else{
                    echo" <div class='lsbtn flex'>
                    <button id='myButton' class='float-left submit-button' >Login</button>
                    <button id='myButton1' class='float-left submit-button' >Sign Up</button>

<script type='text/javascript'>
    document.getElementById('myButton').onclick = function () {
        location.href = 'from.php';
    };
</script>
<script type='text/javascript'>
    document.getElementById('myButton1').onclick = function () {
        location.href = 'from.php';
    };
</script>
                </div>";
                }
                ?>


            </div>
            <div class="mainnav flex">
                <div class="logo">
                    <h1><a href="/">PHONEIX<span>RECREATION</span></a></h1>
                </div>
                <div class="navlist">
                    <ul class="flex">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="/">About</a></li>
                        <li style="position: relative;"><a href="/">Genre<i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown">
                    <?php
                    $rr=$con->query("select * from gamecate");
              while($row=$rr->fetch_array())
              {
              echo "<li ><a href='genre.php?genre_id=$row[0]'>$row[1]</a></li>";
              }
              ?>  
                        
                    </ul>    
                    </li>
                        <li><a href="allgames.php">All Games</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php 
                        if(isset($_SESSION['id'])){
                          
                      
                        ?>
                        <li><a href="logout.php">Log Out</a></li>
                        <?php
                        }
                        ?>
                        <li><a href="cart.php"> <i class="fa-solid fa-cart-shopping" style="color: #ffffff; "></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
    </header>

    <main>
        
        <div class="container filter flex">
            <h1 style="padding-top: 50px;">ALL GAMES</h1>
            
        </div>
        <div class="gamecards container flex" style="padding: 50px;">
        <?php
              while ($row = $r->fetch_array()) { 
                echo '<div class="card">
                <div class="cardimg">
                    <a href="game.php?game_id='.$row[0].'">
                        <img src="../admin_login/upload/' . $row[7] . '" alt="">
                    </a>
                    <div class="tegs">
                        <a href="/">'.$row[2].'</a>
                        <i class="fa-solid fa-tags"></i>
                    </div>
                </div>
                <div class="cardinfo">
                    <h2>'.$row[1].'</h2>
                    <div class="playteg flex">
                        <i class="fa-solid fa-tv"></i>
                        <h3 class="flex">
                        <span>Launch Date - '.$row[4].'</span>
                        </h3>
                    </div>
                    <div class="playteg flex">
                        <i class="fa-solid fa-rupee-sign"></i>
                        <h3 class="flex">
                        <span>Price - '.$row[6].'</span>
                        </h3>
                    </div>
                    <p style="padding-bottom: 10px;">'.$row[5].'</p>
                    <a  href="cart.php?game_id='.$row[0].'" type="submit" style=" padding: 10px 15px 10px 15px; background-color: #000; color: #ffff;">Add to cart<a/>
                </div>
            </div>
';
              }
        ?>
            
        </div> 
    </main>


    <footer>
        <!--  -->
        <section class="copyrightsec flex">
            <div class="copyright container flex">
                <div class="flex">
                    <h2>Phoneix<span>Recreation</span></h2>
                    <p>Copyright &copy; 2023- All rights reserved.</p>
                </div>
                <ul class="flex">
                    <li><a href="/" class="factive">Home</a></li>
                    <li><a href="/">Help Center</a></li>
                    <li><a href="/">Contact</a></li>
                    <li><a href="/">Terms and Conditions</a></li>
                </ul>
            </div>
        </section>
    </footer>


   
</body>

</html>