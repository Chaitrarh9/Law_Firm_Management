<?php include('../dbconnect.php');

$article_id=$_REQUEST['article_id'];

$sql="delete from articles where article_id='$article_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Deleted...");
document.location="articles_view.php";
</script>