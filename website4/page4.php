<?php 
	session_start();
	$_SESSION['name'] = "Henry";


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div><?php echo "你的名字是：".$_SESSION['name']; ?></div>
 	<a href="page5.php">Go to Page 5</a>
 </body>
 </html>