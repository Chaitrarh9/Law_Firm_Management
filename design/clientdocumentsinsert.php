<?php

$client_id=$_POST["client_id"];
$doc_name=$_POST["doc_name"];
$upload_date=$_POST["upload_date"];
include('dbconnect.php');
$sql="insert into client_document values(null,'$client_id','$doc_name','$upload_date')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("saved");
document.location="clientdocuments.php";
</script>
