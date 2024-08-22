<?php
$court_id=$_POST["court_id"];
$court_name=$_POST["court_name"];
$address=$_POST["address"];
$city=$_POST["city"];
$contact_no=$_POST["contact_no"];
include('../dbconnect.php');
$sql="insert into court_details values('$court_id','$court_name','$address','$city','$contact_no')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="courtdetails.php";
</script>