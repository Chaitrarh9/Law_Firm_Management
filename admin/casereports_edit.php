
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
                                	Case Report <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Report Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php include('../dbconnect.php');

$case_report_id=$_REQUEST['case_report_id'];
 
 $sql="select * from case_reports where case_report_id='$case_report_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="casereports_update.php">
<input type="hidden" value="<?php echo $row['case_report_id']?>" name="case_report_id" />
<table width="410" height="329" border="0" align="center">
    <tr>
      <td width="185" height="60"><strong>Report Name </strong></td>
      <td width="209"><input name="report_name" maxlength="20" type="text" id="report_name" value="<?php echo $row['report_name']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="48"><strong>Report</strong></td>
      <td><textarea name="report" maxlength="10" id="report"><?php echo $row['report']?></textarea></td>
    </tr>
    <tr>
      <td height="50"><strong>Upload Date</strong></td>
      <td><input name="upload_date" type="date" id="upload_date" value="<?php echo $row['upload_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="23"><strong>Client Case Id </strong></td>
      <td><select name="client_case_id" maxlength="10" id="client_case_id" class="validate[required]">
        <option value="">select</option>
		<?php include('../dbconnect.php');

 $sql2="select * from client_case_details";
$res2=mysql_query($sql2); 
while($row2=mysql_fetch_array($res2))
{
?>
        <option value="<?php echo $row2['client_case_id']?>" <?php if($row2['client_case_id']==$row['client_case_id']) {?> selected <?php } ?>><?php echo $row2['case_name']?></option>
        <?php
}
 
?>
      </select>
      </td>
    </tr>
    <tr>
      <td height="55"><div align="center">
        <input type="submit" name="Submit16"  class="btn btn-primary"value="update" />
      </div></td>
      <td><div align="center">
        <input name="Submit" type="reset" class="btn btn-danger" id="Submit" value="reset" />
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