
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
                                	Case Schedule <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Schedule Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php include('../dbconnect.php');

$case_detail_id=$_REQUEST['case_detail_id'];
 
 $sql="select * from case_schedules where case_detail_id='$case_detail_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="formID" name="form1" method="post" action="caseschedules_update.php">
<input type="hidden" value="<?php echo $row['case_detail_id']?>" name="case_detail_id" />
<table width="337" height="322" border="0" align="center">
    <tr>
      <td width="145"><strong>Case Schedule Id </strong></td>
      <td width="170"><input name="case_schedule_id" maxlength="10" type="text" id="case_schedule_id" value="<?php echo $row['case_schedule_id']?>" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td><strong>Case Date </strong></td>
      <td><input name="case_date" type="date" id="case_date" value="<?php echo $row['case_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><strong>Case Time </strong></td>
      <td><input name="case_time" type="time" id="case_time" value="<?php echo $row['case_time']?>" class="validate[required]"/></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="status" maxlength="15" type="text" id="status" value="<?php echo $row['status']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="68"><div align="center">
        <input type="submit" name="Submit6" class="btn btn-primary"value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit7" class="btn btn-danger"value="cancel" />
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
