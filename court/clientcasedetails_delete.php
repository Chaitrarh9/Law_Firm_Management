<?php

include('dbconnect.php');

$client_case_id=$_REQUEST['client_case_id'];

$sql="delete from client_case_details where client_case_id='$client_case_id'";
mysql_query($sql);
?>
<script>
alert("Deleted ..");
document.location="clientcasedetails_view.php";
</script>