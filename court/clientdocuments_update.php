<?php
$clientdoc_id=$_POST["clientdoc_id"];
$client_id=$_POST["client_id"];
$doc_name=$_POST["doc_name"];
$document=$_POST["document"];
$upload_date=$_POST["upload_date"];

include('dbconnect.php');

$sql="update client_document set client_id='$client_id',doc_name='$doc_name',document='$document',upload_date='$upload_date' where clientdoc_id='$clientdoc_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("updated.....");
document.location="clientdocuments_view.php";
</script>
