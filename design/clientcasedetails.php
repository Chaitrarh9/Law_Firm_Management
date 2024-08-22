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
                                Client Case Details <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Case Details Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="clientcasedetailsinsert.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="357" height="375" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Case Details </div></td>
    </tr>
    <tr>
      <td width="105">Client Case Id </td>
      <td width="192"><input name="client_case_id" type="text" id="client_case_id" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td>Client Id </td>
      <td><input name="client_id" type="text" id="client_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>Advocate Id </td>
      <td><input name="advocate_id" type="text" id="advocate_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>Case Name </td>
      <td><input name="case_name" type="text" id="case_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Case Description </td>
      <td><textarea name="case_description" id="case_description" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td>Court Id </td>
      <td><input name="court_id" type="text" id="court_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>First Client Party </td>
      <td><input name="first_client_party" type="text" id="first_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Second Client Party </td>
      <td><input name="second_client_party" type="text" id="second_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="date" id="date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit14" value="save" /></td>
      <td><input type="submit" name="Submit" value="reset" /></td>
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
