<?php
    $client_id=$_POST["client_id"];
	$doc_name=$_POST["doc_name"];

	$upload_doc=$_FILES['upload_doc']['name'];
    if(empty($upload_doc))
	{
	$upload_doc=$_POST['upload_doc'];
	}
	else
	{
	$tmp_location=$_FILES['upload_doc']['tmp_name'];
	$target="../clilent/upload/".$upload_doc;
	move_uploaded_file($tmp_location,$target);
	}
$upload_date=$_POST["upload_date"];

include('../dbconnect.php');
	$sql="insert into client_document values(null,'$client_id','$doc_name','$upload_doc','$upload_date')";
	mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("Documents Uploded");
document.location="clientdocuments_view.php";
</script>