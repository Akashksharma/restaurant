<?php
include("conection.php");
include("dropdown.php");
$query = "SELECT * FROM orders";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
?>
<?php

// Check status from URL
if(isset($_GET['status'])){
    $status = $_GET['status'];

    $query = "SELECT * FROM orders WHERE status='$status'";
}else{
    $query = "SELECT * FROM orders";
}

$data = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
  
    <title>Order Display</title>
</head>

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Lato", sans-serif;
        background: #f4f4f4;
    }

    h1{
        margin-top:20px;
        color:#333;
    }

    h2{
        color:#555;
    }

    /* Main content */
    .main {
        margin-left: 200px; 
        padding: 20px;
        min-height: 100vh;
    }

    table{

        width:100%; 
        max-width: 1200px;
        margin: 40px auto;
        border-collapse: collapse;
        background:white;
        box-shadow:0px 10px 20px rgba(0,0,0,0.2);
        border-radius:5px;
        overflow:hidden;
    
    }

    th{
        background:linear-gradient(to right, orange, green);
        color:white;
        padding:12px;
        text-transform: uppercase;
    }

    td{
        border: 1px solid #000; 
        padding:10px;
        text-align:center;
        border-bottom:1px solid #ddd;
        word-wrap: break-word;
        /*max-width:200px;*/
        white-space: normal;  
    }

    td:last-child{
        /*max-width:250px;*/
        white-space: pre-wrap;
        word-break: break-word;
        white-space: nowrap; 
    }
td:nth-child(5){
    width: 250px;
    white-space: normal;
    word-break: break-word;
    overflow-wrap:anywhere;
}
    tr:hover{
        background:#f1f1f1;
    }

    tr:nth-child(even){
        background:#fafafa;
    }
.status_btn,.dlt_btn{
    display: inline-block;
    padding: 5px 10px;   
    font-size: 13px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    margin: 2px; 
       
}


.status_btn{
    background-color: green;
}


.dlt_btn{
    background-color: red;
}

</style>

<body>

    <div class="main">
        <center>
            <h1>All Order</h1>
            <h2>Display All Order</h2>

            <?php if ($total != 0) { ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Table</th>
                    <th>Items</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Operation</th>
                </tr>
                <?php while ($result = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $result['S_no']; ?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['phone']; ?></td>
                        <td><?php echo $result['table_no']; ?></td>
                        <td><?php echo $result['items']; ?></td>
                        <td><?php echo $result['message']; ?></td>
                        <td><?php echo $result['status']; ?></td>

                        <td>
                             <a href="order_status.php?id=<?= $result['S_no']; ?>" class="status_btn">Status</a>


    <a href="order_delete.php?id=<?= $result['S_no']; ?>" class="dlt_btn" onclick="return checkdelet()">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <?php } else {
                echo "<h2 style='text-align:center;color:red;'>No Record Found</h2>";
            } ?>
        </center>
    </div>

</body>
</html>
<script>
    function checkdelet() {
      return confirm('Are You Sure You Want To Delete This Recode ?');
    }
</script>


