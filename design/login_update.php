<?php
$username=$_POST["username"];
$password=$_POST["password"];
$type=$_POST["type"];
$hint_question=$_POST["hint_question"];
$hint_answer=$_POST["hint_answer"];
$status=$_POST["status"];

include('dbconnect.php');

$sql="update  login set username='$username',type='$type',hint_question='$hint_question',hint_answer='$hint_answer',status='$status' where password='$password'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("updated");
document.location="login_view.php";
</script>


