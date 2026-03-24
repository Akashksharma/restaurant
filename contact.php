
<?php
if(isset($_GET['success']))
    {
        echo "<script>alert('Data submited')</script>";
    }
?>

<?php
include("conection.php"); 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact(name,phone,email,message) VALUES('$name','$phone','$email','$message')";
    $data = mysqli_query($con,$query);

    if ($data) {
        header("Location: order.php?success=1"); 
        exit();
    }
    else {
        echo "fail: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>    
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<style>
		body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f4f4f4;
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
    width:90%;
    max-width:350px;
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

}

/* Header */
.header{
    color:black;
    text-align:center;
    padding:20px;
}

/* Container */
.container2{
    display:flex;
    flex-wrap:wrap;
    padding:20px;
}

/* Left Side (Form) */
.contact-form{
    flex:1;
    background:white;
    padding:20px;
    margin:10px;
    border-radius:10px;
}

/* Right Side (Info) */
.contact-info{
    flex:1;
    background:white;
    padding:20px;
    margin:10px;
    border-radius:10px;
}

/* Inputs */
.contact-form input,
.contact-form textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:5px;
}

 .contact-form button{
    width:100%;
    padding:12px;
    background:linear-gradient(to right, orange, green);
    border:none;
    color:white;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}
 .contact-form button:hover{
    transform:scale(1.05);
}


/* Social Links */
.social a{
    display:inline-block;
    margin:10px;
    text-decoration:none;
    color:white;
    padding:10px 15px;
    border-radius:5px;
}

.facebook{ background:#3b5998; }
.instagram{ background:#e1306c; }
.youtube{ background:red; }
.telegram{ background:#0088cc; }


	</style>

<?php

	include("navbar.php");
?>

<div class="container1">

<div class="left">
<h1 class="pacifico-regular"> <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:green">Contact</span>
	<span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:orange;">
	Us</span></h1>
<p class="pacifico-regular">Have questions or feedback? Contact us now!</p>
<br>
<div class="logo">
	<img src="image/contact.png">
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
<div class="header">
    <h1 class="pacifico-regular">Contact Us</h1>  
</div>
</center>
<hr>

<div class="container2">

    <!-- Contact Form -->
    <div class="contact-form">
        <h2>Send Message</h2>

        <form action="#" method="POST" onsubmit="return validateForm()">
            <input id="name" type="text" name="name" placeholder="Your Name" required >

             <input  id="phone" type="phone" name="phone" placeholder="Your Phone" required>
            
            
            <input id="email" type="email" name="email" placeholder="Your Email" required>


            <textarea id="message" name="message" rows="5" placeholder="Your Message"></textarea>
            
            <button type="submit" value="submit" name="submit">Send Message</button>
        </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info">
        <h2>Contact Info</h2>
        <p><b>Address:</b> Ghaziabad, Uttar Pradesh, India</p>
        <p><b>Phone:</b> +91 0123456789</p>
        <p><b>Email:</b> letseattogether@gmail.com</p>

        <h3>Follow Us</h3>
        <div class="social">
            <a href="#" class="facebook">Facebook</a>
            <a href="#" class="instagram">Instagram</a>
            <a href="#" class="youtube">YouTube</a>
            <a href="#" class="telegram">Telegram</a>
        </div>
    </div>

</div>

<?php
	include("news.php");
?>
<?php
	include("footer.php");
?>

<script>
function validateForm() 
{
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let phone = document.getElementById('phone').value.trim();
    let message = document.getElementById('message').value.trim();

    // Name Validation
    let namePattern = /^[A-Za-z ]+$/;

    if(name === "") {
        alert("Name cannot be empty");
        return false;
    }

    if(name.length < 2) {
        alert("Name cannot be less than 2 characters");
        return false;
    }

    if(name.length > 20) {
        alert("Name cannot be more than 20 characters");
        return false;
    }

    if(!namePattern.test(name)) {
        alert("Name must contain only alphabets");
        return false;
    }

    // Email Validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(email === "") {
        alert("Email cannot be empty");
        return false;
    }

    if(!emailPattern.test(email)) {
        alert("Enter valid email address");
        return false;
    }

    //  Phone Validation (India)
    let phonePattern = /^[6-9][0-9]{9}$/;

    if(phone === "") {
        alert("Phone number cannot be empty");
        return false;
    }

    if(!phonePattern.test(phone)) {
        alert("Enter valid 10-digit Indian phone number");
        return false;

    }
      //  Message Validation
    if(message === "") {
        alert("Message cannot be empty");
        return false;
    }

    if(message.length < 5) {
        alert("Message must be at least 5 characters");
        return false;
    }

    if(message.length > 200) {
        alert("Message cannot be more than 200 characters");
        return false;

    return true;
}
</script>

</body>
</html>
