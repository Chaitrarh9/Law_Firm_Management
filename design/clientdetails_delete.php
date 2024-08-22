<?php

include('dbconnect.php');

$client_id=$_REQUEST['client_id'];

$sql="delete from client_details where client_id='$client_id'";
mysql_query($sql);
?>
<script>
alert("Deleted...");
document.location="clientdetails_view.php";
</script>