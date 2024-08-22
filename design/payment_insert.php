<?php

$client_id=$_POST["client_id"];
$amount_paid=$_POST["amount_paid"];
$description=$_POST["description"];
$paymode=$_POST["paymode"];
$bank_name=$_POST["bank_name"];
$cheque_no=$_POST["cheque_no"];
$payment_date=$_POST["payment_date"];

include('dbconnect.php');
$sql="insert into payment values(null,'$client_id','$amount_paid','$description','$paymode','$bank_name','$cheque_no','$payment_date')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("saved......");
document.location="payment_view.php";
</script>