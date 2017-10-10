<h1>
<?php 
	// 单行注释 快捷键：windows+/
	#  单行注释
	/*
		多行注释 快捷键：alt + windows + /
	*/
	echo "Hello World!";
?>
</h1>

<?php 
	echo "Hello everybody!";
?>


<?php 
 	#variable 变量
	/*
		- 前缀：$
		- 以字母、数字、下划线组成
		- 不能以数字开头
		- 大小写敏感
	*/
	$output = "Hello World~~~";
	echo $output."<br>";

	#数据类型
	/*
		String Integer Floats Boolean Array Object Resource(函数)
	*/
	$num = 6;
	$float = 22.22;
	$bool = false;
	echo $num."<br>",$float."<br>",$bool."<br>";

	#运算符
	$num1 = 10;
	$num2 = 20;
	$sum = $num1 + $num2;
	echo $sum."<br>";

	#字符串拼接
	$string1 = "hello";
	$string2 = "world";
	#在PHP 中，+号就是+号，没有拼接功能
	$greeting = $string1 + $string2;
	echo $greeting."<br>";  //0
	$greeting = $string1." ".$string2."!";
	echo $greeting."<br>";  //helloworld

	#PHP中引号的区别
	/*
		单引中的内容是单纯的字符串
		双引中的变量可以正常被解析
	*/
	$greeting2 = '$string1 $string2';
	echo $greeting2."<br>";
	$greeting3 = "$string1 $string2";
	echo $greeting3."<br>";

	#转义字符
	$string3 = 'They\'re here';
	echo $string3."<br>";
	$string4 = "They're there";
	echo $string4."<br>"; //不是一个方法，一般用echo，因为echo比printf速度快
	printf($string4."<br>"); //是一个方法，有返回值，返回值为1

	#常量
	define("GREETING", "whatever!");
	echo GREETING."<br>";
	define("GREETING", "whatever!", true); //常量的第三个参数为bool，true为不分大小写
	echo greeting."<br>";
?>