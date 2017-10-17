<?php 
	// 连接数据库
	// 1. 面向过程的方式(http://php.net/manual/zh/mysqli.construct.php)
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$query = "INSERT INTO users(name) VALUES('$name')";
		$result = mysqli_query($conn, $query);
		if($result){
			echo "数据插入成功！";
		}else{
			echo "数据插入失败！".mysqli_error($conn);
		}
	}

	// 2. 面向对象的方式

 ?>