<?php 
	# if & switch
	
	# 关系运算符
	/* > < == != >= <= === !=== */

	$num = 2;
	# 单个if
	/*
		if ($num <= 4) {
			echo "num的值一定是小于或者等于4";
		}
	*/

	# if else
	if ($num > 4) {
		echo "true"."<br>";
	}else{
		echo "false"."<br>";
	}

	#nesting if
	$num = 4;
	if ($num >= 4) {
		if ($num <= 10) {
			echo "num一定是在4~10之间！"."<br>";
		}else{
			echo "num一定是大于10！"."<br>";
		}
	}else{
		echo "num一定是小于4！"."<br>";
	}


	# 逻辑运算符
	/*
		逻辑与 && AND
		逻辑或 || OR
		逻辑非 ！
		逻辑异或 XOR
	*/
	$num = 3;
	if ($num > 3 AND $num < 10) {
		echo "num是大于3并且小于10";
	}
	if ($num > 2 XOR $num < 10) {
		echo "num是大于3并且小于10";
	}
	/*
		AND:一假即假
		OR:一真即真
		XOR:只有一个为真，结果值才为真
	*/

	# switch
	$favColor = 1;
	switch($favColor){
		case "1":  //在js中必须是===才能匹配
			echo "angry";
			break;
		case "yellow":
			echo "happy";
			break;
		case "blue":
			echo "silence";
			break;
		case "green":
			echo "forgive";
			break;
		default:
			echo "GUN";
			break;
	}
 ?>