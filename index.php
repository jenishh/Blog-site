<?php 
	include('db.php');
?>
<?php 
	include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="row">
			<div class="logo">
				<img src="logo1.png">
			</div>
			<?php 
					if (isset($_SESSION['user'])) {
				?>		
						<ul class="main-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="blog.php">Blogs</a></li>
							<li><a href="#">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="signout.php">Sign Out</a></li>
						</ul>
	 			<?php	
	 				}else{
				?>
					<ul class="main-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="signin.php">Sign In</a></li>
						<li><a href="blog.php">Blogs</a></li>
						<li><a href="#">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				<?php
					}
				?>
		</div>

		<div class="center">
			<h1 class="h1">Content is anything that adds value to the reader's life</h1>

			<div class="button up">
				<?php 
					if (isset($_SESSION['user'])) {
				?>		
						<a href="write.php" class="btn">Create Blog</a>
	 			<?php	
	 				}else{
				?>
				<a href="signin.php" class="btn">Create Blog</a>
				<?php
					}
				?>	
			</div>
		</div>
	</header>

</body>
</html>