<?php
session_start();
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from addgame LIMIT 4");
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
    <header >
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
                    <h1><a href="#">PHONEIX<span>RECREATION </span></a></h1>
                </div>
                <div class="navlist">
                    <ul class="flex">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="#">About</a></li>
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
        <div class="headercont container flex">
            <div class="labels flex">
                <div class="flex">
                    <i class="fa-solid fa-tv"></i>
                    <h3 class="flex">
                        <a href="#">Computer</a>
                        <span>,</span>
                        <a href="#">STEAM</a>
                    </h3>
                </div>
                <div class="flex">
                    <i class="fa-solid fa-tags"></i>
                    <h3 class="flex">
                        <a href="#">ACTION</a>
                        <span>,</span>
                        <a href="#">ADVANTURE</a>
                    </h3>
                </div>
            </div>
            <h1 id="header_title" >GTA 5</h1>
            <p><br>
        <br><br></p>
            <div class="headbtn flex">
                <a href="allgames.php" id="d_btn1"><button class="button type2"></button></a>
            </div>
        </div>
        <div class="dots flex">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </header>

    <main>
        
        <div class="container filter flex">
            <button class="active">ALL GAMES</button>
          
        </div>
        <div class="gamecards container flex">
        <?php
              while ($row = $r->fetch_array()) { 
                echo '<div class="card">
                <div class="cardimg">
                    <a href="/">
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
        <div class="allgamebtn flex container">
            <a href="allgames.php">
                <button>ALL GAMES</button>
            </a>
        </div>
        <div class="gamesearch flex">
            <div class="container flex">
                <h2>GAME SEARCH</h2>
                <form action="search.php" method="GET" class="flex">
                    <input type="text"  name="keyword" placeholder="keyword">
                    
                    <select name="genre" id="">
                        <option value="">Genre</option>
                        <?php
                        $pr=$con->query("select * from gamecate");
              while($prow=$pr->fetch_array())
              {
              echo "<option value='$prow[0]'>$prow[1]</option>";
              }
              ?> 
                    </select>
                   
                    <button type="submit">SEARCH</button>
                </form>
            </div>
        </div>
        <div class="newrelesed flex">
            <div class="container">
                <div class="newretitle">
                    <h2>Forza horizon 5</h2>
                    <h2>Is released!</h2>
                </div>
                <p>Forza Horizon 5 is a 2021 racing video game developed by Playground Games and published by Xbox Game Studios. It is the fifth Forza Horizon title and twelfth main instalment in the Forza series. The game is set in a fictionalised representation of Mexico</p>
                <div class="flex">
                    <a href="#">read more</a>
                    <a href="allgames.php">buy now</a>
                </div>
            </div>
        </div>
        <div class="featuredgames container flex">
            <h2>Latest&nbsp;<span>games</span></h2>
            <div class="fgamescards flex">
            <?php
            $rr = $con->query("select * from addgame order by releasedate desc LIMIT 6");
              while ($rrow = $rr->fetch_array()) {  
                    echo '<div class="fcard">
                    <img src="../admin_login/upload/' . $rrow[7] . '" alt="">
                    <div class="fcarddetails">
                        <h2>'.$rrow[1].'</h2>
                        <div class="tegs2 flex">
                            <div class="teg flex">
                                <i class="fa-solid fa-tv"></i>
                                <h3 class="flex">
                                    <a href="/">'.$rrow[2].'</a>
                                </h3>
                            </div>
                            <div class="teg flex">
                                <i class="fa-solid fa-tags"></i>
                                <h3 class="flex">
                                    <a href="/">'.$rrow[4].'</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="fhovercont">
                        <h2>'.$rrow[1].'</h2>
                    </div>
                </div>'; 

              }?>
              
            </div>
        </div>
       
        <div class="socialicons flex container">
            <div class="social">
                <i class="fa-brands fa-facebook-f"></i>
                <h3>facebook</h3>
            </div>
            <div class="social">
                <i class="fa-brands fa-twitter"></i>
                <h3>twiiter</h3>
            </div>
            <div class="social">
                <i class="fa-brands fa-google-plus-g"></i>
                <h3>google plus</h3>
            </div>
            <div class="social">
                <i class="fa-brands fa-youtube"></i>
                <h3>youtube</h3>
            </div>
            <div class="social">
                <i class="fa-brands fa-instagram"></i>
                <h3>instagram</h3>
            </div>
            <div class="social">
                <i class="fa-brands fa-twitch"></i>
                <h3>twitch</h3>
            </div>
        </div>
    </main>


    <footer>
        <section class="footersec container flex">
            <div class="footerh2 flex">
                <h2>about&nbsp;<span>us</span></h2>
                <h2>apps&nbsp;<span>& platforms</span></h2>
            </div>
            <div class="flex footermenu">
                <div class="faboutus">
                    <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat doloribus voluptates, possimus quos dolorem animi sit nulla cumque eaque ipsa.</p> -->
                    <div class="flex">
                        <ul class="flex">
                            <li><a href="index.php"><i class="fa-solid fa-caret-right"></i>Home</a></li>
                            <li><a href="allgames.php"><i class="fa-solid fa-caret-right"></i>Games</a></li>
                            <li><a href="genre.php"><i class="fa-solid fa-caret-right"></i>Genre</a></li>
                            <li><a href="contact.php"><i class="fa-solid fa-caret-right"></i>Contact</a></li>
                        </ul>
                        
                    </div>
                </div>
              
                <div class="appsec">
                    <div class="platform flex">
                        <div class="apps flex">
                            <i class="fa-brands fa-apple"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Apple Store</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-google-play"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Google Play</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-steam"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Steam</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-windows"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>windows</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-amazon"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Amezon</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-paypal"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Paypal</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyrightsec flex">
            <div class="copyright container flex">
                <div class="flex">
                    <h2>Phoneix<span>Recreation</span></h2>
                    <p>Copyright &copy; 2024- All rights reserved.</p>
                </div>
                <ul class="flex">
                    <li><a href="#" class="factive">Home</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
        </section>
    </footer>


    <script src="fascript.js"></script>
</body>

</html>