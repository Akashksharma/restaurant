<?php
include("conection.php");

if(isset($_POST['submit']))
{
    $email = $_POST['email'];

    $query ="INSERT INTO news_letter(email) values ('$email')";
    $data = mysqli_query($con,$query);

    if($data){
        echo "<script>alert('Data Inserted into Data Base')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/restaurante1/contact.php" >
    }

<?php
}
    else{
        echo "failed";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Form actually submitted";
}
}
?>