<?php require_once("header.php");?>
<form action="" method="post" id="form" name="form" enctype="multipart/form-data">
	
	<div class="container">
		<div class="row">
			<div class="form-group col-md-6 ">
		 		<label>Name</label>
           		  <input type="text" class="form-control input-sm" id="Name" name="Name">
        	</div>

        	<div class="form-group col-md-6 ">
            	<label>MODEL</label>
           		 <input type="text" class="form-control input-sm" id="Email" name="model">
        	</div>
        </div>

		<div class="row">
        	<div class="form-group col-md-6">
      			<label>Color</label>
     			 <input type="text" class="form-control" id="Password" Name="color">
   			</div>

			<div class="form-group col-md-6 ">
           		 <label>Primary Camera</label>
           		   <input type="text" class="form-control input-sm" id="Mobile" name="primarycamera">
        	</div>
        </div>

        <div class="row">
			<div class="form-group col-md-6 ">
            	<label>Secondary Camera</label>
            		<input type="text" class="form-control input-sm" id="Mobile" name="secondarycamera">
	   		</div>

	
			<div class="form-group col-md-6 ">
            	<label>Battery</label>
            		<input type="text" class="form-control input-sm" id="City" Name="battery">
       	 	</div>
       	 </div>

		<div class="row">
			<div class="form-group col-md-6 ">
         	   <label>Processor</label>
            	<input type="text" class="form-control input-sm" id="State" name="processor">
        	</div>

			<div class="form-group col-md-6 ">
        	    <label>RAM</label> 
            		<input type="text" class="form-control input-sm" id="country" name = "ram">
       		</div>
       	</div>

       	<div class="row">
			<div class="form-group col-md-6 ">
            	<label>Price</label>
            		<input type="text" class="form-control input-sm" id="Pincode"  name="price">
        	</div>
        

		
			<div class="form-group col-md-6 ">
            	<label>Offer Price</label>
            		<input type="text" class="form-control input-sm" id="Pincode"  name="offerprice">
        	</div>
       
       		 <div class="form-group col-md-6" >
            <h5><b>Please choose a image</b></h5>

            <input type="file" name="img">
        		<input type="submit" name="submit" class="btn btn-primary">

       		</div>
    </div>
</div>




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
      mysqli_query($conn, "insert into mobile set img='$name' ")or die (mysqli_error($conn));
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

<?php
 if(isset($_POST["submit"]))
 {
 	mysqli_query($conn,"insert into mobile set Name='$_POST[Name]',
 		model='$_POST[model]',
 		color='$_POST[color]',
 		primarycamera='$_POST[primarycamera]',
 		secondarycamera='$_POST[secondarycamera]',
 		battery='$_POST[battery]',
 		processor='$_POST[processor]',
 		ram='$_POST[ram]',
 		price='$_POST[price]',
 		offerprice='$_POST[offerprice]'")or die(mysqli_error($conn));
 	echo "Value submitted";
 }
 ?>