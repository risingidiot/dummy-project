<?php require 'header.php';
if(isset($_POST["sb"]))
{
	$q = mysqli_query($conn,"select * from users where email = '$_POST[email]' and password = '$_POST[pswrd]' ") or die(mysqli_error($conn));
	if(mysqli_num_rows($q) == 1)
	{
		$_SESSION["userlogin"] = $_POST["email"];
		header("location:dashboard.php");
	}
	else
	{
		header("location:?err=wrong initals");
	}
}
?>
<form method="post">
	<p>
		<input type="text" name="email">
	</p>
	<p>
		<input type="password" name="pswrd">
	</p>
	<p>
		<input type="submit" name="sb">
	</p>
</form>