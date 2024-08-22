<?php

include('../dbconnect.php');

$advocate_id=$_REQUEST['advocate_id'];

$sql="delete from advocates_details where advocate_id='$advocate_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Deleted...");
document.location="advocates_details_view.php";
</script>