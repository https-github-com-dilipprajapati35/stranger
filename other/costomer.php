<?php
session_start();

if (!isset($_SESSION['login_status'])) {
    echo "login first";
    die;
}
if($_SESSION['login_status']!=true)
{
    echo "Credentials are not Authentiacated";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/costomer.css">
</head>
<body>
    <div class="con1">
        <div class="con">
            <h3>E-commerce</h3>
        <nav>
            <a href="1">Home</a>
            <a href="2">View</a>
            <a href="3">Order</a>
            <input class="search" type="search" placeholder="search...">
            <input class="logout" type="button" value="logout">
        </nav>
        </div>
        
        
        <div class="con2">
        <img class="img1" src="../../image/camera.jpg" alt="">
        <span class="name1">Nikon D7500 20.9 Mp Touchscreen</span>
        <span class="value1">$1999</span>
        <input class="btn1" type="button" value="add to cart">
        <input class="btn2" type="button" value="buy now">
        </div>
        <div class="con3">
        <img class="img2" src="../../image/airpods.jpg" alt="">
        <span class="name2">Apple Airpods Pro White</span>
        <span class="value2">$1999</span>
        <input class="btn3" type="button" value="add to cart">
        <input class="btn4" type="button" value="buy now">
        </div>
        <div class="con4">
        <img class="img3" src="../../image/display.jpeg" alt="">
        <span class="name3">Apple iMac Retina 5K 27"</span>
        <span class="value3">$1999</span>
        <input class="btn5" type="button" value="add to cart">
        <input class="btn6" type="button" value="buy now">
        </div>
    </div>
    
</body>
</html>
