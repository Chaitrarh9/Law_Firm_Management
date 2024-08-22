<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="642" height="132" border="1" align="center">
  <tr>
    <td colspan="11"><div align="center">View Payment Details </div></td>
  </tr>
  <tr>
    <td width="34">Sl No </td>
    <td width="50">Client Name </td>
    <td width="75">Amount Paid </td>
    <td width="73">Description</td>
    <td width="87">Paymode</td>
    <td width="57">Bank Name </td>
    <td width="65">Cheque No </td>
    <td width="51"><p>Payment Date </p></td>
    <td width="27">Edit</td>
    <td width="59">Delete</td>
  </tr>
  <?php
 include('dbconnect.php');
 $sn=1;
 $sql="select * from payment p,client_details cd where p.client_id=cd.client_id";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['amount_paid']?></td>
    <td>&nbsp;<?php echo $row['description']?></td>
    <td>&nbsp;<?php echo $row['paymode']?></td>
    <td>&nbsp;<?php echo $row['bank_name']?></td>
    <td>&nbsp;<?php echo $row['cheque_no']?></td>
    <td>&nbsp;<?php echo $row['payment_date']?></td>
    <td>&nbsp;<a href="payment_edit.php?payment_id=<?php echo $row['payment_id']?>">Edit</a></td>
    <td>&nbsp;<a href="payment_delete.php?payment_id=<?php echo $row['payment_id']?>">Delete</a></td>
 </tr>
<?php
}
?>
</table>
</body>
</html>
