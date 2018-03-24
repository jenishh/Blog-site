<?php 
	include('db.php');
?>
<?php 
	include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
</head>
<body>
	<header class="sticky">
		<div class="row">
			<div class="logo">
				<img src="logo.png">
			</div>
			<?php 
					if (isset($_SESSION['user'])) {
				?>		
						<ul class="smain-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="blog.php">Blogs</a></li>
							<li><a href="#">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="signout.php">Sign Out</a></li>
						</ul>
	 			<?php	
	 				}else{
				?>
					<ul class="smain-nav">
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
	<?php 
		$join = "select * from blog join user on blog.uid = user.uid";
		$exe = $con->query($join);
		
		while ($row = $exe->fetch_object()) {	
		$select = "select * from likes where bid = $row->bid ";
		$trun = $con->query($select);
		$tn = $trun->num_rows;	
	?>
	<section>
		<div class="gridrow">
			<div class="col-1-of-3">
				<h1  class="grey h1 up"><span class="black"><?php echo $row->uname; ?></span></h1>
			</div>
			<div class="col-2-of-3">
				<h1 class="playball capitalize grey"><?php echo $row->title; ?></h1>
				<br>
				<h3 class="line-height"><?php echo $row->description; ?></h3>
				<br>
				<?php 
					if (isset($_SESSION['user'])) {
						$sessuser = $_SESSION['user'];
			
						$sel = "select * from likes where uid = $sessuser->uid AND bid = $row->bid";
						$run = $con->query($sel);
						$n = $run->num_rows;
			 	
						if ($n == 0) {
				?>		
						<span class="darkgrey"><?php echo $tn; ?></span><?php echo "&nbsp"; echo "&nbsp"; ?><a class="like" href="blog.php?luid=<?php echo $sessuser->uid; ?>&lbid=<?php echo $row->bid; ?>">Like</a>
				<?php		
					}elseif ($n == 1){
				?>		
						<span class="darkgrey"><?php echo $tn; ?></span><?php echo "&nbsp"; echo "&nbsp"; ?><a class="like" href="blog.php?uuid=<?php echo $sessuser->uid; ?>&ubid=<?php echo $row->bid; ?>">Unlike</a>
				<?php
				}
				}else{
				?>
						<span class="darkgrey"><?php echo $tn; ?></span><?php echo "&nbsp"; echo "&nbsp"; ?><a class="like" href="signin.php">Like</a>
				<?php
				}
				?>
			</div>		
		</div>
	</section>
	<?php
		}
	?>
</body>
</html>