<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
<table width="721" height="135" border="1" align="center">
  <tr>
    <td colspan="9"><div align="center"><span class="style1">view login </span></div></td>
  </tr>
  <tr>
    <td width="40">Sl No </td>
    <td width="98">Username</td>
    <td width="96">Password</td>
    <td width="51">Type</td>
    <td width="93">Hint Question </td>
    <td width="82">Hint Answer </td>
	<td width="82">Status </td>
    <td width="39">Edit</td>
    <td width="82">Delete</td>
  </tr>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  login";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['username']?></td>
    <td>&nbsp;<?php echo $row['password']?></td>
    <td>&nbsp;<?php echo $row['type']?></td>
    <td>&nbsp;<?php echo $row['hint_question']?></td>
    <td>&nbsp;<?php echo $row['hint_answer']?></td>
    <td>&nbsp;<?php echo $row['status']?></td>
    <td>&nbsp;<a href="login_edit.php?password=<?php echo $row['password'] ?>">Edit</td>
	 <td>&nbsp;<a href="login_delete.php?password=<?php echo $row['password'] ?>">Delete</td>
  </tr>
</table>
