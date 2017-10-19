<?php 
	
	/*
	 *	操作数据库：
	 *	1. 连接数据库
	 *	2. 执行sql语句
	 *	3. 获取数据并使用
	 *	4. 断开连接
	 */ 

	function updateData($sql){
		# 连接数据库
		$mysqli = new mysqli("localhost","root","","people");
		# 测试是否连接成功
		if($mysqli->connect_errno){  //error number: 0 连接成功
			die($mysqli->connect_error);
		}

		# 设置utf8
		$mysqli->query("set names utf8");
		# 执行sql语句
		$result = $mysqli->query($sql);

		if($result){
			echo "更新成功！";
		}else{
			echo "更新失败！";
		}

		# 断开连接
		$mysqli->close();
	}

	$sql = "UPDATE customers SET name='孙帅',email='ss@gmail.com' WHERE id=5";
	updateData($sql);
 ?>