<?php
$article_id=$_POST["article_id"];
$article_name=$_POST["article_name"];
$short_description=$_POST["short_description"];
$complete_description=$_POST["complete_description"];


include('dbconnect.php');

$sql="update articles set article_name='$article_name',short_description='$short_description',complete_description='$complete_description' where article_id='$article_id'";
mysql_query($sql);
?>
<script type="text/javascript">
alert("Updated......");
document.location="articles_view.php";
</script>