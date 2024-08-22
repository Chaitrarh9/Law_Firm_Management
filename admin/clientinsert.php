<?php
$client_id=$_POST["client_id"];
$client_name=$_POST["client_name"];
$client_address=$_POST["client_address"];
$city=$_POST["city"];
$contact_no=$_POST["contact_no"];
$email_id=$_POST["email_id"];
$reg_date=$_POST["reg_date"]; include('../dbconnect.php');
$sql="insert into client_details values(null,'$client_name','$client_address','$city','$contact_no','$email_id','$reg_date')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="clientdetails.php";
</script>