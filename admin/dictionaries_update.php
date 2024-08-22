<?php
$dictionary_id=$_POST["dictionary_id"];
$dictionary_word=$_POST["dictionary_word"];
$description=$_POST["description"]; include('../dbconnect.php');

$sql="update dictionaries set dictionary_word='$dictionary_word',description='$description' where dictionary_id='$dictionary_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("updated....");
document.location="dictionaries_view.php";
</script>


