<?php
   session_start();
   // Start the session
   if(!isset($_SESSION['ID'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['ID'];
?>