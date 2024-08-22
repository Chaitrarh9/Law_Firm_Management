<?php

include('../dbconnect.php');

$payment_id=$_REQUEST['payment_id'];

$sql="delete from payment where payment_id='$payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Deleted...");
document.location="payment_view.php";
</script>