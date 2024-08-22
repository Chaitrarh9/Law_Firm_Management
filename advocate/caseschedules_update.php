<?php
$client_case_id=$_POST["client_case_id"];
$case_detail_id=$_POST["case_detail_id"];
$case_date=$_POST["case_date"];
$case_time=$_POST["case_time"];
$c_status=$_POST["c_status"];

include('../dbconnect.php');

$sql="update case_schedules set client_case_id='$client_case_id',case_date='$case_date',case_time='$case_time',c_status='$c_status' where case_detail_id='$case_detail_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated");
document.location="caseschedules_view.php";
</script>