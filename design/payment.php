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

<form id="formID" name="form1" method="post" action="payment_insert.php">
  <p>&nbsp;</p>
  <table width="332" height="371" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Payment</div></td>
    </tr>

    <tr>
      <td width="78">Client Id </td>
      <td width="173"><select name="client_id" id="client_id" class="validate[required]">
        <option value="">select</option>
		<?php
 include('dbconnect.php');

 $sql="select * from client_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
<?php
}
 
?>
      </select>
      </td>
    </tr>

    <tr>
      <td>Amount Paid </td>
      <td><input name="amount_paid" type="text" id="amount_paid" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td>Paymode</td>
      <td><input name="paymode" type="radio" value="Cash" class="validate[required]"/>
      Cash 
        <input name="paymode" type="radio" value="Cheque" class="validate[required]"/>
      cheque</td>
    </tr>
    <tr>
      <td>Bank Name </td>
      <td><input name="bank_name" type="text" id="bank_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Cheque No </td>
      <td><input name="cheque_no" type="text" id="cheque_no" class="validate[required,custom[onlyNumber]]" />      </td>
    </tr>
    <tr>
      <td>Payment Date </td>
      <td><input name="payment_date" type="date" id="payment_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="save" /></td>
      <td><input type="submit" name="Submit2" value="reset" /></td>
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

