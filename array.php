<?php 
	# array:数组 - 存储一堆数据的集合
	/*
		下标数组:下标以0开始
		关联数组:以第一个名字开头
	*/

	# 下标数组
	$people = array("Kenvin","Henry","Mary");
	echo $people[1];
	echo $people[3]; //数组越界

	$ids = [23,44,21];
	echo $ids[2]."<br>";

	$cars = ["Honda","Toyoka","BYD"];
	$cars[3] = "BMW";
	echo $cars[3]."<br>";
	echo count($cars)."<br>";

	# 打印数组的方法
	print_r($cars);

	# 万能打印方法
	var_dump($cars)."<br>";


	# 关联数组
	$people = array("Henry"=>35,"Bunky"=>25,"Alice"=>20);
	echo "<br>".$people["Alice"]."<br>";
	$ids = array(22=>"Henry",30=>"Alice");
	echo $ids[22]."<br>";
	$ids[35] = "Mike";
	echo $ids[35];
	print_r($ids);

	#观察
	$cars[] = "Bence";
	print_r($cars);
	$ids[] = "John";
	print_r($ids);
	$people[] = 55;
	print_r($people);

	# 多维数组
	$cars = array(
		array("Honda",20,10),
		array("Ford",15,10),
		array("Posche",50,20)
	);
	echo "<br>".$cars[2][1]."<br>";
 ?>