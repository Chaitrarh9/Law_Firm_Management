<?php
$advocate_id=$_POST["advocate_id"];
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
$dictionary_id=$_POST["dictionary_id"];
include('../dbconnect.php');
echo $sql="insert into advocate_details values(null,'$advocate_name','$date_of_birth','$qualification','$address','$city','$contact_no','$email_id','$experience','$bar_council_name',
'$advocate_type','$dictionary_id')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="advocatesdetails.php";
</script>



