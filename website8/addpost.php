<?php 
	require("config/config.php");
	require("config/db.php");
	if(isset($_POST['submit'])){
		# 获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);	
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		if(!empty($title) && !empty($author) && !empty($body)){
			mysqli_query($conn,"set names utf8");
			$query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";
			if(mysqli_query($conn,$query)){
				header("location:index.php");
			}else{
				echo "数据插入失败".mysqli_error($conn);
			}
		}
	}
 ?>

<?php include("inc/header.php"); ?>
	<div class="container">
		<h1>添加博客</h1>
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="">标题</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="">作者</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label for="">内容</label>
				<input type="text" name="body" class="form-control">
			</div>
			<input type="submit" value="添加" name="submit" class="btn btn-primary">
		</form>
	</div>
<?php include("inc/footer.php"); ?>