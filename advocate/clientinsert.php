<?php
$adv_id=$_POST['adv_id'];
$client_id=$_POST["client_id"];
$client_name=$_POST["client_name"];
$client_address=$_POST["client_address"];
$c_city=$_POST["c_city"];
$c_contact_no=$_POST["c_contact_no"];
$c_email_id=$_POST["c_email_id"];
$reg_date=$_POST["reg_date"];
include('../dbconnect.php');

$sql="insert into client_details values(null,'$client_name','$client_address','$c_city','$c_contact_no','$c_email_id','$reg_date','$adv_id')";
mysqli_query($conn,$sql);

$sql1="insert into login values('$c_email_id','$c_contact_no','client','What is Your Contact Number?','$c_contact_no','active')";
mysqli_query($conn,$sql1);
?>
<script type="text/javascript">
alert("saved");
document.location="clientdetails_view.php";
</script>