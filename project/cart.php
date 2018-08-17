<?php 
require 'header.php';
?>

<div class="container">
	<?php

	$q = mysqli_query($conn,"select * from sales where orderid = '$_SESSION[orderid]' ") or die(mysqli_error($conn));

	?>
	<table class="table table-striped">
		<tr>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>SUbtotal</th>
		</tr>
	<?php 
	$total = 0;
	while ($row = mysqli_fetch_assoc($q)) 
	{
		?>
		<tr>
			<td><?php 
			$q1 = mysqli_query($conn,"select * from mobile where id = '$row[pid]' ") or die(mysqli_error($conn));
			$d = mysqli_fetch_assoc($q1);
			echo $d["name"];
			?></td>
			<td>Rs <?php echo $row["price"]; ?> /- </td>
			<td><?php echo $row["qty"]; ?></td>
			<td>Rs <?php echo $row["subtotal"]; ?> /-</td>
		</tr>
		<?php 
		$total = $total + $row["subtotal"];
	}
	?>
</table>
<p>
	<a href="delivery_form.php" class="btn btn-primary">
		Continue to pay Rs <?php echo $total; ?> /- 
	</a>
</p>

	</div>
