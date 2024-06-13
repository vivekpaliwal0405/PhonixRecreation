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
    <link rel="shortcut icon" href="img/dsBuffer.bmp.png" type="image/x-icon">
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
    <header  style="height: 200px; background: black!important;">
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
                    <button id='myButton2' class='float-left submit-button'> My Games</button>
                    <button> Welcome ".$grow['firstname']." ".$grow['lastname']."</button>
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
                        if(!isset($_SESSION['id'])){
                          
                      
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
        
        <div class="container filter flex" style="padding-top: 100px; padding-bottom: 300px; ">
           
            <?php 
if(isset($_POST['checkout'])){
  $tr = $con->query("select * from cart WHERE user_id=$id ");
                
  while ($trow = $tr->fetch_array()) { 
      $cart_id = $trow[0];
      $game_id = $trow[2];
  $cr = $con->query("insert into z_orders(user_id,cart_id,game_id) values ('$id','$cart_id','$game_id')");
}
$cr = $con->query("delete from cart WHERE user_id=$id ");
echo"<h1>your order have been submitted </h1>";

}
?>
        </div>
        <!-- <h1>Shopping Cart</h1> -->
       
 

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