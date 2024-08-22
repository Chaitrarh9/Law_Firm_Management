<?php

include('dbconnect.php');

$case_report_id=$_REQUEST['case_report_id'];

$sql="delete from case_reports where case_report_id='$case_report_id'";
mysql_query($sql);
?>
<script>
alert("Deleted ..");
document.location="casereports_view.php";
</script>