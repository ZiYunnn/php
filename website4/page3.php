<?php 
	session_start();
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : "email属性不存在";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div><?php echo "你的邮箱是：".$email; ?></div>
	<a href="page4.php">Go to Page 4</a>
</body>
</html>