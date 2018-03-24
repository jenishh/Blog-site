<?php 
	include('db.php');
?>
<?php 
	include('controller.php');
?>
<?php 
	if (isset($_SESSION['user'])) {
		$sessuser = $_SESSION['user'];
		header("location:write.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
</head>
<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul class="smain-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="blog.php">Blogs</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>

	</header>
	<section class="center">
		<h1 class="black h1"><span class="capitalize">Sign In here...</span></h1>
		<form method="post" class="form">
			<p>Username :</p><br>
			<input type="text" name="uname" class="sform-control"><br>
			<p>Password :</p>
			<input type="password" name="password" class="sform-control"><br>
			<input type="submit" name="signin" value="Sign In" class="sform-control ssubmit up"><br>
			<?php 
					if (isset($_REQUEST['signin'])) {
						if ($n != 1) {
							echo $err;
						}
					}
					 
					?>
		</form>
		<div>
			<p class="sfix">Don't have an account? <a href="register.php">Sign up</a></p>
		</div>
	</section>
	</body>
</html>