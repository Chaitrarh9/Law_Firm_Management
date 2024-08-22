
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
										
										<div class="widget-content form-container">
<?php include('../dbconnect.php');

$client_id=$_REQUEST['client_id'];
 
 $sql="select * from client_details where client_id='$client_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="clientdetails_update.php">
<input type="hidden" value="<?php echo $row['client_id']?>" name="client_id" />
<table width="405" height="429" border="0" align="center">
    <tr>
      <td width="182"><strong>Client Name </strong></td>
      <td width="207"><input name="client_name"maxlength="10" type="text" id="client_name" value="<?php echo $row['client_name']?>"class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><strong>Client Address </strong></td>
      <td><textarea name="client_address"maxlength="100" id="client_address" value="<?php echo $row['client_address']?>"class="validate[required]"><?php echo $row['client_address']?></textarea></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td><input name="city"maxlength="20" type="text" id="city" value="<?php echo $row['city']?>"class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><strong>Contact Number </strong></td>
	  <td>+91
	    <input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']?>"class="validate[required,custom[mobile]]" /></td>
    </tr>
    <tr>
      <td height="28"><strong>Email-Id</strong></td>
      <td><input name="email_id"maxlength="30" type="text" id="email_id" value="<?php echo $row['email_id']?>" class="validate[required,custom[email]]" /></td>
    </tr>
    <tr>
      <td height="28"><strong>Register Date </strong></td>
      <td><input name="reg_date" type="date" id="reg_date" value="<?php echo $row['reg_date']?>" /></td>
    </tr>
    <tr>
      <td height="61"><div align="center">
        <input type="submit" name="Submit4"class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit5"class="btn btn-danger" value="cancel" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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