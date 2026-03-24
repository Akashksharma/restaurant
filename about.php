<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About us</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<style>
        .pacifico-regular {
  font-family: "Pacifico", cursive;
  font-weight: 400;
  font-style: normal;
}
body{
    margin:0;
    font-family: Arial, sans-serif;
     background:#ddd;

/* page layout */

.container{
    display:flex;
    height:400px;
}

.left{
    width:50%;
    padding:40px;
    text-align: center;
}
.left .logo img{
    width:50%;
    text-align: center;
}

.right{
    width:50%;
    height:500px;
    
    padding:40px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.right img{
    width:100%;
    height:auto;
}
hr{
    border: none;
    border-top: 3px dashed darkgreen;
    width: 50%;
}

.outer{
    width:65%;
    height: 230px;
    margin:auto;
    display:flex;             
    justify-content:space-around;
}

.member{
    text-align:center;
}

.member img{
    width:210px;
    height:180px;
    border-radius:10px;
}

.member p{
    margin-top:10px;
    font-weight:bold;
    color:#333;
}
.chef-section{
    width:80%;
    margin:50px auto;
}

/* Each row */
.chef-box{
    display:flex;
    align-items:center;
    gap:30px;
    margin-bottom:40px;
}

/* Reverse for alternate layout */
.chef-box.reverse{
    flex-direction: row-reverse;
}

/* Image */
.chef-img img{
    width:250px;
    height:200px;
    object-fit:cover;
    border-radius:10px;
    box-shadow:0px 8px 20px rgba(0,0,0,0.3);
}

/* Text */
.chef-text{
    flex:1;
}

.chef-text h3{
    color:green;
    margin-bottom:10px;
}

.chef-text p{
    color:#333;
    line-height:1.6;
}
	</style>

<?php
        include("navbar.php");
?>
<!-- THIS IS HERO SECTION -->

<div class="container">

<div class="left">
<h1 class="pacifico-regular"> <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:green">About</span>
	<span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:orange;">Us</span></h1>
<p class="pacifico-regular">Enjoy fresh, tasty food and a great dining experience with us!</p>
<br>
<div class="logo">
	<img src="image/about.png">
</div>

</div>
<div class="right">
	<img src="image/hero.png">
</div>
</div>
<br>
<br>
<br>
<center>
<h1 class="pacifico-regular">Our Team Member</h1>
<hr>
<br>
<div class="outer">

    <div class="member">
        <img src="image/person2.jpg">
        <p>Akash Sharma</p>
    </div>

    <div class="member">
        <img src="image/person2.jpg">
        <p>Anurag Sharma</p>
    </div>

</div>
<h1 class="pacifico-regular">Our Chef's</h1>
<hr>
<br>
<br>
<div class="chef-section">

    <!-- Chef 1 -->
    <div class="chef-box">
        <div class="chef-img">
            <img src="image/sticker.jpg">
        </div>

        <div class="chef-text">
            <h3>Chef John Doe</h3>
            <p>
                Our head chef has over 10 years of experience in creating delicious 
                and unique dishes. He is passionate about using fresh ingredients 
                and traditional recipes to deliver the best taste to our customers.
            </p>
        </div>
    </div>

    <!-- Chef 2 -->
    <div class="chef-box reverse">
        <div class="chef-img">
            <img src="image/sticker.jpg">
        </div>

        <div class="chef-text">
            <h3>Chef Maria Smith</h3>
            <p>
                Chef Maria specializes in desserts and bakery items. Her creativity 
                and dedication bring sweetness and happiness to every plate she prepares.
            </p>
        </div>
    </div>

</div>
</center>
<br>
<br>
<?php
        include("news.php");
?>
<br>
<?php
        include("footer.php");
?>
</body>
</html>