<?php require "header.php";
$q=mysqli_query($conn,"select * from mobile where id='$_GET[edit]'")or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($q);
?>

<div class="container">
	<div class="row-md-6">
		<form  method="post" id="form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">title</label>
				<input type="text" name="name" id= "title" class="form-group"	value="<?php echo $row["name"]; ?>">
			</div>
		</div>
				

				<input type="submit" class="btn btn-primary" name="submit" value="Update"></div>
			</form>
		</div>
	</div>



			<?php
				if(isset($_POST["submit"]))
				{
					mysqli_query($conn,"update mobile set name='$_POST[name]' where id='$_GET[edit]'") or die(mysqli_error($conn));
 		
					header("location:b.php?msg=row updated");
				}
				?>
	
