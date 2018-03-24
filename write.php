<?php 
	include('db.php');
?>	
<?php 
	include('controller.php');
?>
<?php 
	if (isset($_SESSION['user'])) {
		$sessuser = $_SESSION['user'];
	}else{
		header("location:signin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Blog</title>
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
				<li><a href="blog.php">Blogs</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="signout.php">Sign Out</a></li>
			</ul>
		</div>

	</header>
	<section class="center">
		<h1 class="grey h1 up"><span class="playball capitalize">hello <span class="black"><?php echo $sessuser->fname; ?></span>, world is waiting for you..</span></h1><br>
		<h2 class="grey h2"><span class="playball capitalize">expand your thoughts to the world..!!</span></h2>
		<br><br>
		<form method="post" class="wform">
			<p>Title :</p><input type="text" name="title" class="wform-control"><br>
			<p>Description :</p><textarea rows="5" cols="50" name="desc" class="wform-control line-height"></textarea>
			<input type="submit" name="post" value="Post It" class="sform-control wsubmit up">
		</form>
	</section>
	</body>
</html>