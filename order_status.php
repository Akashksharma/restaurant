<?php
include("conection.php");

$id = $_GET['id'];

$query = "SELECT status FROM orders WHERE S_no='$id'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);

$current = $result['status'];

if($current == "Pending"){
    $new = "Completed";
}
elseif($current == "Completed"){
     $new = "Cancelled";
  
}
else{
      $new = "Pending";
}

$update = "UPDATE orders SET status='$new' WHERE S_no='$id'";
mysqli_query($con,$update);

header("Location: order_show.php");

?>