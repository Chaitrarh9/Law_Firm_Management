<?php
$clientdoc_id=$_POST["clientdoc_id"];
$client_id=$_POST["client_id"];
$doc_name=$_POST["doc_name"];
$upload_date=$_POST["upload_date"];

include('../dbconnect.php');

$sql="update client_document set client_id='$client_id',doc_name='$doc_name',upload_date='$upload_date' where clientdoc_id='$clientdoc_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated.....");
document.location="clientdocuments_view.php";
</script>
