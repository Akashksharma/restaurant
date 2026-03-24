
<?php
include("conection.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = "DELETE FROM featured WHERE S_no='$id'";
    mysqli_query($con,$delete);

    header("Location: featured_show.php");
    exit();
}else{
    echo "ID missing!";
}
?>