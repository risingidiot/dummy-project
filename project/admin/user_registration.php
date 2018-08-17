<?php require_once("header.php");?>
<form action="" method="post" id="form" name="form" enctype="multipart/form-data">
<H1 ><marquee  bgcolor="cyan">REGISTER HERE</marquee></H1>


<div class="container">
<div class="row ">
	<div class="form-group col-md-6 ">
		 <label>Name</label>
             <input type="text" class="form-control input-sm" id="Name" name="Name">
        </div>

        <div class="form-group col-md-6 ">
            <label>Email</label>
            <input type="email" class="form-control input-sm" id="Email" name="Email">
        </div>
</div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" class="form-control" id="Password" Name="Password">
         </div>
  

        <div class="form-group col-md-6 ">
            <label>Mobile</label>
            <input type="text" class="form-control input-sm" id="Mobile" name="Mobile">
        </div>
    </div>

    <div class="row">
	   <div class="form-group col-md-6 ">
	      <label>Address</label>
	      <textarea class="form-control input-sm" id="Address" rows="3" Name="Address"></textarea>
	   </div>
	
	   <div class="form-group col-md-6 ">
            <label>City</label>
            <input type="text" class="form-control input-sm" id="City" Name="City">
        </div>
	</div>

        <div class="row">
            <div class="form-group col-md-6 ">
                <label>State</label>
                <input type="text" class="form-control input-sm" id="State" name="State">
            </div>

	       <div class="form-group col-md-6 ">
                <label>Country</label> 
                <input type="text" class="form-control input-sm" id="country" name = "Country">
        </div>
    </div>


    <div class="row">
	   <div class="form-group col-md-6 ">
            <label>Pincode</label>
            <input type="text" class="form-control input-sm" id="Pincode" pattern="[0-9]{6}" name="Pincode">
        </div>

        <div class="form-group col-md-6" >
    		<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block">

        </div>

	
	
	

</div>



</form>

<?php
 if(isset($_POST["submit"]))
 {
 	mysqli_query($conn,"insert into student set Name='$_POST[Name]',
 		Email='$_POST[Email]',
 		Password='$_POST[Password]',
 		Mobile='$_POST[Mobile]',
 		Address='$_POST[Address]',
 		City='$_POST[City]',
 		State='$_POST[State]',
 		Pincode='$_POST[Pincode]'")or die(mysqli_error($conn));
 	echo "Sign Up process is complete Now you are a registered user";
 }
 ?>