<?php 
	$loggedIn = true;
	$names = ["Henry","Bucky","Emily"];

	/*
	if($loggedIn){
		echo "U are Logged In";
	}else{
		echo "U are NOT Logged In";
	}
	echo "<br>";

	# 三目运算符
	echo ($loggedIn) ?  "U are Logged In" :  "U are NOT Logged In";
	echo "<br>";

	# 简写得到 true 或者 false
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered;
	echo "<br>";

	# 三目嵌套
	$age = 18;
	$score = 80;
	echo "Your score is ".($score > 70 ? ($age < 20 ? "优秀": "一般") : ($age < 20 ? "一般" : "差等"));
	*/
 ?>

 <!-- html + php 嵌套语法糖🍬 -->
 <div>
 	<?php if($loggedIn){ ?>
 	<p>Welcome to Beijing!</p>
 	<?php }else{ ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php } ?>
 </div>

 <!-- 优化 -->
 <div>
 	<?php if($loggedIn): ?>
 	<p>Welcome to Beijing!</p>
 	<?php else: ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php endif; ?>
 </div>

 <!-- 遍历数组 foreach -->
<div>
	<?php foreach($names as $val): ?>
		<div><?php echo $val; ?></div>
	<?php endforeach; ?>
</div>

<!-- 遍历数组 for -->
<div>
	<?php for($i=0;$i<count($names);$i++): ?>
		<div><?php echo $names[$i]; ?></div>
	<?php endfor; ?>
</div>