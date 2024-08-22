<?php
$article_name=$_POST["article_name"];
$short_description=$_POST["short_description"];
$complete_description=$_POST["complete_description"]; include('../dbconnect.php');
$sql="insert into articles values(null,'$article_name','$short_description','$complete_description')";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("saved");
document.location="articles_view.php";
</script>