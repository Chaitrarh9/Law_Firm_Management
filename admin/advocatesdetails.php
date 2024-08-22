<?php include('metatags.php');?>
	
<?php include('header.php');?>
<style type="text/css">
<!--
.style2 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>

        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
 <?php include('sidebar.php');?>

                        
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	
                                
                                <h1 id="main-heading">
                                	Advocate Registration <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Advocate Insertion</span>
										</div>
										
										<div class="widget-content form-container">
										<?php include('cal.php'); ?>
<form id="formID" name="form1" method="post" action="advocatesdetailsinsert.php">
  <p>&nbsp;</p>
  <table width="532" height="774" border="0" align="center">
    <tr>
      <td width="229" height="54"><strong>Advocate Name </strong></td>
      <td width="293"><input name="advocate_name" maxlength="20" type="text" id="advocate_name" class="validate[required,custom[onlyLetter]]",maxlength="8" /></td>
    </tr>
    <tr>
      <td height="52"><strong>Dob</strong></td>
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
	  $myCalendar->setYearInterval(1950, date('Y')-18);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td height="49"><strong>Qualification</strong></td>
      <td><input name="qualification" maxlength="10" type="text" id="qualification" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><textarea name="address" maxlength="25" id="address"class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="61"><strong>City</strong></td>
      <td><input name="city" maxlength="10" type="text" id="city"  class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="51"><strong>Contact Number </strong></td>
      <td> +91 
        <input name="contact_no"  type="text" id="contact_no"  class="validate[required,custom[mobile]]" /></td>
    </tr>
    <tr>
      <td height="57"><strong>Email Id </strong></td>
      <td><input name="email_id" maxlength="30" type="text" id="email_id"  class="validate[required,custom[email]"/></td>
    </tr>
    <tr>
      <td><strong>Experience</strong></td>
      <td><textarea name="experience" maxlength="10" id="experience" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="55"><strong>Bar Council Name </strong></td>
      <td><input name="bar_council_name" maxlength="10" type="text" id="bar_council_name" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="54"><strong>Advocate Type </strong></td>
      <td><input name="advocate_type" maxlength="20" type="text" id="advocate_type" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="71">        <div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="save" />      
      </div></td>
      <td><div align="center">
	  <a href="advocatesdetails.php"  class="btn btn-danger" >Reset</a>
       <!-- <input name="Reset" type="reset" class="btn btn-danger" id="Reset" value="reset" /> -->
      </div></td>
    </tr>
  </table>
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