<?php 
	# loops:循环 - 让项目制作的更高效
	# 根据某个条件，重复执行某段代码
	/*
		- for
		- while
		- do...while
		- foreach
	*/

	# for循环
	# @params - init, condition, inc
	for ($i = 0; $i < 10; $i++) { 
		echo $i."<br>";
	}

	# while循环
	# @params - condition
	$i = 0;
	while ($i < 10) {
		echo $i."<br>";
		$i++;
	}

	# do...while
	# @params - condition
	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}while($i < 10);

	# foreach 循环 下标数组
	$people = array("Henry","Bunck","Emily");
	foreach($people as $person){
		echo $person."<br>";
	}
	# foreach 循环 关联数组
	$people = array(
		"Henry"=>"henry@gmail.com",
		"Bunck"=>"bunck@gmail.com",
		"Emily"=>"emily@gmail.com"
	);
	foreach($people as $person => $gmail){
		echo $person.":".$gmail;
		echo "<br>";
	}
 ?>