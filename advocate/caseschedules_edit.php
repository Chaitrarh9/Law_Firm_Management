
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
                                	Case Schedule <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Case Schedule Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('../dbconnect.php');

$case_detail_id=$_REQUEST['case_detail_id'];
 
 $sql="select * from case_schedules where case_detail_id='$case_detail_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="formID" name="form1" method="post" action="caseschedules_update.php">
<input type="hidden" value="<?php echo $row['case_detail_id']?>" name="case_detail_id" />
<table width="337" height="303" border="0" align="center">
   <td height="80"><strong>Case Name </strong></td>
      <td><select name="client_case_id"maxlength="10" id="client_case_id" class="validate[required]">
        <option value="">select</option>
		<?php
        
 include('../dbconnect.php');
$uname=$_SESSION['uname'];
 $sql2="select * from client_case_details c,advocates_details a where c.advocate_id=a.advocate_id and a.email_id='$uname'";
$res2=mysqli_query($conn,$sql2); 
while($row2=mysqli_fetch_array($res2))
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
      <td><strong>Case Date </strong></td>
      <td><input name="case_date" type="date" id="case_date" value="<?php echo $row['case_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><strong>Case Time </strong></td>
      <td><input name="case_time" type="time" id="case_time"class="validate[required]" value="<?php echo $row['case_time']?>" /></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="c_status" maxlength="30"type="text" id="c_status" value="<?php echo $row['c_status']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit6"class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit7"class="btn btn-danger" value="cancel" />
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
