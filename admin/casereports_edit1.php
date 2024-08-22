<?php include('../dbconnect.php');

$case_report_id=$_REQUEST['case_report_id'];
 
 $sql="select * from case_reports where case_report_id='$case_report_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #990000;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="casereports_update.php">
<input type="hidden" value="<?php echo $row['case_report_id']?>" name="case_report_id" />
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="344" border="1" align="center">
    <tr>
      <td height="53" colspan="2" class="style1"><div align="center">case reports</div></td>
    </tr>
    <tr>
      <td width="144" height="79">report name </td>
      <td width="184"><input name="report_name" type="text" id="report_name" value="<?php echo $row['report_name']?>" /></td>
    </tr>
    <tr>
      <td>case detail id </td>
      <td><input name="case_detail_id" type="text" id="case_detail_id" value="<?php echo $row['case_detail_id']?>" /></td>
    </tr>
    <tr>
      <td>report</td>
      <td><textarea name="report" id="report"><?php echo $row['report']?></textarea></td>
    </tr>
    <tr>
      <td height="23">upload date</td>
      <td><input name="upload_date" type="date" id="upload_date" value="<?php echo $row['upload_date']?>" /></td>
    </tr>
    <tr>
      <td height="23">client case id </td>
      <td><input name="client_case_id" type="text" id="client_case_id" value="<?php echo $row['client_case_id']?>" /></td>
    </tr>
    <tr>
      <td height="23"><input type="submit" name="Submit16" value="update" /></td>
      <td><input type="submit" name="Submit17" value="cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
