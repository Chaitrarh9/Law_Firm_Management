<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
<table width="798" height="138" border="1" align="center">
  <tr>
    <td colspan="8"><div align="center"><span class="style1">view case schedule </span></div></td>
  </tr>
  <tr>
    <td width="104" height="38">Sl No </td>
    <td width="130">Case Schedule Id</td>
    <td width="103">Case Date </td>
    <td width="95">Case Time</td>
    <td width="59">Status</td>
    <td width="49">Edit</td>
    <td width="67">Delete</td>
  </tr>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  case_schedules";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row['case_schedule_id']?></td>
    <td><?php echo $row['case_date']?></td>
    <td><?php echo $row['case_time']?></td>
    <td><?php echo $row['status']?></td>
    <td><a href="caseschedules_edit.php?case_detail_id=<?php echo $row['case_detail_id'] ?>" >Edit</a> </td>
    <td><a href="caseschedules_delete.php?case_detail_id=<?php echo $row['case_detail_id'] ?>">Delete</a></td>
  </tr>
  <?php
}
?>
</table>
