<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>restaurante</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<!--THIS IS NAV BAR -->
<?php
		include("navbar.php");
?>

<!-- THIS IS HERO SECTION -->

<div class="container">

<div class="left">
<h1 class="pacifico-regular"> <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:green">Let's </span>Eat
	<span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:orange;">
	Together</span></h1>
<p class="pacifico-regular">Good Food, Good Mood 😋</p>
<br>
<a href="menu.php">
<button style="background-color: orange; margin-right: 10px;">View More</button>
</a>
<a href="order.php">
<button style="background-color: green; margin-left: 10px;">Order Now</button>
</a>

<div class="logo">
	<img src="image/logo.png">
</div>

</div>

<div class="right">
	<img src="image/hero.png">
</div>

</div>
<br>
<br>
<br>

<!-- THIS IS Featured Food SECTION -->
<?php
include("conection.php");

$query = "SELECT * FROM featured";
$data = mysqli_query($con,$query);
?>

<center>
<h2 class="pacifico-regular" style="font-size: 30px;">Featured Food Items</h2>
<hr>
<br>

<div class="outer">

<?php
while($row = mysqli_fetch_assoc($data)){
?>
    <div class="image">
        <img src="image/<?php echo $row['image']; ?>">
    </div>
<?php } ?>

</div>
</center>
<?php
		include("news.php");
?>
 
<?php
		include("footer.php");
?>

</body>
</html>