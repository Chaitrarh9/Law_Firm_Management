<?php include('../dbconnect.php');

$dictionary_id=$_REQUEST['dictionary_id'];

$sql="delete from dictionaries where dictionary_id='$dictionary_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Deleted ..");
document.location="dictionaries_view.php";
</script>