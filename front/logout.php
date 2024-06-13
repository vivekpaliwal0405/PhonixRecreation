<?php

session_start();
if(isset($_SESSION['id'])){
unset($_SESSION["id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: from.php");
}

?>