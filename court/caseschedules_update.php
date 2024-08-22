<?php
$case_schedule_id=$_POST["case_schedule_id"];
$case_detail_id=$_POST["case_detail_id"];
$case_date=$_POST["case_date"];
$case_time=$_POST["case_time"];
$status=$_POST["status"];

include('dbconnect.php');

$sql="update  case_schedules set case_schedule_id='$case_schedule_id',case_date='$case_date',case_time='$case_time',status='$status' where case_detail_id='$case_detail_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("updated");
document.location="caseschedules_view.php";
</script>