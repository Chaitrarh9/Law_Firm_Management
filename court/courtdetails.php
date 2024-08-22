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
                                Court Details <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Court Details Insertion</span>
										</div>

<form id="form1" name="form1" method="post" action="courtdetailsinsert.php">
  <p>&nbsp;</p>
  <table width="397" height="400" border="0" align="center">
    <tr>
      <td width="92">Court Id </td>
      <td width="103"><input name="court_id" type="text" id="court_id" /></td>
    </tr>
    <tr>
      <td>Court Name</td>
      <td><input name="court_name" type="text" id="court_name" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" /></td>
    </tr>
    <tr>
      <td height="62">Contact Number </td>
      <td><input name="contact_no" type="text" id="contact_no" /></td>
    </tr>
    <tr>
      <td height="62"><div align="center">
          <input type="submit" name="Submit2" class="btn btn-primary" value="Submit" />
      </div></td>
      <td><div align="center">
          <input type="reset" name="Submit3"class="btn btn-danger" value="reset" />
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
