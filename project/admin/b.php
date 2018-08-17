<?php 
require_once 'header.php';
if(!isset($_SESSION["usersignin"]))
{
	header("location:signin.php");
}

if (isset($_GET["delstu"])) 
{
	mysqli_query($conn,"delete from mobile where id ='$_GET[delstu]' ") or die(mysqli_error($conn));
// page redirection
	header("location:b.php?msg=Mobile deleted");
}


$q = mysqli_query($conn,"select * from mobile") or die(mysqli_error($conn));
if(mysqli_num_rows($q) == 0)
{
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger">
					<p>no data</p>
				</div>
			</div>
		</div>
	</div>
<?php 
}
else 
{
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php 
			if (isset($_GET["msg"])) 
			{
				?>
				<div class="alert alert-success">
					<p><?php echo $_GET["msg"]; ?></p>
				</div>
				<?php 
			}
			?>
			<table class="table table-striped">
				<caption></caption>
				<thead>
					<tr>
						<th>Sr.No</th>
						<th>Mobile name</th>
						<th>Model</th>
						<th>Color</th>
						<th>Primary Camera</th>
						<th>Secondary Camera</th>
						<th>Battery</th>
						<th>Processor</th>
						<th>RAM</th>
						<th>Price</th>
						<th>Offer Price</th>						

					</tr>
				</thead>
				<tbody>
					<?php 
					while ($row = mysqli_fetch_assoc($q)) 
					{
						?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["model"]; ?></td>
							<td><?php echo $row["color"]; ?></td>
							<td><?php echo $row["primarycamera"]; ?></td>
							<td><?php echo $row["secondarycamera"]; ?></td>
							<td><?php echo $row["battery"]; ?></td>
							<td><?php echo $row["processor"]; ?></td>
							<td><?php echo $row["ram"]; ?></td>
							<td><?php echo $row["price"]; ?></td>
							<td><?php echo $row["offerprice"]; ?></td>							
							<td>
								<!-- query string
								page.php?abc=value -->
								<a href="b.php?delstu=<?php echo $row["id"]; ?>" class="btn btn-danger">
									Delete
								</a>
							</td>
							<td><a href="edit_form.php?editid=<?php echo $row["id"]; ?>" class="btn btn-warning" >update</a></td>
							<td><a href="c.php?edit=<?php echo $row["id"]; ?>" class="btn btn-warning" >update</a></td>
						</tr>
						<?php 
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php 
}
?>











