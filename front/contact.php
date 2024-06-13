<?php
session_start();
$con = new mysqli("localhost", "root", "", "phoenixrecreation");
$r = $con->query("select * from addgame");
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




    .abc {
      border: 1px rgb(0, 0, 0, 0.2) solid;
      font-size: 20px;
      padding: 10px;
      border-radius: 3px;
    }

    .separator{
      width: 100px;
      height: 5px;
      background-color: blueviolet;
      border-top-left-radius: 100px;
      border-top-right-radius: 100px;
      border-bottom-right-radius: 100px;
      border-bottom-left-radius: 100px;
    }

    .title{
      font-size: 35px;
    }

    .inputs{
      display: flex;
      gap: 20px;
      flex-direction: column;
    }

    .contact-form{
      display: flex;
      flex-direction: column;
      gap: 40px
    }
    
    .button sub{
      background-color: blueviolet;
      border: none;
      border-radius: 5px;
      color: white;
      padding-top: 5px;
      padding-bottom: 5px;
    }
   
        </style>   
</head>

<body>
    <header style="margin-bottom: 30px; height: 200px; background: black!important;">
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
                   <button id='myButton2' class='float-left submit-button'> My games</button><button> Welcome ".$grow['firstname']." ".$grow['lastname']."</button>
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
   

</div>
    <br />
    <h1 style='text-align:center'>Contact Us</h1>
    <br />
    <hr />
    <div class="d-flex flex-row justify-content-around">
      <div class='contact-form'>
        <div class='head-con'>
          <div class='title'>
            Contact us
          </div>
          <div class='separator'></div>
          <div class='desc'>
            Reach out to us for any enquiry
          </div>
        </div>
        <form action="uploadcontactus.php" method="POST">
        <div class="inputs">
          <div>
            <input type="text" placeholder='Full name' name="name" class="abc">
          </div>
          <div>
            <input type="email" placeholder='Email' name="email" class="abc">
          </div>
          <div>
            <input type="text" placeholder='Message' name="message" class="abc" style="height: 120px;" >
          </div>
        </div>
          <button class='button sub' style="padding-top: 5px;">Submit</button>
      </div>
                </form>
      <div class="col-sm-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3627.832915977968!2d73.7284633751431!3d24.594961878103476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smlsu!5e0!3m2!1sen!2sin!4v1712377478330!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <br /><Br />
      </div>
    



    </main>


    <footer style="margin-top: 40px;">
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


    <!-- <script src="script.js"></script> -->
</body>

</html>