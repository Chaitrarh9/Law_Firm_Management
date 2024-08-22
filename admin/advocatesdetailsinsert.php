<?php

$advocate_name=$_POST["advocate_name"];
$date_of_birth=$_POST["date_of_birth"];
$qualification=$_POST["qualification"];
$address=$_POST["address"];
$city=$_POST["city"];
$contact_no=$_POST["contact_no"];
$email_id=$_POST["email_id"];
$experience=$_POST["experience"];
$bar_council_name=$_POST["bar_council_name"];
$advocate_type=$_POST["advocate_type"];
 include('../dbconnect.php');
$sql="insert into advocates_details values(null,'$advocate_name','$date_of_birth','$qualification','$address','$city','$contact_no','$email_id','$experience','$bar_council_name','$advocate_type','$dictionary_id')";
mysqli_query($conn,$sql);

$sql1="insert into login values('$email_id','$contact_no','advocate','Please Enter Your Contact Number?','$contact_no','active')";
mysqli_query($conn,$sql1);
?>
<script type="text/javascript">
alert("saved");
document.location="advocatesdetails.php";
</script>



