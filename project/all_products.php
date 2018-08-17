<?php require 'header.php'; ?>
s

<div class="container">
	<div class="row">
		<?php 
		$q = mysqli_query($conn,"select * from mobile order by id desc") or die(mysqli_error($conn));
		while ($row = mysqli_fetch_assoc($q)) 
		{
			?>
			<div class="col-md-3">
				<a href="single_product.php?id=<?php echo $row["id"]; ?>">
				<p>
				<img src = "admin/uploads/<?php echo $row["img"]; ?>" class = "img-responsive" style = "max-height: 150px;">
			    </p>
				<h1><?php echo $row["name"] ?></h1>
				<p><b>Price:</b><?php echo $row["offerprice"]; ?> </p>
				<p>
					<a href="single_product.php?id=<?php echo $row["id"]; ?>">
						View detail
					</a>
				</p>
			</div>
			<?php 
		}
		?>	
	</div>
</div>
