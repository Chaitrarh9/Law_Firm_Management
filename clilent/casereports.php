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
										
<form id="formID" name="form1" method="post" action="casereportsinsert.php">
  <p>&nbsp;</p>
  <table width="409" height="372" border="0" align="center">
    <tr>
      <td width="154" height="66"><strong>Report name </strong></td>
      <td width="245"><input name="report_name" type="text" id="report_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="95"><strong>Report</strong></td>
      <td><textarea name="report" id="report" class="validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td height="52"><strong>Upload Date</strong></td>
      <td><input name="upload_date" type="date" id="upload_date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="51"><strong>Client Case Id </strong></td>
      <td><select name="client_case_id" id="client_case_id" class="validate[required]">
        <option value="">Select</option>
		<?php
 include('../dbconnect.php');

 $sql="select * from client_case_details";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
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
      <td height="69"><div align="center">
	  <input type="submit" name="Submit16"class="btn btn-primary" value="save" />
	  </div></td>
      <td><div align="center">
	  <input type="reset" name="Submit17"class="btn btn-danger" value="reset" />
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
