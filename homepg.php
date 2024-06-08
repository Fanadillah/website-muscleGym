<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-sign.css">
 </head>
 <body>
    <h1>Welcome Back, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php" class="a">Logout</a>
 </body>
 </html>    

 <?php
}else{
    header("Location: sign-in.php");
    exit();
}
    ?>