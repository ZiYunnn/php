<?php 
	# 连接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");

	$query = "SELECT * FROM users";

	# 执行SQL语句
	$result = mysqli_query($conn,$query);

	# mysqli_fetch_all()从结果集中取得所有行作为关联数组或数字数组 
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

	# 将关联数组转化成json
	echo json_encode($users);
 ?>