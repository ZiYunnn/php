<?php 
	echo "hello world!";

	if(isset($_GET['name'])){
		echo "你的名字是：".$_GET['name'];
	}

	if(isset($_POST['name'])){
		echo "你的名字是：".$_POST['name'];
	}
 ?>