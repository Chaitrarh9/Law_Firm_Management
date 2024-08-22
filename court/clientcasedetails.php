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
  <table width="441" height="732" border="0" align="center">
    <tr>
      <td width="211" height="58"><strong>Client Case Id </strong></td>
      <td width="220"><input name="client_case_id" type="text" id="client_case_id" class="validate[required,custom[onlyNumber]]" /></td>
    </tr>
    <tr>
      <td height="61"><strong>Client Id </strong></td>
      <td><input name="client_id" type="text" id="client_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td height="66"><strong>Advocate Id </strong></td>
      <td><input name="advocate_id" type="text" id="advocate_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td height="60"><strong>Case Name </strong></td>
      <td><input name="case_name" type="text" id="case_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Case Description </strong></td>
      <td><textarea name="case_description" id="case_description" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="60"><strong>Court Id </strong></td>
      <td><input name="court_id" type="text" id="court_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td height="71"><strong>First Client Party </strong></td>
      <td><input name="first_client_party" type="text" id="first_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="53"><strong>Second Client Party </strong></td>
      <td><input name="second_client_party" type="text" id="second_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="58"><strong>Date</strong></td>
      <td><input name="date" type="date" id="date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="58"><strong>Status</strong></td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="79"><div align="center">
        <input type="submit" name="Submit14" class="btn btn-primary"value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Reset" class="btn btn-danger"value="reset" />
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
