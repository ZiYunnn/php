<?php 
	# function: 函数 - 具有某一功能的代码块
	# 函数如果不写return也有返回值，返回值为undefined
	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	// 定义函数
	# 无参数 无返回值
	function simpleFunction(){
		echo "Hello World!";
		echo "<br>";
	}
	// 调用函数(不区分大小写)
	SimpleFunction();

	# 有参数 无返回值
	function buyFirst($money){
		echo $money."给了，但没给我买东西！";
		echo "<br>";
	}
	buyFirst(100);
	function buySecond($money = "20块钱"){
		echo $money."给了，但没给我买东西！";
		echo "<br>";
	}
	buySecond();

	# 多参数 有返回值
	function sumValue($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}
	$result = sumValue(5,6);
	echo $result;
	echo "<br>";

	# 无参数 有返回值
	function buyDrink(){
		return "饭后的饮料";
	}
	$drink = buyDrink();
	echo $drink;
	echo "<br>";

	# 函数传引用
	$myNum = 10;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);
	echo $myNum; //拿到了myNum的引用，改变了内存中的数值，所以是15
 ?>