<?php require_once("header.php");
$q= mysqli_query($conn," select * from mobile where id='$_GET[editid]'") or die(mysqli_error($conn));

$row= mysqli_fetch_assoc($q);
?>


<form action="" method="post" id="form" name="form" enctype="multipart/form-data">
	
	<div class="container">
		<div class="row">
			<div class="form-group col-md-6 ">
		 		<label>Name</label>
           		  <input type="text" class="form-control input-sm" id="Name" name="name" value="<?php echo $row["name"]; ?>">
        	</div>

        	<div class="form-group col-md-6 ">
            	<label>MODEL</label>
           		 <input type="text" class="form-control input-sm" id="model" name="model" value="<?php echo $row["model"]; ?>">
        	</div>
        </div>

		<div class="row">
        	<div class="form-group col-md-6">
      			<label>Color</label>
     			 <input type="text" class="form-control" id="color" Name="color" value="<?php echo $row["color"]; ?>">
   			</div>

			<div class="form-group col-md-6 ">
           		 <label>Primary Camera</label>
           		   <input type="text" class="form-control input-sm" id="primarycamera" name="primarycamera" value="<?php echo $row["primarycamera"]; ?>">
        	</div>
        </div>

        <div class="row">
			<div class="form-group col-md-6 ">
            	<label>Secondary Camera</label>
            		<input type="text" class="form-control input-sm" id="secondarycamera" name="secondarycamera" value="<?php echo $row["secondarycamera"]; ?>">
	   		</div>

	
			<div class="form-group col-md-6 ">
            	<label>Battery</label>
            		<input type="text" class="form-control input-sm" id="battery" Name="battery" value="<?php echo $row["battery"]; ?>">
       	 	</div>
       	 </div>

		<div class="row">
			<div class="form-group col-md-6 ">
         	   <label>Processor</label>
            	<input type="text" class="form-control input-sm" id="processor" name="processor" value="<?php echo $row["processor"]; ?>">
        	</div>

			<div class="form-group col-md-6 ">
        	    <label>RAM</label> 
            		<input type="text" class="form-control input-sm" id="ram" name = "ram" value="<?php echo $row["ram"]; ?>">
       		</div>
       	</div>

       	<div class="row">
			<div class="form-group col-md-6 ">
            	<label>Price</label>
            		<input type="text" class="form-control input-sm" id="price"  name="price" value="<?php echo $row["price"]; ?>">
        	</div>
        

		
			<div class="form-group col-md-6 ">
            	<label>Offer Price</label>
            		<input type="text" class="form-control input-sm" id="offerprice"  name="offerprice" value="<?php echo $row["offerprice"]; ?>">
        	</div>
       
       		 <div class="form-group col-md-6" >
        		<input type="submit" name="submit" class="btn btn-primary">

       		</div>
    </div>
</div>
</form>

<?php 
if (isset($_POST["submit"]))

{
	mysqli_query($conn,"update mobile set name='$_POST[name]',		
		model='$_POST[model]',
 		color='$_POST[color]',
 		primarycamera='$_POST[primarycamera]',
 		secondarycamera='$_POST[secondarycamera]',
 		battery='$_POST[battery]',
 		processor='$_POST[processor]',
 		ram='$_POST[ram]',
 		price='$_POST[price]',
 		offerprice='$_POST[offerprice]' 
		where id='$_GET[editid]'") or die (mysqli_error($conn));

	header("location:b.php?msg=phone updated");
}
?>



