<?php

include('dbconnect.php');

$payment_id=$_REQUEST['payment_id'];

$sql="delete from payment where payment_id='$payment_id'";
mysql_query($sql);
?>
<script>
alert("Deleted...");
document.location="payment_view.php";
</script>