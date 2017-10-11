<?php 
	# string functin: 处理字符串的函数

	$output = "HelloWorld!";

	# 返回字符串的一部分 substr
	// $output = substr($output, 1);
	// $output = substr($output, 4, 1);
	// echo $output;
	

	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);  //11


	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output, "lo");
	// echo $output;

	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output, "l");
	// echo $output;
	

	# 去除首尾空格trim
	$output = "   helloworld    ";
	echo strlen($output);
	echo "<br>";
	$output = trim($output);
	echo strlen($output);
	echo "<br>";
	

	# 将字符串转为大写 strtoupper
	$str = "hello world";
	$newStr = strtoupper($str);
	echo $newStr;
	echo "<br>";
	
	
	# 将字符串转为小写 strtolower
	$lowerStr = strtolower($newStr);
	echo $lowerStr;
	echo "<br>";
	
	
	# 将每个单词首字母大写 ucwords
	$ucWord = ucwords($str);
	echo $ucWord;
	echo "<br>";
	
	
	# 替换所有匹配的内容  str_replace
	$text = "Hello World";
	$output = str_replace("World", "Everybody", $text);
	echo $output;
	echo "<br>";
	
	
	# 判断是否是字符串  is_string
	$val = true;
	$output = is_string($val);
	echo $output;  //空
	echo "<br>";

	
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"Hello",32,"23",23.4,"23.5",""," ",0,"0");
	foreach($values as $value){
		# 判断value是否是字符串，如果是，那么输出
		if(is_string($value)){
			echo $value." is a string!<br>";
		}
	}

	
	# 压缩字符串  gzcompress
	$str = "一大堆文字";
	$compressed = gzcompress($str);
	echo $compressed;
	echo "<br>";

	
	# 解压字符串  gzuncompress
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;
 ?>