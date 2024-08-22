
<?php include('metatags.php');?>
	
<?php include('header.php');?>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
 <?php include('sidebar.php');?>

                        
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	
                                
                                <h1 id="main-heading">
                                	Payment <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Payment Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$payment_id=$_REQUEST['payment_id'];
 
 $sql="select * from payment where payment_id='$payment_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);

?>

<form id="form1" name="form1" method="post" action="payment_update.php">
<input type="hidden" value="<?php echo $row['payment_id']?>" name="payment_id" />
<table width="319" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Payment</div></td>
    </tr>
    <tr>
      <td width="98">Client Id </td>
      <td width="205"><select name="client_id" id="client_id">
        <option selected="selected">select</option>
        <?php
 include('dbconnect.php');

 $sql2="select * from client_details";
$res2=mysql_query($sql2); 
while($row2=mysql_fetch_array($res2))
{
?>
        <option value="<?php echo $row2['client_id']?>" <?php if($row2['client_id']==$row['client_id']) {?> selected <?php } ?>><?php echo $row2['client_name']?></option>
        <?php
}
 
?>
      </select></td>
    </tr>
    <tr>
      <td>Amount Paid </td>
      <td><input name="amount_paid" type="text" id="amount_paid" value="<?php echo $row['amount_paid']?>" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description"><?php echo $row['description']?></textarea></td>
    </tr>
    <tr>
      <td>Paymode</td>
      <td><input name="paymode" type="radio" value="cash" />
      cash
        <input name="paymode" type="radio" value="cheque" />
      cheque</td>
    </tr>
    <tr>
      <td>Bank Name</td>
      <td><input name="bank_name" type="text" id="bank_name" value="<?php echo $row['bank_name']?>" /></td>
    </tr>
    <tr>
      <td>Cheque No </td>
      <td><input name="cheque_no" type="text" id="cheque_no" value="<?php echo $row['cheque_no']?>" /></td>
    </tr>
    <tr>
      <td>Payment Date </td>
      <td><input name="payment_date" type="date" id="payment_date" value="<?php echo $row['payment_date']?>" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="update" /></td>
      <td><input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
