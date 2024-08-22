<?php
$dictionary_id=$_POST["dictionary_id"];
$dictionary_word=$_POST["dictionary_word"];
$description=$_POST["description"];
include('dbconnect.php');
$sql="insert into dictionaries values(null,'$dictionary_word','$description')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("saved");
document.location="dictionaries.php";
</script>

