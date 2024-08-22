<?php

include('dbconnect.php');

$clientdoc_id=$_REQUEST['clientdoc_id'];

$sql="delete from client_document where clientdoc_id='$clientdoc_id'";
mysql_query($sql);
?>
<script>
alert("Deleted...");
document.location="clientdocuments_view.php";
</script>