<?php
$client_id=$_POST["client_id"];
$client_name=$_POST["client_name"];
$client_address=$_POST["client_address"];
$city=$_POST["city"];
$contact_no=$_POST["contact_no"];
$email_id=$_POST["email_id"];
$reg_date=$_POST["reg_date"]; include('../dbconnect.php');
$sql="update client_details set client_name='$client_name',client_address='$client_address',city='$city',contact_no='$contact_no',email_id='$email_id',reg_date='$reg_date' where
client_id='$client_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated......");
document.location="clientdetails_view.php";
</script>