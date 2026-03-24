<?php
include("conection.php");

if(isset($_POST['submit'])){
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    
    $folder = "image/".$filename;

    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO featured (image) VALUES ('$filename')";
    mysqli_query($con,$query);

   header("Location: featured_add.php?success=1");

exit();
}

?>
<?php
include("dropdown.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Featured Item</title>
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

button{
    background:green;
    color:white;
    padding:10px 20px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:darkgreen;
}
</style>



    
       

<div class="container">
     <h1>Featured Food Items</h1>
   <h2>Add Featured Item</h2>

    <form method="POST" enctype="multipart/form-data" onsubmit="return confirmAdd()">
        <label>Image:</label>
        <input type="file" name="image" required><br>
        <button type="submit" name="submit">Upload</button>
    </form>
</div>

</body>
</html>
<script>
function confirmAdd(){
    return confirm("Are You Sure to Add Image Into Featured Food Items");
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