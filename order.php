<?php
if(isset($_GET['success'])){
    echo "<script>alert('Order Submitted Successfully')</script>";
}
?>
<?php
include("conection.php"); 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $table_no = $_POST['table_no'];
    $items = $_POST['food'];
    $items1 = implode(",", $items);
    echo "$items1";
    $message = $_POST['message'];

    $query = "INSERT INTO orders(name,phone,table_no,items,message) 
              VALUES('$name','$phone','$table_no','$items1','$message')";
    
    $data = mysqli_query($con,$query);

    if ($data) {
        header("Location: order.php?success=1"); // 
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
<title>Order Now</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<style>
    <style>
        .pacifico-regular {
  font-family: "Pacifico", cursive;
  font-weight: 400;
  font-style: normal;
}

body{
    margin:0;
    font-family:Arial;
    background:#ddd;

}
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
    width:40%;
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
    width:80%;
    height:auto;
}


/* ORDER FORM */
.order-container{
    max-width:400px;   
    width:100%;
    margin:80px auto;    
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0px 10px 25px rgba(0,0,0,0.2);
}

.order-container input,
.order-container select,
.order-container textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:14px;
    transition:0.3s;
}

.order-container input:focus,
.order-container select:focus,
.order-container textarea:focus{
    border-color:orange;
    outline:none;
    box-shadow:0 0 5px rgba(255,165,0,0.5);
}

/* Food items */
.order-container .food-items{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:10px;
    margin:10px 0;
}

.order-container .food-items label{
    background:#f9f9f9;
    padding:8px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

.order-container .food-items label:hover{
    background:#ffe0b3;
}

.order-container button{
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

.order-container button:hover{
    transform:scale(1.05);
}


</style>

<body>
<!--THIS IS NAV BAR -->
<?php
        include("navbar.php");
?>
<!-- THIS IS HERO SECTION -->

<div class="container">

<div class="left">
<h1 class="pacifico-regular"> <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:green">Order</span>
    <span style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:black;color:orange;">Now</span></h1>
<p class="pacifico-regular">Pick your favorite dishes and enjoy your meal</p>
<br>
<div class="logo">
    <img src="image/chef2.png">
</div>

</div>
<div class="right">
    <img src="image/hero.png">
</div>
</div>
<br>
<br>

<center>
<div class="order-container">

<h2 class="pacifico-regular">Order Your Favorite Food</h2>

<form action="#" method="POST" onsubmit="return validateForm()">

<input id="name" type="text" name="name" placeholder="Your Name" required>

<input id="phone" type="tel" name="phone" placeholder="Phone Number" required>

<h3>Select Table</h3>

<select name="table_no" required>
<option value="not select">-- Select Table Number --</option>
<option value="1">Table 1</option>
<option value="2">Table 2</option>
<option value="3">Table 3</option>
<option value="4">Table 4</option>
</select>

<h3>Select Food Items</h3>

<div class="food-items">
<label><input type="checkbox" name="food[]" value="Pizza"> 🍕 Pizza</label>

<label><input type="checkbox" name="food[]" value="Dosa"> 🥞 Dosa</label>

<label><input type="checkbox" name="food[]" value="Samosa"> 🥟 Samosa</label>

<label><input type="checkbox" name="food[]" value="Cake"> 🎂 Cake</label>

<label><input type="checkbox" name="food[]" value="Burger"> 🍔 Burger</label>

<label><input type="checkbox" name="food[]" value="Ice Cream"> 🍨 Ice Cream</label>
</div>

<textarea id="message" name="message" rows="4" placeholder="Enter Your Message"></textarea>

<button type="submit" name="submit">Order Now</button>

</form>

</div>
</center>


<?php
        include("news.php");
?>

<!-- FOOTER -->
<?php
        include("footer.php");
?>

<script>
function validateForm() 
{
    let name = document.getElementById('name').value.trim();
    let phone = document.getElementById('phone').value.trim();
    let message = document.getElementById('message').value.trim();
    let table = document.querySelector("select[name='table_no']").value;
    let food = document.querySelectorAll("input[name='food[]']:checked");

    //  Name Validation
    let namePattern = /^[A-Za-z ]+$/;

    if(name === "") {
        alert("Name cannot be empty");
        return false;
    }

    if(name.length < 2) {
        alert("Name too short");
        return false;
    }

    if(name.length > 20) {
        alert("Name too long");
        return false;
    }

    if(!namePattern.test(name)) {
        alert("Only alphabets allowed");
        return false;
    }

    //  Phone Validation
    let phonePattern = /^[6-9][0-9]{9}$/;

    if(phone === "") {
        alert("Phone required");
        return false;
    }

    if(!phonePattern.test(phone)) {
        alert("Invalid phone number");
        return false;
    }

    //  Table Validation
    if(table === "not select") {
        alert("Please select table number");
        return false;
    }

    //  Food Validation
    if(food.length === 0) {
        alert("Select at least one food item");
        return false;
    }

    //  Message Validation
    if(message === "") {
        alert("Message cannot be empty");
        return false;
    }

    if(message.length < 5) {
        alert("Message too short");
        return false;
    }

    if(message.length > 200) {
        alert("Message too long");
        return false;
    }

    return true;
}
</script>

</body>
</html>
