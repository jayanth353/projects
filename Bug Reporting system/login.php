


<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
	window.history.forward()
	</script>
	<meta charset="UTF-8">
	<title>Login</title>
	<link  rel="shortcut icon" type="image/png" href="logo1.jpeg">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
	<style>
	.home{
		padding-left:85%;
		padding-top:2%;
	   
		
	}
	.butn{
		
		border-radius:50px;
		width:55%;
		background: rgb(39, 29, 82);
		height:80%;
		
		
	}

	</style>
</head>
<body>
<div class="home">
<a href="index.html"><button class="butn"><h1 style="color:white; font-family: 'Poppins', sans-serif;">Home</h1></button></a>
</div>

	<div class="contact-form">
		<centre><img alt="" class="avatar" src="unnamed.png"></centre>
		<h2>Login</h2>
		<form action="" method="POST">
			<p>Email</p><input placeholder="Enter Email" type="email" name="email">
			<p>Password</p><input placeholder="Enter Password" type="password" name="password" required> 
            <input type="submit" value="login" name="submit">
			<a href="signup.php" >Don't have an account?  <span>Sign up</span></a>
		</form>
	</div>
</body>
</html>

<?php
 include('script.php');
 session_start();
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"signup");


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query="SELECT * FROM reg WHERE email='$email' && password='$password'";
	$query_run = mysqli_query($connection,$query);
	$row=mysqli_fetch_array($query_run);
	if(mysqli_num_rows($query_run)>0)
	{
		$_SESSION['username']= $row['username'];
		header("location:report.php");
		
	}
	else{
		$display='<script> swal("Oops..!!! \n Invalid emali or password") </script>';
		echo $display;
	}
}
?>

