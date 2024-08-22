
<?php include('metatags.php');?>
	
<?php include('header.php');?>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
 <?php include('sidebar.php');?>

      <?php
	$uname=$_SESSION['uname'];
	?>                     
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	
                                
                                <h1 id="main-heading">
                                	My Profile
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">My Profile : <?php echo $uname;?></span>
										</div>
										
										<div class="widget-content form-container">
									</div>
	
	<?php
include('../dbconnect.php');
 

$sql="select * from advocates_details where email_id='$uname'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);

$advocate_id=$row['advocate_id'];
?>

 
<form id="formID" name="form1" method="post" action="advocatesdetails_update.php">
<input type="hidden" value="<?php echo $row['advocate_id']?>" name="advocate_id" />
<table width="446" height="701" border="0" align="center">
    <tr>
      <td width="80" height="77">Advocate Name </td>
      <td width="104"><input name="advocate_name"maxlength="30" type="text" id="advocate_name" value="<?php echo $row['advocate_name']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="51">Dob</td>
      <td><input name="date_of_birth" type="date" id="date_of_birth" value="<?php echo $row['date_of_birth']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td height="53">Qualification</td>
      <td><input name="qualification"maxlength="20" type="text" id="qualification" value="<?php echo $row['qualification']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td height="111">Address</td>
      <td><textarea name="address" maxlength="100"id="address" value="<?php echo $row['address']?>" class="validate[required]"><?php echo $row['address']?></textarea></td>
    </tr>
    <tr>
      <td height="44">City</td>
      <td><input name="city"maxlength="20" type="text" id="city" value="<?php echo $row['city']?>" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="51">Contact Number </td>
      <td>+91
        <input name="contact_no"maxlength="10" type="text" id="contact_no" value="<?php echo $row['contact_no']?>"  class="validate[required,custom[mobile]]"/></td>
    </tr>
    <tr>
      <td height="53">User Name </td>
      <td><input name="email_id"maxlength="30" type="text" id="email_id" readonly="readonly" value="<?php echo $row['email_id']?>" class="validate[required,custom[email]]"/></td>
    </tr>
    <tr>
      <td height="52">Experience</td>
      <td><input name="experience" type="text" id="experience" value="<?php echo $row['experience']?>" class="validate[required]" />
        </textarea></td>
    </tr>
    <tr>
      <td height="50">Bar Council Name </td>
      <td><input name="bar_council_name"maxlength="20" type="text" id="bar_council_name" value="<?php echo $row['bar_council_name']?>" class="validate[required]"/></td>
    </tr>
    <tr>
      <td height="48">Advocate Type </td>
      <td><input name="advocate_type"maxlength="30" type="text" id="advocate_type" value="<?php echo $row['advocate_type']?>" cla"validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td colspan="2"><label>
          <div align="center">
            <input type="submit" name="Submit" class="btn btn-primary"value="update" />
          </div>
        </label>        <label>
          <div align="right"></div>          </label></td>
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