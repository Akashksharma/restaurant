<?php
include("conection.php");

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "image/".$filename;

    // Image upload
    if(move_uploaded_file($tempname, $folder)){
        $query = "INSERT INTO menu (image, name, price) VALUES ('$filename','$name', '$price')";
        if(mysqli_query($con, $query)){
            header("Location: menu_add.php?success=1");
            exit();
        } else {
            echo "Database Error: ".mysqli_error($con);
        }
    } else {
        echo "Failed to upload image!";
    }
}
?>
<?php
include("dropdown.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>menu add</title>

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
    top: 20px;       
    left: 430px;       

    text-align:center;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;

}
.container form{
    display: flex;
    flex-direction: column;
    align-items: flex-start; 
}

.container label{
    font-weight: bold;
    margin-bottom: 5px;
}

.container input[type="text"],
.container input[type="number"],
.container input[type="file"]{
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
}

.container .submit{
    align-self: center; 
    width: 50%;
    text-align: center;
}


h2{
    margin-bottom:20px;
}

input[type="file"]{
    margin:15px 0;
}


.submit{
    background:green;
    color:white;
    padding:10px 20px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.submit:hover{
    background:darkgreen;
}
</style>
</head>
<body>
    <div class="container">
         <h1>Menu Items</h1>
   <h2>Add Menu Item</h2>
<form method="POST" enctype="multipart/form-data" onsubmit="return confirmAdd()">
    <label>Dish Name:</label>
    <input type="text" name="name" required>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" required>

    <label>Image:</label>
    <input type="file" name="image" required>

    <input class="submit" type="submit" name="submit" value="Add Menu Item">
</form>
    </div>
</body>
</html>
<script>
function confirmAdd(){
    return confirm("Are You Sure to Add Items Into Menu Items");
}
window.onload = function(){
    const params = new URLSearchParams(window.location.search);
    
    if(params.get("success") === "1"){
        alert("Featured Item Successfully Add ");
        
        // redirect to show page
        window.location.href = "featured_add.php";
    }
}
</script>