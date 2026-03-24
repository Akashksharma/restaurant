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
</head>
<body>
	<style>
		body{
    margin:0;
    font-family: Arial, sans-serif;
     background:#ddd;
}
nav{
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

nav ul{
    background-color: green;
    list-style:none;
    display:flex;
    justify-content:center;
    margin:0;
    padding:10px;
}

nav ul li{
    margin:0 50px;
    position:relative;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-size:15px;
    padding:7px 10px; 
    display:block;    
}

nav ul li a:hover{
    background:#ff6600;
    border-radius:5px;
}


nav ul ul{
    position:absolute;
    top:100%;
    
    left:50%;                 
    transform:translateX(-50%); 
    
    display:none;
    flex-direction:column;
    min-width:150px;
    background:green;
}


nav ul ul li{
    margin:0;
    display:block;
}



nav ul ul li a{
    display:block;      
    padding:10px 15px;
}


nav ul li:hover > ul{
    display:block;
}

	</style>
	<!-- THIS IS NAV BAR -->
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="#">Food</a>
<ul>
		<li><a href="#">Pizza</a></li>
		<li><a href="#">Samosa</a></li>
		<li><a href="#">Burger</a></li>
		<li><a href="#">Ice Cream</a></li>
		<li><a href="#">Cake</a></li>
        <li><a href="#">Dosa</a></li>
</ul></li>
<li><a href="menu.php">Menu</a></li>
<li><a href="order.php">Order</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>

</body>
</html>