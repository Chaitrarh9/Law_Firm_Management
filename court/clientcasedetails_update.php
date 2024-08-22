<?php
$client_case_id=$_POST["client_case_id"];
$client_id=$_POST["client_id"];
$advocate_id=$_POST["advocate_id"];
$case_name=$_POST["case_name"];
$case_description=$_POST["case_description"];
$court_id=$_POST["court_id"];
$first_client_party=$_POST["first_client_party"];
$second_client_party=$_POST["second_client_party"];
$date=$_POST["date"];
$status=$_POST["status"];

include('dbconnect.php');

$sql="update client_case_details set client_id='$client_id',advocate_id='$advocate_id',case_name='$case_name',case_description='$case_description',court_id='$court_id',first_client_party='$first_client_party',second_client_party='$second_client_party',date='$date',status='$status' where client_case_id='$client_case_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("updated......");
document.location="clientcasedetails_view.php";
</script>