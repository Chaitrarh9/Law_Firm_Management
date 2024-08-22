<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
<table width="559" height="173" border="1" align="center">
  <tr>
    <td colspan="7"><div align="center" class="style1">view client documents </div></td>
  </tr>
  <tr>
    <td width="50">Sl No </td>
    <td width="136">Client Name </td>
    <td width="142">Document Name</td>
    <td width="90">Upload Date</td>
    <td width="48">Edit</td>
    <td width="53">Delete</td>
  </tr>
<?php
include('dbconnect.php');
 
$sn=1;
$sql="select * from client_document cd,client_details c where cd.client_id=c.client_id";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['doc_name']?></td>
    <td>&nbsp;<?php echo $row['upload_date']?></td>
    <td>&nbsp;<a href="clientdocuments_edit.php?clientdoc_id=<?php echo $row['clientdoc_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="clientdocuments_delete.php?clientdoc_id=<?php echo $row['clientdoc_id'] ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>

