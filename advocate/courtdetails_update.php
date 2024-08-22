<?php
$court_id=$_POST["court_id"];
$court_name=$_POST["court_name"];
$address=$_POST["address"];
$city=$_POST["city"];
$contact_no=$_POST["contact_no"];

include('../dbconnect.php');

$sql="update court_details set court_name='$court_name',address='$address',city='$city',contact_no='$contact_no' where court_id='$court_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated.....");
document.location="courtdetails_view.php";
</script>