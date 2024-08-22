<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="622" height="187" border="1" align="center">
  <tr>
    <td colspan="8"> <div align="center">view case report </div></td>
  </tr>
  <tr>
    <td width="45">Sl No </td>
    <td width="96">Case Name </td>
    <td width="62">Report</td>
    <td width="137">Upload Date</td>
    <td width="47">Client Case Id </td>
    <td width="47">Edit</td>
    <td width="49">Delete</td>
  </tr>
   <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from case_reports cr,client_case_details cc where cr.client_case_id=cc.client_case_id";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['case_name']?></td>
    <td>&nbsp;<?php echo $row['report']?></td>
    <td>&nbsp;<?php echo $row['upload_date']?></td>
    <td>&nbsp;<?php echo $row['client_case_id']?></td>
    <td><a href="casereports_edit.php?case_report_id=<?php echo $row['case_report_id'] ?>">Edit</a></td>
    <td><a href="casereports_delete.php?case_report_id=<?php echo $row['case_report_id'] ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>
</body>
</html>
