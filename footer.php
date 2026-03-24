<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>footer</title>
</head>
<body>
	<style>
footer{
    background:#222;
    color:white;
    margin-top:40px;
}

.footer-container{
    display:flex;
    justify-content:space-around;
    padding:40px;
    flex-wrap:wrap;
}

.footer-box{
    width:200px;
}

.footer-box h3{
    color:orange;
    margin-bottom:10px;
}

.footer-box ul{
    list-style:none;
    padding:0;
}

.footer-box ul li{
    margin:8px 0;
}

.footer-box ul li a{
    color:white;
    text-decoration:none;
}

.footer-box ul li a:hover{
    color:orange;
}

.footer-bottom{
    text-align:center;
    background:black;
    padding:10px;
}
	</style>

	<!-- This is footer section -->
<footer>
<div class="footer-container">

<div class="footer-box">
<h3>About Us</h3>
<p>Welcome to our restaurant!
We serve delicious and fresh food made with love and quality ingredients. Our goal is to bring people together with tasty meals and a great dining experience. Whether you’re here with friends or family, we make every moment special.</p>
</div>

<div class="footer-box">
<h3>Quick Links</h3>
<ul>

<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="menu.php">Menu</a></li>
<li><a href="order.php">Order</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
<div class="footer-box">
<h3>Follow Us</h3>

<p><i class="fa-brands fa-instagram"></i> Instagram</p>
<p><i class="fa-brands fa-telegram"></i> Telegram</p>
<p><i class="fa-brands fa-facebook"></i> Facebook</p>
<p><i class="fa-brands fa-youtube"></i> YouTube</p>

</div>

<div class="footer-box">
<h3>Contact</h3>
<p>📍 Ghaziabad, India</p>
<p>📞 +91 732088008*</p>
<p>📧 restaurant@email.com</p>
</div>

</div>

<div class="footer-bottom">
<p>© 2026 Restaurant Website | All Rights Reserved</p>
</div>
</footer>

</body>
</html>