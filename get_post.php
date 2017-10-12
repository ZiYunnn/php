<div class="container">
	<?php 
		// echo $_GET["userName"];
		// echo $_GET["emailName"];

		# $_GET
		# 检查userName是否能获取到
		// if(isset($_GET["userName"]) && isset($_GET["emailName"])){
		// 	// echo $_GET["userName"];
		// 	$userName = $_GET["userName"];
		// 	$emailName = $_GET["emailName"];
		// 	if(!empty($userName) && !empty($emailName)){
		// 		echo $userName.": ".$emailName;
		// 	}
		// }

		# $_POST
		// if(isset($_POST["userName"]) && isset($_POST["emailName"])){
		// 	// echo $_POST["userName"];
		// 	$userName = $_POST["userName"];
		// 	$emailName = $_POST["emailName"];
		// 	if(!empty($userName) && !empty($emailName)){
		// 		echo $userName.": ".$emailName;
		// 	}
		// 	print_r($_POST);
		// }

		# $_REQUEST
		if(isset($_REQUEST["userName"]) && isset($_REQUEST["emailName"])){
			// echo $_REQUEST["userName"];
			$userName = $_REQUEST["userName"];
			$emailName = $_REQUEST["emailName"];
			if(!empty($userName) && !empty($emailName)){
				echo $userName.": ".$emailName;
			}
			print_r($_REQUEST);
		}

		# 查询url地址后面的参数(获得GET请求后面的参数)
		// echo $_SERVER['QUERY_STRING'];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="userName" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="emailName" class="form-control">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅"; ?>" class="btn btn-success btn-block">赵帅</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=郜超"; ?>" class="btn btn-info btn-block">郜超</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</body>
</html>