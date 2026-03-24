<?php
include("conection.php");
include("dropdown.php");
$query = "SELECT * FROM news_letter";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>News Letter</title>
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
        width: 95%; 
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
        max-width:200px;
    }

    td:last-child{
        width: 170px;
       
        white-space:nowrap;
    }

    tr:hover{
        background:#f1f1f1;
    }

    tr:nth-child(even){
        background:#fafafa;
    }
    .dlt_btn{
    background-color: red;
    display: inline-block;
    padding: 5px 10px;   
    font-size: 13px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    margin: 2px; 
</style>

<body>

    <div class="main">
        <center>
            <h1>News Letter</h1>
            <h2>Display All News Letter</h2>

            <?php if ($total != 0) { ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Operation</th>
                
                </tr>
                <?php while ($result = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $result['S_no']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td>
                            <a href="news_delete.php?id=<?= $result['S_no']; ?>" class="dlt_btn" onclick="return checkdelete()">Delete</a>
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