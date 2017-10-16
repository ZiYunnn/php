<?php 
	$user = ["name" => "Henry", "email" => "852213200@qq.com", "age" => 30];
	$user = serialize($user); //转换成字节流
	setcookie('user',$user,time()+86400);

	$user = unserialize($_COOKIE['user']); //解析字节流
	print_r($user);
 ?>