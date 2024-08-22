
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
                                	Case Schedule <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Schedule Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$case_detail_id=$_REQUEST['case_detail_id'];
 
 $sql="select * from case_schedules where case_detail_id='$case_detail_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

?>

<form id="formID" name="form1" method="post" action="caseschedules_update.php">
<input type="hidden" value="<?php echo $row['case_detail_id']?>" name="case_detail_id" />
<table width="353" height="342" border="0" align="center">
    <tr>
      <td width="161">Case Schedule Id </td>
      <td width="182"><input name="case_schedule_id" type="text" id="case_schedule_id" value="<?php echo $row['case_schedule_id']?>" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td>Case Date </td>
      <td><input name="case_date" type="date" id="case_date" value="<?php echo $row['case_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td>Case Time </td>
      <td><input name="case_time" type="time" id="case_time" value="<?php echo $row['case_time']?>" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="55">Status</td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['status']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="82">
        <div align="center">
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
