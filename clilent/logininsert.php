<?php
$username=$_POST["username"];
$password=$_POST["password"];
$type=$_POST["type"];
$hint_question=$_POST["hint_question"];
$hint_answer=$_POST["hint_answer"];
$status=$_POST["status"];
include('dbconnect.php');
$sql="insert into login values('$username','$password','$type','$hint_question','$hint_answer','$status')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("saved");
document.location="login.php";
</script>


