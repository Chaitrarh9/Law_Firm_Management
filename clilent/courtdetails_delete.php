<?php

include('../dbconnect.php');

$court_id=$_REQUEST['court_id'];

$sql="delete from court_details where court_id='$court_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Deleted ..");
document.location="courtdetails_view.php";
</script>