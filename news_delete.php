<?php
include("conection.php");

$id = $_GET['id'];
$query = "DELETE FROM news_letter WHERE S_no='$id'";
$data = mysqli_query($con,$query);
if($data)
{
	?>
	<meta http-equiv="refresh" content="0;url=http://localhost/restaurante1/news_show.php#" >
<?php
}
else
{
	echo "failed";
}
?>