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
											<span class="title">Case Schedules Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="caseschedulesinsert.php">
  <p>&nbsp;</p>
  <table width="392" height="337" border="0" align="center">
    <tr>
      <td width="145"><strong>Case Name</strong></td>
      <td width="170"><select name="client_case_id" id="client_case_id" class="validate[required]">
        <option value="">Case Name</option>
        <?php
	  include('../dbconnect.php');
	  $uname=$_SESSION['uname'];
	  $sql="select * from client_case_details cd, advocates_details ad where cd.advocate_id=ad.advocate_id and ad.email_id='$uname'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
        <option value="<?php echo $row['client_case_id'];?>"><?php echo $row['case_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>    <tr>
      <td><strong>Case Date </strong></td>
      <td><input name="case_date" type="date" id="case_date" class="validate[required,custom[date]]" /></td>
    </tr>
    <tr>
      <td><strong>Case Time </strong></td>
      <td><input name="case_time" type="time" id="case_time" class="validate[required]"/></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="c_status" maxlength="30"type="text" id="c_status" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit6"class="btn btn-primary" value="Save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit7"class="btn btn-danger" value="reset" />
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
