<?php
$case_report_id=$_POST["case_report_id"];
$report_name=$_POST["report_name"];
$report=$_POST["report"];
$upload_date=$_POST["upload_date"];
$client_case_id=$_POST["client_case_id"];

include('../dbconnect.php');

$sql="update  case_reports set report_name='$report_name',report='$report',upload_date='$upload_date',client_case_id='$client_case_id' where case_report_id='$case_report_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated");
document.location="casereports_view.php";
</script>