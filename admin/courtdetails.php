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
                                Court Details <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Court Details Insertion</span>
										</div>

<form id="formID" name="form1" method="post" action="courtdetailsinsert.php">
  <p>&nbsp;</p>
  <table width="397" height="404" border="0" align="center">
    
    <tr>
      <td>Court Name</td>
      <td><input name="court_name"maxlength="50" type="text" id="court_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" maxlength="100" id="address"class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city"maxlength="20" type="text" id="city"class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="56">Contact Number </td>
      <td><input name="contact_no" maxlength="12" type="text" id="contact_no" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="72"><div align="center">
          <input type="submit" name="Submit2"class="btn btn-primary" value="Submit" />
      </div></td>
      <td><div align="center">
          <input type="reset" name="Submit3" class="btn btn-danger"value="reset" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
