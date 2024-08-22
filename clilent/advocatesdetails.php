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
                                	Advocate Registration <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Advocate Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<form id="formID" name="form1" method="post" action="advocatesdetailsinsert.php">
  <p>&nbsp;</p>
  <table width="497" height="725" border="0" align="center">
    <tr>
      <td width="260" height="54">Advocate Name </td>
      <td width="227"><input name="advocate_name" type="text" id="advocate_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="52">Dob</td>
      <td><input name="date_of_birth" type="date" id="date_of_birth" class="validate[required,custom[date]]" /></td>
    </tr>
    <tr>
      <td height="47">Qualification</td>
      <td><input name="qualification" type="text" id="qualification" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="textarea"></textarea></td>
    </tr>
    <tr>
      <td height="60">City</td>
      <td><input name="city" type="text" id="city"  class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="58">Contact Number </td>
      <td> +91 
        <input name="contact_no" type="text" id="contact_no"  class="validate[required,custom[mobile]]" /></td>
    </tr>
    <tr>
      <td height="67">Email Id </td>
      <td><input name="email_id" type="text" id="email_id"  class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><textarea name="experience" id="experience" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="70">Bar Council Name </td>
      <td><input name="bar_council_name" type="text" id="bar_council_name" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="58">Advocate Type </td>
      <td><input name="advocate_type" type="text" id="advocate_type" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
	   <td height="67"><div align="center">
      <input type="submit" name="Submit" class="btn btn-primary"value="save" />
	  </div></td>
      <td><div align="center">
	  <input type="reset" name="Submit2" class="btn btn-danger" value="reset" />
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