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
<table width="998" height="139" border="1" align="left">
  <tr>
    <td colspan="15"><div align="center"><span class="style1">View Advocate Details </span></div></td>
  </tr>
  <tr>
    <td width="49" height="52">Sl No </td>
    <td width="63">Advocate Name </td>
    <td width="45">Dob</td>
    <td width="75">Qualification</td>
    <td width="67">Address</td>
    <td width="48">City</td>
    <td width="62">Contact Number</td>
    <td width="38">Email Id </td>
    <td width="67">Experience</td>
    <td width="71">Bar Council Name</td>
    <td width="69">Advocate Type</td>
    <td width="66">Edit</td>
    <td width="57">Delete</td>
   
  </tr>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from advocates_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['advocate_name']?></td>
    <td>&nbsp;<?php echo $row['date_of_birth']?></td>
    <td>&nbsp;<?php echo $row['qualification']?></td>
    <td>&nbsp;<?php echo $row['address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>+91&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<?php echo $row['email_id']?></td>
    <td>&nbsp;<?php echo $row['experience']?></td>
    <td>&nbsp;<?php echo $row['bar_council_name']?></td>
    <td>&nbsp;<?php echo $row['advocate_type']?></td>
    <td><a href="advocatesdetails_edit.php?advocate_id=<?php echo $row['advocate_id'] ?>">Edit</a></td>
    <td><a href="advocatesdetails_delete.php?advocate_id=<?php echo $row['advocate_id'] ?>">Delete</a></td>
</tr>
  <?php
}
?>
</table>
</body>

</html>
