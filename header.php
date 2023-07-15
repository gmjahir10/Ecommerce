<?php 
session_start();
// $login = $_SESSION['login'];
// if (!$login) {
//   header('Location: login.php');
// }

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: login.php');
}

if (isset($_SESSION['username'])) {
  echo "<h3 style='padding:10px'>hello,".$_SESSION['username']."</h3>";
  if(isset($_COOKIE['info'])){
    echo "<p style='padding:10px'>Your device information is ".$_COOKIE['info'] ."<p>". "<br>";
  }
}


 ?>
<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>This is Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<?php 
  if(isset($_SESSION['user_id'])){
    $sql = "SELECT count(*) as count FROM cart where user_id='{$_SESSION['user_id']}'";
    $result = mysqli_query($connect, $sql);
    $output = '';
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      $cartValue = $row['count'];
    }else{
      $cartValue = 0;
    }
    $sql1 = "SELECT count(*) as count FROM wishlist where user_id='{$_SESSION['user_id']}'";
    $result1 = mysqli_query($connect, $sql1);
    $output1 = '';
    if (mysqli_num_rows($result1) > 0) {
      $row1 = mysqli_fetch_array($result1);
      $wishValue = $row1['count'];
    }else{
      $cartValue = 0;
      $wishValue = 0;
    }
  }else{
    $cartValue = 0;
    $wishValue = 0;
  }

 ?>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <li style="float:right;list-style: none;margin-right: 70px;">
    <a href="wishlist.php" >Wishlist (<span id="wishmenu" style="color:red"><?php echo $wishValue; ?></span>)</a>
    <a href="cart.php" >Cart (<span id="cartmenu" style="color:red"><?php echo $cartValue; ?></span>)</a>
    <?php
      if (isset($_SESSION['login'])) {
        echo '<a href="?logout">Logout </a>';
       } else {
        echo '<a href="login.php">Login </a>';
       }
        
    ?>

    
  </li>
</div>