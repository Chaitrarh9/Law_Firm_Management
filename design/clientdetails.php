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
                                Client Details <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Details Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="clientinsert.php">
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <table width="391" height="405" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Details </div></td>
    </tr>
    <tr>
      <td width="94">Client Name </td>
      <td width="205"><input name="client_name" type="text" id="client_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Client Address </td>
      <td><textarea name="client_address" id="client_address" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td>City</td>
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
      <td height="28">Register Date </td>
      <td><input name="reg_date" type="date" id="reg_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="28"><input type="submit" name="Submit4" value="Save" /></td>
      <td><input type="submit" name="Submit5" value="reset" /></td>
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
