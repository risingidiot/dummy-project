<?php require_once 'header.php'; ?>


<div class="container">
    <div class="row">
    	    <div class="col-sm-6 col-md-4 col-md-offset-4">
           
            <h1 class="text-center login-title">Sign in </h1>
            <div class="account-wall">
               <center><img class="profile-img" src="user.png"  height="100" width="100" alt="" ></center>   
               		 <form action="" method="post" class="form-signin">     	
				
	<br>
		<input type="email" name="email" placeholder="Enter emails" class="form-control">
	
		<input type="password" name="pswrd" placeholder="Enter password" class="form-control">
	
		<input type="submit" name="sb" value="Login" class="btn btn-lg btn-primary btn-block">
		<div><a href="#">Forget password </a>
		<div><a href="user_registration.php">Sign Up </a>
		<a href="#" class="pull-right need-help">Need help? </a>
		</span>
					</form>

<!-- session / cookie -->

<?php 

if (isset($_POST["sb"])) 
{
	$q = mysqli_query($conn,"select * from student where Email = '$_POST[email]' and Password = '$_POST[pswrd]' ") or die(mysqli_error($conn));
	if (mysqli_num_rows($q) == 0) 
	{
		header("location:signin.php?error=wrong username and password");
	}
	else
	{
		$_SESSION["usersignin"] = $_POST["email"];
		header("location:dashboard.php");
	}

}
?>