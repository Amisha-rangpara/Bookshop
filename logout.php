<?php
   session_start();

   if(session_destroy()) {
      header("Location: login.php");
      header("Location: index.php");
      exit();
      //header("Location: menu.php");
   }
   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Example</title>
    <link rel="stylesheet" href="/bookshop/design/css/bootstrap.css"> <!-- Optional Bootstrap for styling -->
</head>
<body>
    <div class="container">
        <!-- Other content -->

        <!-- Logout Button -->
       

        <!-- Alternatively, a form with a button -->
        <!--
        <form method="post" action="logout.php">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
-->
    </div>

    <!-- <script src="/bookshop/design/js/bootstrap.bundle.js"></script> Optional Bootstrap JS for functionality -->
</body>
</html>