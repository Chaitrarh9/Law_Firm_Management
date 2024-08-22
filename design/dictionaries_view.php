<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
<table width="887" height="156" border="1" align="center">
  <tr>
    <td colspan="5"><div align="center" class="style1">view dictionaries </div></td>
  </tr>
  <tr>
    <td width="189">Sl No </td>
    <td width="201">Dictionary word </td>
    <td width="198">Description</td>
    <td width="164">Edit</td>
    <td width="101">Delete</td>
  </tr>
   <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  dictionaries";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['dictionary_word']?></td>
    <td>&nbsp;<?php echo $row['description']?></td>
    <td>&nbsp;<a href="dictionaries_edit.php?dictionary_id=<?php echo $row['dictionary_id'] ?>">Edit</a></td>
	<td>&nbsp;<a href="dictionaries_delete.php?dictionary_id=<?php echo $row['dictionary_id']?>">Delete</a></td>
  </tr>
  <?php
}
?>
</table>

