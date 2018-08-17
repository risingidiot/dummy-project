<?php
// session_start();
require 'connection.php';
if(!isset($_SESSION["userlogin"]))
{
	header("location:signin.php");
}
else 
{
$pid = $_GET["pid"];
if(!isset($_SESSION["orderid"]))
{
	$_SESSION["orderid"] = substr_replace(md5(rand()), "", 10) ;
}
$q = mysqli_query($conn,"select * from mobile where id = '$pid' ") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($q);
$price = $data["offerprice"];
$status = "cart";	
$user = $_SESSION["usersignins"];
mysqli_query($conn,"insert into sales set orderid = '$_SESSION[orderid]',pid = '$pid',price = '$price',qty = '1',subtotal = '$price', status = '$status', user = '$_SESSION[userlogin]'  ") or die(mysqli_error($conn));
	header("location:single_product.php?id=$_GET[pid]");
}
?>