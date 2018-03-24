<?php 
	include('db.php');
?>
<?php 
	include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
</head>
<body>
	<header class="cheader header">
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

	</header>
	<section class="center">
		<h1 class="h1"><span class="capitalize">Contact Us Here...</span></h1>
		<form method="post" class="form">
			<input type="text" name="name" placeholder="Your Name" required="required" class="form-control"><br>
			<input type="email" name="email" placeholder="Email Address" required="required" class="form-control"><br>
			<textarea name="message" placeholder="Your Message" rows="5" required="required" class="form-control"></textarea><br>
			<input type="submit" name="contact" value="Send Message" class="form-control submit up">
		</form>
	</section>

</body>
</html>