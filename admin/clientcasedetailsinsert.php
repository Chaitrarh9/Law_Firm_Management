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
$status=$_POST["status"]; include('../dbconnect.php');
$sql="insert into client_case_details values('$client_case_id','$client_id','$advocate_id','$case_name','$case_description',
'$court_id','$first_client_party','$second_client_party','$date','$status')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="clientcasedetails.php";
</script>