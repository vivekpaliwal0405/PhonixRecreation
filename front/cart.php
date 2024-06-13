<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:from.php");
}
$con = new mysqli("localhost", "root", "", "phoenixrecreation");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoneix Recreation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="globle.css">
    <link rel="shortcut icon" href="img/dsBuffer.bmp.png" type="image/x-icon">>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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


body {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}

.cart-items {
  margin-bottom: 20px;
}

.cart-item {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
  display: flex;
}

.cart-item img {
  
  height: auto;
  vertical-align: middle;
  margin-right: 10px;
}

.cart-item-details {
  display: inline-block;
  vertical-align: middle;
}

.cart-item-details p {
  margin: 5px 0;
}

.total-price {
  text-align: center;
  font-size: 18px;
  margin-bottom: 20px;
}

.checkout-btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  display: block;
  margin: 0 auto;
}

.checkout-btn:hover {
  background-color: #45a049;
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
        
        <div class="container filter flex" style="padding-top: 50px; padding-bottom: 50px; ">
          
        </div>
        <h1>Shopping Cart</h1>
       
        <div class="cart-items" style="width: 700px; margin: 0 auto; padding-top: 100px; padding-bottom: 80px;">
            <?php
if(isset($_SESSION['id'])  ){
    if(isset($_GET['message'])){
        echo"item have been removed ";
    }
    $id=$_SESSION['id'];
    if(isset($_GET['game_id'])){
    $game_id=$_GET['game_id'];
    $wr = $con->query("insert into cart(user_id,game_id) values ('$id','$game_id')");

    echo "product have been added to the cart";}

$r = $con->query("select * from cart where user_id = $id");

              while ($row = $r->fetch_array()) { 
                  $rr = $con->query("select * from addgame where id= ".$row[2]."");
                  $brow = $rr->fetch_array();
                //   $query_run = mysqli_query($con, $query);
                //   $roww=$query_run->fetch_row();
                echo ' <div class="cart-item">
                <img src="../admin_login/upload/'.$brow[7].' " alt="Product 1" style="width: 300px;">
                <div class="cart-item-details">
                  <p><strong>'.$brow[1].' </strong></p>
                  <p>Price: '.$brow[6].'</p>
                  <p><strong>Description:</strong>  '.$brow[5].' </p>
                  <p><strong>Genre:</strong>  '.$brow[2].'</p>
                  <p><strong>Release Date:</strong> '.$brow[4].'</p>
                  <button class ="btn btn-danger"><a href="deletecart.php?deleteid='.$row[0].'"class ="text-light"> Delete</a></button>
                </div>
              </div>';
              }
              }
            //   else{
            //     header("location:from.php");
            //   }
        ?>
 
<!-- <button class="checkout-btn">Checkout</button> -->

<form action="checkout.php" method="post">
<input class="checkout-btn" value="Checkout" name="checkout" type="submit"/>
</form>


</div>

    </main>


    <footer>
       
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