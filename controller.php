<?php 
	include('db.php');
?>

<?php 

	session_start();
	if (isset($_SESSION['user'])) {
		$sessuser = $_SESSION['user'];
	}
	if (isset($_REQUEST['signin'])) {
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['password'];

		$sel = "select * from user where uname ='$uname' and password ='$password' " ;
		$exe = $con->query($sel);
		$n = $exe->num_rows;
		if ($n == 1) {
			$row = $exe->fetch_object();
			$_SESSION['user'] = $row;
			
			header("location:write.php");
		}
		else{
			$err = "wrong login details....🤪🤪🤪";
		}
	}


 	if (isset($_REQUEST['register'])) {
 		$fname = $_REQUEST['fname'];
 		$uname = $_REQUEST['uname'];
 		$password = $_REQUEST['password'];
 		$email = $_REQUEST['email'];
 		$gender = $_REQUEST['gender'];
 		$date = date('Y-m-d');
 		$ins = "insert into user (fname,uname,password,email,gender,dor) values ('$fname','$uname','$password','$email','$gender','$date')";
 		$con->query($ins);
 		header("location:signin.php");
 	}

 	if (isset($_REQUEST['post'])) {
 		$uid = $sessuser->uid;
 		$title = $_REQUEST['title'];
 		$desc = $_REQUEST['desc'];

 		$ins = "insert into blog (uid,title,description) values ('$uid','$title','$desc')";
 		$con->query($ins);
 		header("location:write.php");
 	}

 	if (isset($_REQUEST['luid'])) {
 		$luid = $_REQUEST['luid'];
 		$lbid = $_REQUEST['lbid'];
 		
 		$ins = "insert into likes (uid,bid) values ('$luid','$lbid')";
 		$con->query($ins);
 		header("location:blog.php");
 	}

 	if (isset($_REQUEST['ubid'])) {
 		$uuid = $_REQUEST['uuid'];
 		$ubid = $_REQUEST['ubid'];

 		$del = "delete from likes where uid = '$uuid' AND bid = '$ubid' ";
 		$con->query($del);
 		header("location:blog.php");
 	}
 ?>