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

include('dbconnect.php');

echo $sql="update advocates_details set advocate_name='$advocate_name',date_of_birth='$date_of_birth',qualification='$qualification',address='$address',city='$city',
contact_no='$contact_no',email_id='$email_id',experience='$experience',bar_council_name='$bar_council_name',
advocate_type='$advocate_type',dictionary_id='$dictionary_id' where advocate_id='$advocate_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("updated.....");
document.location="advocatesdetails_view.php";
</script>



