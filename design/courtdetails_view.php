<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
<table width="555" height="209" border="1" align="center">
  <tr>
    <td colspan="7"><div align="center" class="style1">view court details </div></td>
  </tr>
  <tr>
    <td width="45">Sl No </td>
    <td width="60">Court Name </td>
    <td width="66">Address</td>
    <td width="52">City</td>
    <td width="68">Contact No </td>
    <td width="72">Edit</td>
    <td width="146">Delete</td>
  </tr>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  court_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['court_name']?></td>
    <td>&nbsp;<?php echo $row['address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<a href="courtdetails_edit.php?court_id=<?php echo $row['court_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="courtdetails_delete.php?court_id=<?php echo $row['court_id'] ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>

