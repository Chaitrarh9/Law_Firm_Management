<?php

include('dbconnect.php');

$article_id=$_REQUEST['article_id'];

$sql="delete from articles where article_id='$article_id'";
mysql_query($sql);
?>
<script>
alert("Deleted...");
document.location="articles_view.php";
</script>