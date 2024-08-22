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
										
<form id="formID" name="form1" method="post" action="casereportsinsert.php">
  <p>&nbsp;</p>
  <table width="364" height="305" border="0" align="center">
    <tr>
      <td height="51" colspan="2" class="style1"><div align="center">Case Reports</div></td>
    </tr>
    <tr>
      <td width="116" height="42">Report name </td>
      <td width="240"><input name="report_name" type="text" id="report_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="39">Report</td>
      <td><textarea name="report" id="report" class="validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td height="23">Upload Date</td>
      <td><input name="upload_date" type="date" id="upload_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="23">Client Case Id </td>
      <td><select name="client_case_id" id="client_case_id" class="validate[required]">
        <option value="">Select</option>
		<?php
 include('dbconnect.php');

 $sql="select * from client_case_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{
?>

<option value="<?php echo $row['client_case_id']?>"><?php echo $row['case_name']?></option>
<?php
}
 
?>
      </select>
      </td>
    </tr>
    <tr>
      <td height="23"><input type="submit" name="Submit16" value="save" /></td>
      <td><input type="submit" name="Submit17" value="reset" /></td>
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
