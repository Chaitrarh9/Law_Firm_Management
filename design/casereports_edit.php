
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
                                	Case Report <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Report Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$case_report_id=$_REQUEST['case_report_id'];
 
 $sql="select * from case_reports where case_report_id='$case_report_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="casereports_update.php">
<input type="hidden" value="<?php echo $row['case_report_id']?>" name="case_report_id" />
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="310" height="292" border="1" align="center">
    <tr>
      <td height="50" colspan="2" class="style1"><div align="center">Case Reports</div></td>
    </tr>
    <tr>
      <td width="144" height="60">Report Name </td>
      <td width="184"><input name="report_name" type="text" id="report_name" value="<?php echo $row['report_name']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="48">Report</td>
      <td><textarea name="report" id="report"><?php echo $row['report']?></textarea></td>
    </tr>
    <tr>
      <td height="23">Upload Date</td>
      <td><input name="upload_date" type="date" id="upload_date" value="<?php echo $row['upload_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="23">Client Case Id </td>
      <td><select name="client_case_id" id="client_case_id" class="validate[required]">
        <option value="">select</option>
		<?php
        
 include('dbconnect.php');

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
      <td height="23"><input type="submit" name="Submit16" value="update" /></td>
      <td><input name="Submit" type="reset" id="Submit" value="reset" /></td>
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