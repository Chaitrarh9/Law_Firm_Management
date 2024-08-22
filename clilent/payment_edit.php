
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
                                	Payment <span>Law_Firm</span>
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
 include('../dbconnect.php');

$payment_id=$_REQUEST['payment_id'];
 
 $sql="select * from payment where payment_id='$payment_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);

?>

<form id="form1" name="form1" method="post" action="payment_update.php">
<input type="hidden" value="<?php echo $row['payment_id']?>" name="payment_id" />
<table width="414" border="0" align="center">
    <tr>
      <td width="152" height="68"><strong>Client Id </strong></td>
      <td width="252"><select name="client_id" id="client_id">
        <option selected="selected">select</option>
        <?php
 include('../dbconnect.php');

 $sql2="select * from client_details";
$res2=mysqli_query($conn,$sql2); 
while($row2=mysqli_fetch_array($res2))
{
?>
        <option value="<?php echo $row2['client_id']?>" <?php if($row2['client_id']==$row['client_id']) {?> selected <?php } ?>><?php echo $row2['client_name']?></option>
        <?php
}
 
?>
      </select></td>
    </tr>
    <tr>
      <td height="55"><strong>Amount Paid </strong></td>
      <td><input name="amount_paid" type="text" id="amount_paid" value="<?php echo $row['amount_paid']?>" /></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="description" id="description"><?php echo $row['description']?></textarea></td>
    </tr>
    <tr>
      <td height="53"><strong>Paymode</strong></td>
      <td><input name="paymode" type="radio" value="cash" />
      cash
        <input name="paymode" type="radio" value="cheque" />
      cheque</td>
    </tr>
    <tr>
      <td height="51"><strong>Bank Name</strong></td>
      <td><input name="bank_name" type="text" id="bank_name" value="<?php echo $row['bank_name']?>" /></td>
    </tr>
    <tr>
      <td height="43"><strong>Cheque No </strong></td>
      <td><input name="cheque_no" type="text" id="cheque_no" value="<?php echo $row['cheque_no']?>" /></td>
    </tr>
    <tr>
      <td height="52"><strong>Payment Date </strong></td>
      <td><input name="payment_date" type="date" id="payment_date" value="<?php echo $row['payment_date']?>" /></td>
    </tr>
    <tr>
      <td height="52"><div align="center">
        <input type="submit" name="Submit"class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit2"class="btn btn-danger" value="reset" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
