
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
                                	Court Details<span> Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Court Details Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$court_id=$_REQUEST['court_id'];
 
 $sql="select * from court_details where court_id='$court_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="courtdetails_update.php">
<input type="hidden" value="<?php echo $row['court_id']?>" name="court_id" />
<table width="424" height="332" border="0" align="center">
    <tr>
      <td width="163" height="66">Court Name</td>
      <td width="251"><input name="court_name" type="text" id="court_name" value="<?php echo $row['court_name']?>" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"><?php echo $row['address']?></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $row['city']?>" /></td>
    </tr>
    <tr>
      <td height="77">Contact Number </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']?>" /></td>
    </tr>
    <tr>
      <td height="62"><div align="center">
          <input type="submit" name="Submit2" class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
          <input type="reset" name="Submit3"class="btn btn-danger"  value="reset" />
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