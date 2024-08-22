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
                                Client Details <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Details Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="clientinsert.php">
  <p>&nbsp;</p>
  <table width="424" height="460" border="0" align="center">
    <tr>
      <td width="174"><strong>Client Name </strong></td>
      <td width="240"><input name="client_name" type="text" id="client_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Client Address </strong></td>
      <td><textarea name="client_address" id="client_address" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td><input name="city" type="text" id="city" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Contact Number </td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td height="28">Email-Id</td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td height="55">Register Date </td>
      <td><input name="reg_date" type="date" id="reg_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="60"><div align="center">
        <input type="submit" name="Submit4" class="btn btn-primary" value="Save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit5" class="btn btn-danger"value="reset" />
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
