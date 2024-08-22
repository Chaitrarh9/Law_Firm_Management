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
											<span class="title">Client Case Details Insertion</span>
										</div>
<?php
$uname=$_SESSION['uname'];
?>   
<?php
include('../dbconnect.php');
$sql="select * from  client_case_details ccd, client_details cd, advocates_details ad where ccd.client_id=cd.client_id and ccd.advocate_id=ad.advocate_id and cd.c_email_id='$uname'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
$adv_name=$row['advocate_name']; 
?>
 <?php
 include('../dbconnect.php');

 $sql1="select * from client_details where c_email_id='$uname'";
$res1=mysqli_query($conn,$sql1); 
while($row1=mysqli_fetch_array($res1))
$cid=$row['client_name'];
?>
<form id="formID" name="form1" method="post" action="clientcasedetailsinsert.php">
  <p>&nbsp;</p>
  <table width="398" height="600" border="0" align="center">
    <tr>
      <td width="181" height="53"><strong>My Name </strong></td>
      <td width="207"><select name="client_id" id="client_id">
	  <option value>Select</option>
	  <?php
include('../dbconnect.php');
$sql2="select * from  client_case_details ccd, client_details cd, advocates_details ad where ccd.client_id=cd.client_id and ccd.advocate_id=ad.advocate_id and cd.c_email_id='$uname'";
$res2=mysqli_query($conn,$sql2); 
while($row2=mysqli_fetch_array($res2))
{
?>
<option value="<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
<?php
}
 
?>
      </select>
      </td>
    </tr>
    <tr>
      <td height="69"><strong>Advocate Name </strong></td>
      <td><select name="advocate_id" id="advocate_id">
	  <option value>Select</option>
	  <?php
include('../dbconnect.php');
$sql="select * from  client_case_details ccd, client_details cd, advocates_details ad where ccd.client_id=cd.client_id and ccd.advocate_id=ad.advocate_id and cd.c_email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['advocate_id']?>"><?php echo $row['advocate_name']?></option>
<?php
}
 
?>
      </select>
      </td>
    </tr>
    <tr>
      <td height="50"><strong>Case Name </strong></td>
      <td><input name="case_name" type="text" id="case_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="98"><strong>Case Description </strong></td>
      <td><textarea name="case_description" id="case_description" class="validate[required]" /></textarea></td>
    </tr>
    <tr>
      <td height="57"><strong>Court Id </strong></td>
      <td><input name="court_id" type="text" id="court_id" class="validate[required,custom[onlyNumber]]"/></td>
    </tr>
    <tr>
      <td height="53"><strong>First Client Party </strong></td>
      <td><input name="first_client_party" type="text" id="first_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Second Client Party </strong></td>
      <td><input name="second_client_party" type="text" id="second_client_party" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="46"><strong>Date</strong></td>
      <td><input name="date" type="date" id="date" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td height="61"><div align="center">
	  <input type="submit" name="Submit14"class="btn btn-primary" value="save" />
	  </div></td>
      <td><div align="center">
	  <input type="reset" name="Reset"class="btn btn-danger" value="reset" />
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
