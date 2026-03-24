<?php
include("conection.php");

$query = "SELECT * FROM menu";
$data = mysqli_query($con,$query);
?>
<?php
include("dropdown.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Featured Items</title>

<style>
body{
    font-family: Arial;
    background:#f5f5f5;
    margin:0;
    padding:0;
}

/* Heading */
h2{
    text-align:center;
    margin-top:50px;
    margin-left: 200px;
}

/* Container */
.gallery{
    margin-left: 200px;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    padding:20px;
}

/* Card */
.card{
    background:white;
    margin:15px;
    padding:15px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.2);
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

/* Image */
.card img{
    width:200px;
    height:150px;
    border-radius:10px;
    object-fit:cover;
    display: flex;
}

/* Button */
.delete-btn{
    margin-top:10px;
    padding:8px 15px;
    border:none;
    background:red;
    color:white;
    border-radius:5px;
    cursor:pointer;
}
h3{
    color:red;
}

p{
    font-weight:bold;
}

</style>

</head>

<body>

<h2>Display Menu Items</h2>

<div class="gallery">
<?php
while($row = mysqli_fetch_assoc($data)){

    // check image empty na ho
    if(!empty($row['image']) && file_exists("image/".$row['image'])){
?>
    <div class="card">
        <img src="image/<?php echo $row['image']; ?>">
         <?php echo "<h3>".$row['name']."</h3>"; ?>
         <?php echo "<p>Price: ₹".$row['price']."</p>"; ?>

         <a href="edit_menu.php?id=<?php echo $row['S_no']; ?>">
    <button style="background:green; color:white; padding:8px 15px; border:none; border-radius:5px; margin-bottom:5px; cursor:pointer;" >
        Update
    </button></a>

         <a href="menu_delete.php?id=<?php echo $row['S_no']; ?>" 
           onclick="return confirm('Are you sure delete this food?')">
            <button class="delete-btn">Delete</button>
        </a>
    </div>
<?php 
    }
}
?>

</div>

</body>
</html>