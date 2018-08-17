<?php require 'header.php'; ?>
<?php echo $_SESSION["userlogin"]; ?>
<div class="container">
	<div class="row">
		<?php 
		$q = mysqli_query($conn,"select * from mobile where id = '$_GET[id]' ") or die(mysqli_error($conn));
		$row = mysqli_fetch_assoc($q);
		?>

		<table class="table table-striped">
			<tr>
				<th><?php echo $row["name"]; ?></th>
			</tr>
		</table>

              <table   border= "1px solid black" width="50%"  class="table table-striped">
                <tr>
                  <th rowspan="8"> 
                    <p><img src = "admin/uploads/<?php echo $row["img"]; ?>" class = "img-responsive" style = "max-height: 300px;">
                    </p>
                  </th>
                  <th>Name</th>
                  <td><?php echo $row["name"]; ?></td> 
                </tr>
                <tr>
                  <th>Model</th>
                  <td><?php echo $row["model"]; ?></td>
                  
                </tr>
                <tr>
                  <th>Battery</th>
                  <td><?php echo $row["battery"]; ?></td>
                  
                </tr>
                <tr>
                  <th>Primary Camera</th>
                  <td><?php echo $row["primarycamera"] ?></td>
                </tr>


                <tr>
                  <th>Secondary camera</th>
                  <td><?php echo $row["secondarycamera"] ?></td> 
                </tr>
                                                                               
                <tr>
                  <th>RAM</th>
                  <td><?php echo $row["ram"] ?></td> 
                </tr>

                <tr>
                  <th>Processor</th>
                  <td><?php echo $row["processor"] ?></td> 
                </tr>


                <tr>
                  <th>Price</th>
                  <td><?php echo $row["price"] ?></td> 
                </tr>                
                
              </table>

        </div>  




      <div class="row">
        <div class="col-md-6">
          <a href="addtocart.php?pid=<?php echo $row["id"]; ?>" name="cart" value="Add to cart" class="btn btn-primary">Add to cart </a>
        </div>
        <div class="col-md-6">
          <input type="submit" name="buynow" value="Buy Now" class="btn btn-primary">
        </div>

<br>
<br><br>



                                                                  
<div class="container">
  <h2>Comment as a guest</h2>
  <p></p>
  <form>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>

      <div class="row">
        <div class="form-group col-md-6 ">
          <label>Name</label>
          <input type="text" class="form-control input-sm" id="Name" name="name" >
        </div>
        <div class="form-group col-md-6 ">
              <label>EMAIL</label>
               <input type="email" class="form-control input-sm" id="email" name="email" >
        </div>
      </div>


        <div class="row">
          <div class="col-md-6">
                  <input type="submit" name="sbcomment" value="comment" class="btn btn-primary">


    </div>
  </form>
</div>        




<?php require_once("footer.php");?>                                                      
          

                                                                


                                                     