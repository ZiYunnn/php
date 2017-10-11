<?php 
	$array = array("Henry","Bucky","Emily");
	# 计算数组个数 count
	echo count($array);
	echo "<br>";

	# 将数组开头的单元移出数组 array_shift
	$newArray = array_shift($array);
	echo $newArray;
	echo "<br>";
	print_r($array);
	echo "<br>";

	# 在数组开头插入一个或多个单元 array_unshift
	$insertValue = array_unshift($array, "Mary");
	print_r($array);
	echo "<br>";
	echo $insertValue;  //3
	echo "<br>";

	# 将一个或多个单元压入数组的末尾（入栈）array_push
	array_push($array, "Alice");
	print_r($array);
	echo "<br>";

	# 弹出数组最后一个单元（出栈） array_pop
	array_pop($array);
	print_r($array);
	echo "<br>";
	
	# 数组排序 sort
	$values = array(22,1,33,12,16,44);
	sort($values);
	print_r($values);
	echo "<br>";
	
	# 数组转字符串 implode
	$arrayToString = array("a","b","c");
	$value = implode(" ", $arrayToString);
	print_r($value);
	echo "<br>";
	
	# 字符串转数组 explode
	$array = explode(" ", $value);
	print_r($array);
 ?>