
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dropdown</title>
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

    .sidenav {
        height: 100vh; 
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    
    .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    .sidenav a:hover, .dropdown-btn:hover {
        color: #f1f1f1;
    }

    .active {
        background-color: green;
        color: white;
    }

    .dropdown-container {
        display: none;
        background-color: #262626;
        padding-left: 8px;
    }

    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
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
        padding:10px;
        text-align:center;
        border-bottom:1px solid #ddd;
        word-wrap: break-word;
        max-width:200px;
    }

    td:last-child{
        max-width:250px;
        white-space: pre-wrap;
    }

    tr:hover{
        background:#f1f1f1;
    }

    tr:nth-child(even){
        background:#fafafa;
    }
</style>

<body>
    <div class="sidenav">
        <a href="dashboard.php">Dashboard</a>
        <a href="contact_show.php">Contact Form</a>
        
        <button class="dropdown-btn">News Letter
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="news_show.php">Show</a>
        </div>
        <button class="dropdown-btn">Team Members
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Show</a>
            <a href="#">Add</a>
            <a href="#">Update</a>
        </div>
        <button class="dropdown-btn">Menu Items
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="menu_show.php">Show</a>
            <a href="menu_add.php">Add</a>
            <a href="menu_update.php">Update</a>
        </div>
        <button class="dropdown-btn">Order
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="order_show.php">Show</a>
            <a href="order_show.php?status=Pending">Pending</a>
            <a href="order_show.php?status=Completed">Completed</a>
            <a href="order_show.php?status=Cancelled">Cancelled</a>
        </div>
       <button class="dropdown-btn">Featured Food 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="featured_show.php">Show</a>
            <a href="featured_add.php">Add</a>
        </div>
        <button class="dropdown-btn">Profile
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Change Password</a>
            <a href="#">Logout</a>
        </div>
    </div>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
for (var i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
  });
}
</script>
</body>
</html>