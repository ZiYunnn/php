<?php 
	# date
	// echo date(); //至少给一个参数

	# day
	echo date('d');
	echo "<br>";

	# month
	echo date('m');
	echo "<br>";

	# year
	echo date('Y'); //Year
	echo "<br>";
	echo date('y'); //year
	echo "<br>";

	# day of week
	echo date('l');
	echo "<br>";

	# 格式化输出年月日
	echo date('Y/m/d');
	echo "<br>";

	# 格式化输出日月年
	echo date('d/m/Y');
	echo "<br>";
	
	# hour
	echo date('h');
	echo "<br>";

	# minute
	echo date('i');
	echo "<br>";

	# seconds
	echo date('s');
	echo "<br>";

	# am or pm
	echo date('a');
	echo "<br>";

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date("h:i:s a");
	echo "<br>";
	
	# 时间戳
	$timestamp = mktime(08,30,00,7,24,1996);
	echo $timestamp;
	echo "<br>";

	# 完整的时间
	echo date('m/d/Y h:i:s a',$timestamp);
	echo "<br>";
	
	# 字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo $timestamp2;
	echo "<br>";
	$timestamp3 = strtotime("tomorrow");
	echo date('m/d/Y h:i:s a',$timestamp3);
	echo "<br>";
	$timestamp4 = strtotime("next Sunday");
	echo date('m/d/Y h:i:s a',$timestamp4);
	echo "<br>";
	$timestamp5 = strtotime("+2 Days");
	echo date('m/d/Y h:i:s a',$timestamp5);
	echo "<br>";
 ?>