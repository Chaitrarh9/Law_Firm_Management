<?php

include('dbconnect.php');

$case_detail_id=$_REQUEST['case_detail_id'];

$sql="delete from case_schedules where case_detail_id='$case_detail_id'";
mysql_query($sql);
?>
<script>
alert("Deleted ..");
document.location="caseschedules_view.php";
</script>