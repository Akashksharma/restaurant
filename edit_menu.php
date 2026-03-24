<?php
include("conection.php");

$id = $_GET['id'];

// OLD DATA FETCH
$query = "SELECT * FROM menu WHERE S_no='$id'";
$data = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($data);
?>
<?php
include("dropdown.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>


    <style>

body{
    margin: 0;
    padding: 0;
    background:#f5f5f5;
    font-family: Arial;
}

.container{
    width: 350px;
    background:white;
    padding:30px;

    position: fixed;  
    top: 100px;       
    left: 430px;       

    text-align:center;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}
.container input[type="file"]{
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
}

h2{
    margin-bottom:20px;
}

input[type="file"]{
    margin:15px 0;
}

.update{
    background:green;
    color:white;
    padding:10px 20px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.update:hover{
    background:darkgreen;
}
</style>


<div class="container">


<h2>Edit Menu Item</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>

    <input class="update" type="submit" name="update" value="Update">
</form>
</div>
</body>
</html>

<?php
// UPDATE CODE
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $update = "UPDATE menu SET name='$name', price='$price' WHERE S_no='$id'";
    mysqli_query($con,$update);

    header("Location: menu_show.php");
}
?>
