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
										<?php include('cal.php');?>
<form id="formID" name="form1" method="post" action="clientcasedetailsinsert.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="399" height="489" border="0" align="center">
    <tr>
      <td width="174" height="65"><strong>Client Name </strong></td>
      <td width="215"><select name="client_id"maxlength="10" id="client_id" class="validate[required]">
          <option value="">Select Cilent</option>
		   <?php
include('../dbconnect.php');
 
 
$sn=1;
$uname=$_SESSION['uname'];
$sql="select * from  client_details c,advocates_details a where c.advocate_id=a.advocate_id	and a.email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 
?>
<option value="<?php echo $row['client_id']; ?>"><?php echo $row['client_name']; ?></option>
<?php
}
?>

        </select>
        </td>
    </tr>
	<?php
	$sql2="select * from advocates_details where email_id='$uname'";
$res2=mysqli_query($conn,$sql2); 
$row2=mysqli_fetch_array($res2);

$advocate_id=$row2['advocate_id'];
	?>
    
   <input name="advocate_id"maxlength="10" type="hidden" id="advocate_id" value="<?php echo $advocate_id; ?>" />
    <tr>
      <td height="60"><strong>Case Name </strong></td>
      <td><input name="case_name" maxlength="30"type="text" id="case_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Case Description </strong></td>
      <td><textarea name="case_description" maxlength="100"id="case_description" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="40"><strong>Court Name </strong></td>
      <td><select name="court_id"maxlength="10" id="court_id">
          <option>Select Court</option>
          <?php
include('../dbconnect.php');
 
 
$sn=1;
$sql="select * from  court_details";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 
?>
          <option value="<?php echo $row['court_id']; ?>"><?php echo $row['court_name']; ?></option>
          <?php
}
?>
        </select></td>
    </tr>
    <tr>
      <td><strong>First Client Party </strong></td>
      <td><input name="first_client_party"maxlength="30" type="text" id="first_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Second Client Party </strong></td>
      <td><input name="second_client_party"maxlength="30" type="text" id="second_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Date</strong></td>
      <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date", true, false);
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
      <td height="71"><div align="center">
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
