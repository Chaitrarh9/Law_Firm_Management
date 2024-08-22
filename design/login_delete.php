<?php

include('dbconnect.php');

$password=$_REQUEST['password'];

$sql="delete from login where password='$password'";
mysql_query($sql);
?>
<script>
alert("Deleted...");
document.location="login_view.php";
</script>