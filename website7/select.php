<?php 
	
	/*
	 *	操作数据库：
	 *	1. 连接数据库
	 *	2. 执行sql语句
	 *	3. 获取数据并使用
	 *	4. 断开连接
	 */ 

	function selectData($sql){
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

		// var_dump($result);
		if($result->num_rows){
			$data = $result->fetch_all(MYSQLI_ASSOC); //默认是下标数组
			// print_r($data);
			echo json_encode($data); 
		}

		# 断开连接
		$mysqli->close();
	}

	$sql = "SELECT * FROM customers";
	selectData($sql);
 ?>