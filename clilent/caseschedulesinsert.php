<?php
$case_schedule_id=$_POST["case_schedule_id"];
$case_detail_id=$_POST["case_detail_id"];
$case_date=$_POST["case_date"];
$case_time=$_POST["case_time"];
$status=$_POST["status"];
include('../dbconnect.php');
$sql=" insert into case_schedules values('$case_schedule_id',null,'$case_date','$case_time','$status')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="caseschedules.php";
</script>