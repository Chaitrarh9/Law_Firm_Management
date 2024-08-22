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
                                	Case Report <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Report Insertion</span>
										</div>
										<?php include('cal.php');?>
<form id="formID" name="form1" method="post" action="casereportsinsert.php">
  <p>&nbsp;</p>
  <table width="364" height="356" border="0" align="center">
    <tr>
      <td width="147" height="42"><strong>Report name </strong></td>
      <td width="207"><input name="report_name"maxlength="30" type="text" id="report_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="39"><strong>Report</strong></td>
      <td><textarea name="report"maxlength="20" id="report" class="validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td height="23"><strong>Upload Date</strong></td>
      <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("upload_date", true, false);
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
       <td width="145"><strong>Client Case Id </strong></td>
       <td width="170"><select name="client_case_id" id="client_case_id" class="validate[required]">
        <option value="">Case Name</option>
        <?php
	  include('../dbconnect.php');
	  $uname=$_SESSION['uname'];
	  $sql="select * from client_case_details cd, advocates_details ad where cd.advocate_id=ad.advocate_id and ad.email_id='$uname'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
        <option value="<?php echo $row['client_case_id'];?>"><?php echo $row['case_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
       <tr>
      <td height="50"><div align="center">
        <input type="submit" name="Submit16" class="btn btn-primary"value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit17" class="btn btn-danger"value="reset" />
      </div></td>
    </tr>
  </table>
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
