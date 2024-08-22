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
                                Payment <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Payment Insertion</span>
	<?php
$uname=$_SESSION['uname'];
?>   									</div>

<?php
include('../dbconnect.php');
 
$sn=1;
$sql="select * from client_details where c_email_id='$uname'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);

$cid=$row['client_name'];
?>
<form id="formID" name="form1" method="post" action="payment_insert.php">
  <p>&nbsp;</p>
  <table width="413" height="533" border="0" align="center">

    <tr>
      <td width="164" height="66"><strong>Client Name </strong></td>
 <td width="239"><input name="client_id" type="text" readonly="readonly" id="client_id" value="<?php echo $cid;?>" /></td>
    </tr>

    <tr>
      <td><strong>Amount Paid </strong></td>
      <td><input name="amount_paid" type="text" id="amount_paid" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="description" id="description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td><strong>Paymode</strong></td>
      <td><input name="paymode" type="radio" value="Cash" class="validate[required]"/>
      Cash 
        <input name="paymode" type="radio" value="Cheque" class="validate[required]"/>
      cheque</td>
    </tr>
    <tr>
      <td height="58"><strong>Bank Name </strong></td>
      <td><input name="bank_name" type="text" id="bank_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="65"><strong>Cheque No </strong></td>
      <td><input name="cheque_no" type="text" id="cheque_no" class="validate[required,custom[onlyNumber]]" />      </td>
    </tr>
    <tr>
      <td><strong>Payment Date </strong></td>
      <td><input name="payment_date" type="date" id="payment_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="72"><div align="center">
	  <input type="submit" name="Submit" class="btn btn-primary"value="save" />
	  </div></td>
      <td><div align="center">
	  <input type="reset" name="Submit2"class="btn btn-danger" value="reset" />
	  </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>
									
							  </div>
									
									
					  </div>
								
				  </div>
								
			  </div>
								
		  </div>

                                
</div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
      <?php include('footer.php');?>

