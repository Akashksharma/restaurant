
<?php 
  include("conection.php");
  include("dropdown.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  
  <link rel="stylesheet" type="text/css" href="board.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <div class="container">
          
      <div class="right">
        <center><h1 class="playfair-display"> Admin Dashboard</h1></center>
        <div class="outer_box">
            <div class="iner_box" style="background-color: #EA4335;"><i class="fa-solid fa-envelope"></i>
              <?php
                $query = "SELECT * FROM news_letter";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
                echo "<p style='font-size: 30px;'>".$total."</p>";
              ?>

              <p>News Letter</p></div>
            <div class="iner_box" style="background-color:  #4285F4;"><i class="fa-solid fa-bars"></i>
              <?php
                $query = "SELECT * FROM menu";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
                echo "<p style='font-size: 30px;'>".$total."</p>";
              ?>
              <p>Menu Items</p></div>
            <div class="iner_box" style="background-color: #FBBC04;"><i class="fa-solid fa-circle-info"></i>
                <?php
                $query = "SELECT * FROM orders";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
                echo "<p style='font-size: 30px;'>".$total."</p>";
              ?>
              <p>Order</p></div>
        </div>
          <div class="outer_box">
            <div class="iner_box" style="background-color: #9AA0A6 ;"><i class="fa-regular fa-address-book"></i>

                <?php
                $query = "SELECT * FROM contact";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
                echo "<p style='font-size: 30px;'>".$total."</p>";
              ?>
              <p>Contact Form</p></div>
            <div class="iner_box" style="background-color: #34A853;"><i class="fa-solid fa-bowl-food"></i>
                <?php
                $query = "SELECT * FROM featured";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
                echo "<p style='font-size: 30px;'>".$total."</p>";
              ?>

              <p>Featured Food</p></div>
            <div class="iner_box" style="background-color: #E37400;"><i class="fa-solid fa-arrows-down-to-people"></i><p>Team Member</p></div>
        </div>
      </div>
    </div>
</body>
</html>