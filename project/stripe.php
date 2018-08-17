<?php require 'header.php'; 
$q = mysqli_query($conn,"select sum(subtotal) as total from sales where orderid = '$_SESSION[orderid]' ") or die();
	$d = mysqli_fetch_assoc($q);
	print_r($_SESSION);
?>

<form action="http://localhost/project/success.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-amount="<?php echo $d["total"]; ?>"
    data-name="hello world"
    data-description="thanks for "
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-zip-code="true"
    data-email = "reet@hotmail.com">
  </script>
</form>