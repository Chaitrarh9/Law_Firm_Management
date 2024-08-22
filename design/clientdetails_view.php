<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style><table width="872" height="137" border="1" align="center">
  <tr>
    <td colspan="9"><div align="center"><span class="style1">view client details </span></div></td>
  </tr>
  <tr>
    <td width="54">Sl No </td>
    <td width="188">client name</td>
    <td width="105">Client Address </td>
    <td width="98">City</td>
    <td width="88">Contact Number </td>
    <td width="82">Email Id </td>
    <td width="95">Register Date </td>
    <td width="50">Edit</td>
    <td width="54">Delete</td>
  </tr>
  <?php
include('dbconnect.php');
 
$sn=1;
$sql="select * from client_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['client_address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<?php echo $row['email_id']?></td>
    <td>&nbsp;<?php echo $row['reg_date']?></td>
    <td>&nbsp;<a href="clientdetails_edit.php?client_id=<?php echo $row['client_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="clientdetails_delete.php?client_id=<?php echo $row['client_id'] ?>">Delete</a></td>
  </tr>
  <?php
}
?>
</table>
