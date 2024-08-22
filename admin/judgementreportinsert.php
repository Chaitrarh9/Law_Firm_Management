<?php
$judgement_report_id=$_POST["judgement_report_id"];
$case_detail_id=$_POST["case_detail_id"];
$case_rep_id=$_POST["case_rep_id"];
$judgement_description=$_POST["judgement_description"];
$attach_report=$_POST["attach_report"];
$case_date=$_POST["case_date"];
$status=$_POST["status"]; include('../dbconnect.php');
$sql="insert into  judgement_report values('$judgement_report_id','$case_detail_id','$case_rep_id','$judgement_description','$attach_report','$case_date','$status')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="judgementreport.php";
</script>