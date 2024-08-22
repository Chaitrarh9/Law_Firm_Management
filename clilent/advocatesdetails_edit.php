
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
<?php
 include('../dbconnect.php');

$advocate_id=$_REQUEST['advocate_id'];
 
 $sql="select * from advocates_details where advocate_id='$advocate_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

  ?>
 
<form id="formID" name="form1" method="post" action="advocatesdetails_update.php">
<input type="hidden" value="<?php echo $row['advocate_id']?>" name="advocate_id" />
<table width="461" border="0" align="center">
    <tr>
      <td width="210" height="51">Advocate Name </td>
      <td width="241"><input name="advocate_name" type="text" id="advocate_name" value="<?php echo $row['advocate_name']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="63">Dob</td>
      <td><input name="date_of_birth" type="date" id="date_of_birth" value="<?php echo $row['date_of_birth']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="67">Qualification</td>
      <td><input name="qualification" type="text" id="qualification" value="<?php echo $row['qualification']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" value="<?php echo $row['address']?>" class="validate[required]"><?php echo $row['address']?></textarea></td>
    </tr>
    <tr>
      <td height="49">City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $row['city']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="53">Contact Number </td>
      <td>+91
        <input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']?>"  class="validate[required,custom[mobile]]"/></td>
    </tr>
    <tr>
      <td height="54">Email Id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']?>" class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td height="49">Experience</td>
      <td><input name="experience" type="text" id="experience" value="<?php echo $row['experience']?>" class="validate[required]" />
        </textarea></td>
    </tr>
    <tr>
      <td height="48">Bar Council Name </td>
      <td><input name="bar_council_name" type="text" id="bar_council_name" value="<?php echo $row['bar_council_name']?>" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="56">Advocate Type </td>
      <td><input name="advocate_type" type="text" id="advocate_type" value="<?php echo $row['advocate_type']?>" cla"validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="102"><label>
          <div align="center">
            <input type="submit" name="Submit"class="btn btn-primary" value="update" />
          </div>
        </label></td>
      <td><label>
            <div align="center">
              <input type="reset" name="Reset"class="btn btn-danger" value="reset" />
            </div>
            </label></td>
    </tr>
  </table>
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