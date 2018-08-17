<?php 
require_once 'header.php';
if(!isset($_SESSION["usersignin"]))
{
	header("location:signin.php");
}

if (isset($_GET["delstu"])) 
{
	mysqli_query($conn,"delete from student where Email = '$_GET[delstu]' ") or die(mysqli_error($conn));
// page redirection
	header("location:view_data.php?msg=Student deleted");
}


$q = mysqli_query($conn,"select * from student") or die(mysqli_error($conn));
if(mysqli_num_rows($q) == 0)
{
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div calss="alert alert-danger">
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
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>State</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row mysqli_fetch_assoc($q))
				{
					?>
					<tr>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["Email"]; ?></td>
						<td><?php echo $row["Mobile"]; ?></td>
						<td><?php echo $row["State"]; ?></td>
							<td>
								<!-- query string
								page.php?abc=value -->
								<a href="view_data.php?delstu=<?php echo $row["Email"]; ?>" class="btn btn-danger">
									Delete
								</a>
							</td>
								
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
