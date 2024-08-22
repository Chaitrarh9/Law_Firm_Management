<?php

$report_name=$_POST["report_name"];

$report=$_POST["report"];
$upload_date=$_POST["upload_date"];
$client_case_id=$_POST["client_case_id"];
include('dbconnect.php');
$sql="insert into case_reports values(null,'$report_name','$report','$upload_date','$client_case_id')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("saved");
document.location="casereports_view.php";
</script>