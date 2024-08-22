
<?php include('metatags.php');?>
	
<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {
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
	<?php include('../dbconnect.php');
$advocate_id=$_REQUEST['advocate_id'];
$sql="select * from advocates_details where advocate_id='$advocate_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
?>									
										
<form id="formID" name="form1" method="post" action="advocatesdetails_update.php">
<input type="hidden" value="<?php echo $row['advocate_id']?>" name="advocate_id" />
<table width="446" border="0" align="center">
    <tr>
      <td width="229" height="47"><strong>Advocate Name </strong></td>
      <td width="207"><input name="advocate_name"maxlength="20" type="text" id="advocate_name" value="<?php echo $row['advocate_name']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="45"><strong>Dob</strong></td>
      <td><input name="date_of_birth" type="date" id="date_of_birth" value="<?php echo $row['date_of_birth']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="43"><strong>Qualification</strong></td>
      <td><input name="qualification"maxlength="10" type="text" id="qualification" value="<?php echo $row['qualification']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="99"><strong>Address</strong></td>
      <td><textarea name="address"maxlength="30" id="address" value="<?php echo $row['address']?>" class="validate[required]"><?php echo $row['address']?></textarea></td>
    </tr>
    <tr>
      <td height="39"><strong>City</strong></td>
      <td><input name="city" maxlength="10" type="text" id="city" value="<?php echo $row['city']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Contact Number </strong></td>
      <td>+91
        <input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']?>"  class="validate[required,custom[mobile]]"/></td>
    </tr>
    <tr>
      <td height="40"><strong>Email Id </strong></td>
      <td><input name="email_id" maxlength="10" type="text" id="email_id" readonly="readonly" value="<?php echo $row['email_id']?>" class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td height="46"><strong>Experience</strong></td>
      <td><input name="experience" maxlength="10" type="text" id="experience" value="<?php echo $row['experience']?>" class="validate[required]" />
        </textarea></td>
    </tr>
    <tr>
      <td height="43"><strong>Bar Council Name </strong></td>
      <td><input name="bar_council_name" maxlength="20" type="text" id="bar_council_name" value="<?php echo $row['bar_council_name']?>" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="45"><strong>Advocate Type </strong></td>
      <td><input name="advocate_type" maxlength="10" type="text" id="advocate_type" value="<?php echo $row['advocate_type']?>" cla"validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="81"><label>
          <div align="center">
            <input type="submit" name="Submit" class="btn btn-primary" value="update" />
          </div>
        </label></td>
      <td><label>
            <div align="center">
              <input type="reset" name="Reset" class="btn btn-danger"value="reset" />        
                  </div>
            </label></td>
    </tr>
  </table>
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