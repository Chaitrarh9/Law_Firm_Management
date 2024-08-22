
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
                                Client Details <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Details Insertion</span>
										</div>
	 
	<?php
include('../dbconnect.php');
 
$sn=1;
$uname=$_SESSION['uname'];
$sql="select * from advocates_details where email_id='$uname'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);

$adv_id=$row['advocate_id'];
?>


	
<form id="formID" name="form1" method="post" action="clientinsert.php">
<input name="adv_id" id="adv_id" type="hidden" value="<?php echo $adv_id;?>" />
<table width="507" height="464" border="0" align="center">
    <tr>
      <td width="94"><strong>Client Name </strong></td>
      <td width="205"><input name="client_name"maxlength="30" type="text" id="client_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Client Address </strong></td>
      <td><textarea name="client_address"maxlength="100" id="client_address" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="62"><strong>City</strong></td>
      <td><input name="c_city"maxlength="30" type="text" id="c_city" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
   
    <tr>
      <td height="28"><strong>Email-Id</strong></td>
      <td><input name="c_email_id"maxlength="30" type="text" id="c_email_id" class="validate[required,custom[email]]"/> Client Username*</td>
    </tr>
	 <tr>
      <td><strong>Contact Number </strong></td>
      <td><input name="c_contact_no" maxlength="10" type="text" id="c_contact_no" class="validate[required,custom[mobile]]"/> Password*</td>
    </tr>
    <tr>
      <td height="42"><strong>Register Date </strong></td>
      <td><input name="reg_date" type="date" id="reg_date" readonly="" value="<?php echo date('Y-m-d'); ?>" ></td>
    </tr>
    <tr>
      <td height="51"><div align="center">
        <input type="submit" name="Submit4" class="btn btn-primary"value="Save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit5" class="btn btn-danger"value="reset" />
      </div></td>
    </tr>
  </table>
 
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
