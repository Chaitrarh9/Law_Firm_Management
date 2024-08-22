<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
</head>

<body>
<table width="733" border="1" align="center">
  <tr>
    <td colspan="12"><div align="center" class="style1">view client case details </div></td>
  </tr>
  <tr>
    <td width="27">Sl No </td>
    <td width="39">client id</td>
    <td width="63">Advocate Id </td>
    <td width="53">Case Name </td>
    <td width="81">Case Description </td>
    <td width="44">Court Id </td>
    <td width="61">First Client Party </td>
    <td width="66">Second Client Party </td>
    <td width="60">Date</td>
    <td width="50">Status</td>
    <td width="53">Edit</td>
    <td width="60">Delete</td>
  </tr>
   <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  client_case_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_id']?></td>
    <td>&nbsp;<?php echo $row['advocate_id']?></td>
    <td>&nbsp;<?php echo $row['case_name']?></td>
    <td>&nbsp;<?php echo $row['case_description']?></td>
    <td>&nbsp;<?php echo $row['court_id']?></td>
    <td>&nbsp;<?php echo $row['first_client_party']?></td>
    <td>&nbsp;<?php echo $row['second_client_party']?></td>
    <td>&nbsp;<?php echo $row['date']?></td>
    <td>&nbsp;<?php echo $row['status']?></td>
    <td>&nbsp;<a href="clientcasedetails_edit.php?client_case_id=<?php echo $row['client_case_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="clientcasedetails_delete.php?client_case_id=<?php echo $row['client_case_id'] ?>">Delete</a></td>
  </tr>
<?php
}
?>
  
</table>
</body>
</html>
