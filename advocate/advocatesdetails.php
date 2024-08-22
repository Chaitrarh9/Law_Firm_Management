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
  <table width="446" height="700" border="0" align="center">
    <tr>
      <td width="80" height="78">Advocate Name </td>
      <td width="104"><input name="advocate_name"maxlength="20" type="text" id="advocate_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="49">Dob</td>
      <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date_of_birth", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td height="65">Qualification</td>
      <td><input name="qualification" maxlength="10"type="text" id="qualification" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="textarea"></textarea></td>
    </tr>
    <tr>
      <td height="44">City</td>
      <td><input name="city" maxlength="20" type="text" id="city"  class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="51">Contact Number </td>
      <td> +91 
        <input name="contact_no" type="text" id="contact_no"  class="validate[required,custom[mobile]]" /></td>
    </tr>
    <tr>
      <td height="42">Email Id </td>
      <td><input name="email_id" maxlength="30"type="text" id="email_id"  class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><textarea name="experience" maxlength="10" id="experience" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="48">Bar Council Name </td>
      <td><input name="bar_council_name"maxlength="30" type="text" id="bar_council_name" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="62">Advocate Type </td>
      <td><input name="advocate_type" maxlength="20"type="text" id="advocate_type" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="69"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary"value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit2"class="btn btn-danger" value="reset" />
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