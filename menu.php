<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>menu</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<style>
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
    

}
.container1{
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
    height: auto;
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

.menu_container{
    width: 80%;
    max-width: 1200px;
    margin: 50px auto;
    display: flex;
    flex-wrap: wrap;         
    justify-content:space-around;
}

.menuimg{
    /*border: 2px solid black;*/
    width: 30%;                  
    min-width: 250px; 
    text-align:center;
    padding:10px;
    background:white;
    margin: 15px;
    transition:0.3s;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.3);


}
.menuimg img{
    width:100%;
    height:180px;
    object-fit:cover; 
    border-radius:10px;
}


.menuimg:hover {
    transform: scale(1.1);
}
h3{
    color:red;
}

p{
    font-weight:bold;
}
	</style>

<!--THIS IS NAV BAR -->
<?php
        include("navbar.php");
?>
<!-- THIS IS HERO SECTION -->

<div class="container1">

<div class="left">
<h1 class="pacifico-regular"> <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:green">Our</span>
    <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:orange;">Menu</span></h1>
<p class="pacifico-regular">Discover your favorite dishes from our menu</p>
<br>
<div class="logo">
    <img src="image/chef1.png">
</div>

</div>
<div class="right">
    <img src="image/hero.png">
</div>
</div>
<br>
<br>
<center>
<h2 class="pacifico-regular" style="font-size: 30px;">Menu</h2>
<hr><br>
<div class="menu_container">

<?php
include("conection.php");

$query = "SELECT * FROM menu ORDER BY S_no DESC"; 
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($result)){
    echo "<div class='menuimg'>";
    echo "<img src='image/".$row['image']."' alt='".$row['name']."'>";
    echo "<h3>".$row['name']."</h3>";
    echo "<p>Price: ₹".$row['price']."</p>";
    echo "</div>";
}
?>

</div>
</center>
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