<?php
		ob_start();
		session_start();
		$conn=mysqli_connect("localhost","root","")or die(mysqli_error($conn));
		mysqli_select_db($conn,"abc")or die(mysqli_error($conn));
		?>
