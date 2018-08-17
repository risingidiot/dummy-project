<?php require_once("header.php");?>



<div class="container">

<form method="post">
			<div class="row">
				<div class="col-md-6">	
					<label>Name</label>
					<input type="text" class="form-control input-sm" id="name" name="name">
				</div>
				<div class="col-md-6">
					<label>Email</label>
					<input type="email" class="form-control input-sm" id="email" name="email">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Phone number</label>
					<input type="text" class="form-control input-sm" id="email" name="number">
				</div>
				<div class="col-md-6">
					<label>Address</label>
					<input type="text" class="form-control input-sm" id="address" name="address">
				</div>
			</div>
			

		    <div class="row">
		    	<div class="col-md-6">
		    		<label>Payment option</label>
		    		<select name="payment">
					  <option value="cod" >COD</option>
					  <option value="card">Through card</option>
					 </select>
					</div>



			
				
				<div class="col-md-6">
				<input type="submit" name="submit" class="btn btn-primary">
				</div>



			</div>
		</form>

<?php
if(isset($_POST["submit"]))
{
	$q = mysqli_query($conn,"select sum(subtotal) as total from sales where orderid = '$_SESSION[orderid]' ") or die();
	$d = mysqli_fetch_assoc($q);
mysqli_query($conn, "insert into delivery set  name='$_POST[name]',
		 email='$_POST[email]',
		 mobile='$_POST[number]',
		 payment='$_POST[payment]',
		 address='$_POST[address]',status = 'pending',user = '$_SESSION[userlogin]', amount = '$d[total]' , orderid = '$_SESSION[orderid]' ")or die(mysqli_error($conn));
	if($_POST["payment"] == "card")
	{
		header("location:stripe.php");
	}
	if($_POST["payment"] == "cod")
	{
		header("location:success.php");
	}
	
}

?>




