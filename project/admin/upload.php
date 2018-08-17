<?php require "header.php";?>
<form action="" method="post" id="form" enctype="multipart/form-data">
	<p>
		<input type="text" name="name">
	</p>
	<p>
		<input type="number" name="class">
	</p>
	<p>
		<input type="date" name="dob">
	</p>
	<p>
		<input type="number" name="rollno">
	</p>
	<input type="file" name="img">
	<input type="submit" id ="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"]))
{
	$type=$_FILES["img"]["type"];
	$size=$_FILES["img"]["size"];
	$tmpname = $_FILES["img"]["tmp_name"];
	$name = $_FILES["img"]["name"];

	if($size <= 20000000 && $type=="image/jpeg")
	{
		$u=move_uploaded_file($tmpname ,"uploads/" . $name);
		if($u)
		{
			
			echo "images uploaded";
		}
		else
		{
			echo "Something went wrong try agian later";
		}
	}
	else
	{
		echo "Please upload only jpeg file and must be less than 2 KB";
	}
}
?>