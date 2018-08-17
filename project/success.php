<?php 
require 'header.php';
if(!isset($_SESSION["userlogin"]) && !isset($_SESSION["orderid"])) 
{
	header("location:all_products.php");
}
else 
{
	mysqli_query($conn,"update sales set status = 'done' where orderid = '$_SESSION[orderid]'  ") or die(mysqli_error());
	mysqli_query($conn,"update delivery set status = 'done' where orderid = '$_SESSION[orderid]'  ") or die(mysqli_error());
	?>
	THANK YOU
	<?php 
	unset($_SESSION["orderid"]);
}
?>