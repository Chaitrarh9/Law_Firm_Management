
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
                                	Client Details <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Details Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$client_id=$_REQUEST['client_id'];
 
 $sql="select * from client_details where client_id='$client_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="clientdetails_update.php">
<input type="hidden" value="<?php echo $row['client_id']?>" name="client_id" />
<table width="358" height="399" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Details </div></td>
    </tr>
    <tr>
      <td width="94">Client Name </td>
      <td width="205"><input name="client_name" type="text" id="client_name" value="<?php echo $row['client_name']?>" /></td>
    </tr>
    <tr>
      <td>Client Address </td>
      <td><textarea name="client_address" id="client_address"><?php echo $row['client_address']?></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $row['city']?>" /></td>
    </tr>
    <tr>
      <td>Contact Number </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']?>" /></td>
    </tr>
    <tr>
      <td height="28">Email-Id</td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']?>" /></td>
    </tr>
    <tr>
      <td height="28">Register Date </td>
      <td><input name="reg_date" type="date" id="reg_date" value="<?php echo $row['reg_date']?>" /></td>
    </tr>
    <tr>
      <td height="28"><input type="submit" name="Submit4" value="update" /></td>
      <td><input type="submit" name="Submit5" value="cancel" /></td>
    </tr>
  </table>
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