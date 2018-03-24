<?php 
	include('db.php');
?>
<?php 
	include('controller.php');
?>
<?php 
	if (isset($_SESSION['user'])) {
		header("location:write.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
</head>
<body>
	<header class="rheader header">
		<div class="row">
			<div class="logo">
				<img src="logo1.png">
			</div>
			<ul class="main-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="blog.php">Blogs</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>

	</header>
	<section class="center">
		<h1 class="h1"><span class="capitalize">Register Here...</span></h1>
		<form method="post" class="form">
			<p class="rpara">Firstname :</p><br>
			<input type="text" name="fname" required="required" class="form-control rinput"><br>
			
			<p class="rpara">Username :</p><br>
			<input type="text" name="uname" required="required" class="form-control rinput"><br>
			
			<p class="rpara">Password :</p><br>
			<input type="password" name="password" required="required" class="form-control rinput"><br>
			
			<p class="rpara">Email :</p><br>
			<input type="email" name="email" required="required" class="form-control rinput"><br>

			<p class="rpara">Gender :</p>
			<label><input type="radio" name="gender" value="male" class="rinput"><span class=gender>Male</span></label>
			<label><input type="radio" name="gender" value="female" class="rinput"><span class="gender">Female</span></label><br><br>	
			<!--<p class="rpara">Upload a profile pic :</p>
			<input type="file" name="pic" accept="image/*" class="form-control rinput clear">-->

			<input type="submit" name="register" value="Register Now" class="form-control rsubmit up">
		</form>
	</section>

</body>
</html>