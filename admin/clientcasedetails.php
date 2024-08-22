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
                                Client Case Details <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Case Details Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="clientcasedetailsinsert.php">
  <p>&nbsp;</p>
  <table width="433" height="582" border="0" align="center">
    <tr>
      <td width="203">Client Case Id </td>
      <td width="220"><input name="client_case_id" maxlength="10" type="text" id="client_case_id" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td>Client Id </td>
      <td><input name="client_id" maxlength="10" type="text" id="client_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>Advocate Id </td>
      <td><input name="advocate_id" maxlength="10" type="text" id="advocate_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>Case Name </td>
      <td><input name="case_name" maxlength="20" type="text" id="case_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Case Description </td>
      <td><textarea name="case_description" maxlength="50" id="case_description" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td>Court Id </td>
      <td><input name="court_id" maxlength="10" type="text" id="court_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td height="52">First Client Party </td>
      <td><input name="first_client_party" maxlength="20" type="text" id="first_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Second Client Party </td>
      <td><input name="second_client_party" maxlength="20" type="text" id="second_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="date" id="date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="64">Status</td>
      <td><input name="status" maxlength="10" type="text" id="status" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="68"><div align="center">
        <input type="submit" name="Submit14"class="btn btn-primary" value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Reset"class="btn btn-danger" value="reset" />
</div></td>
    </tr>
  </table>
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
