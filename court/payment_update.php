<?php
$payment_id=$_POST["payment_id"];
$client_id=$_POST["client_id"];
$amount_paid=$_POST["amount_paid"];
$description=$_POST["description"];
$paymode=$_POST["paymode"];
$bank_name=$_POST["bank_name"];
$cheque_no=$_POST["cheque_no"];
$payment_date=$_POST["payment_date"];

include('dbconnect.php');

$sql="update payment set client_id='$client_id',amount_paid='$amount_paid',description='$description',paymode='$paymode',bank_name='$bank_name',cheque_no='$cheque_no',payment_date='$payment_date' where payment_id='$payment_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("Updated......");
document.location="payment_view.php";
</script>