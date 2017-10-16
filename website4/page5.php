<?php 
	session_start();
	//删除存在服务器中的值
	// unset($_SESSION['name']);

	//删除所有数据
	session_destroy();
 ?>