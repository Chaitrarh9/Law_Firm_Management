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
										</div>

<form id="formID" name="form1" method="post" action="payment_insert.php">
  <p>&nbsp;</p>
  <table width="407" height="541" border="0" align="center">

    <tr>
      <td width="164" height="83"><strong>Select Client Name </strong></td>
      <td width="233"><select name="client_id" id="client_id" class="validate[required]">
        <option value="">select</option>
		<?php
 include('../dbconnect.php');
$uname=$_SESSION['uname'];
 $sql="select * from client_details cd, advocates_details ad where cd.advocate_id=ad.advocate_id and ad.email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
<?php
}
 
?>
      </select>      </td>
    </tr>

    <tr>
      <td height="48"><strong>Amount Paid </strong></td>
      <td><input name="amount_paid"maxlength="100" type="text" id="amount_paid" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td height="54"><strong>Pan Card </strong></td>
      <td><input name="pan_card"maxlength="30" type="text" id="pan_card"  /></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="description" maxlength="100"id="description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td height="49"><strong>Paymode</strong></td>
      <td><input name="paymode" type="radio" id="cash" value="Cash" class="validate[required]"/>
      Cash 
        <input name="paymode" type="radio" id="check" value="Cheque" class="validate[required]"/>
      cheque</td>
    </tr>
    <tr>
      <td height="49"><strong>Bank Name </strong></td>
      <td><input name="bank_name"maxlength="30" type="text" id="bank_name" class="validate[required]" /></td>
    </tr>
    <tr>
      <td height="48"><strong>Cheque No </strong></td>
      <td><input name="cheque_no"maxlength="30" type="text" id="cheque_no" /></td>
    </tr>
    <tr>
      <td height="43"><strong>Payment Date </strong></td>
      <td><input name="payment_date" readonly="" value="<?php echo date('Y-m-d'); ?>" type="date" id="payment_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="63"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit2"class="btn btn-danger"  value="reset" />
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

