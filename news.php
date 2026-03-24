<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>news letter</title>
	    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<style>
		hr{
    border: none;
    border-top: 3px dashed darkgreen;
    width: 50%;

}
		.letter{
    height: 200px;
    background: url(image/bg1.jpg) center/cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.3);
    
}
.letter .News{
    border: 2px solid yellow;
    width: 400px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 40px 0px;
    background-color: rgba(0, 0, 0,0.4);
}
.News input[type="Email"]
{
    width: 200px;
    height: 40px;
    border-radius: 15px;
    border: none;
    text-align: center;
}
.News button{
    background-color:orange;
     border: none;
     border-radius: 10px;
     color: white;
     cursor: pointer;
    width: 100px;
    height: 40px;

}
.News button:hover{
    background-color: green;
}

	</style>
	<center>
		<h2 class="pacifico-regular"style="font-size: 30px;">Join Us for Tasty News & Deals</h2>
<hr>
<div class="letter">
	<div class="News">
	<form action="news_table.php" method="POST">
		
		<input type="email" name="email" placeholder="Enter your Email" required>
		<button type="submit" name="submit">Submit</button>
		
	</form>
	</div>
</div>
</center>
</body>
</html>
