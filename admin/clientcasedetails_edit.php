
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
                                Client Case Details <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Case Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php include('../dbconnect.php');

$client_case_id=$_REQUEST['client_case_id'];
 
 $sql="select * from client_case_details where client_case_id='$client_case_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="form1" name="form1" method="post" action="clientcasedetails_update.php">
  <p>&nbsp;</p>
  <table width="423" height="551" border="0" align="center">
    <tr>
      <td width="206" height="47"><strong>Client Id </strong></td>
      <td width="207"><input name="client_id" type="text" id="client_id" value="<?php echo $row['client_id']?>" /></td>
    </tr>
    <tr>
      <td height="42"><strong>Advocate Id </strong></td>
      <td><input name="advocate_id" type="text" id="advocate_id" value="<?php echo $row['advocate_id']?>" /></td>
    </tr>
    <tr>
      <td><strong>Case Name </strong></td>
      <td><input name="case_name" type="text" id="case_name" value="<?php echo $row['case_name']?>" /></td>
    </tr>
    <tr>
      <td><strong>Case Description </strong></td>
      <td><textarea name="case_description" id="case_description"><?php echo $row['case_description']?></textarea></td>
    </tr>
    <tr>
      <td height="48"><strong>Court Id </strong></td>
      <td><input name="court_id" type="text" id="court_id" value="<?php echo $row['court_id']?>" /></td>
    </tr>
    <tr>
      <td><strong>First Client Party </strong></td>
      <td><input name="first_client_party" type="text" id="first_client_party" value="<?php echo $row['first_client_party']?>" /></td>
    </tr>
    <tr>
      <td height="67"><strong>Second Client Party </strong></td>
      <td><input name="second_client_party" type="text" id="second_client_party" value="<?php echo $row['second_client_party']?>" /></td>
    </tr>
    <tr>
      <td height="42"><strong>Date</strong></td>
      <td><input name="date" type="date" id="date" value="<?php echo $row['date']?>" /></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['status']?>" /></td>
    </tr>
    <tr>
      <td height="103"><div align="center">
        <input type="submit" name="Submit14"class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Reset" class="btn btn-danger"value="clear" />
      </div></td>
    </tr>
  </table>
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