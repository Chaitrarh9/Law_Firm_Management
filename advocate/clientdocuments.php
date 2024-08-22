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
                                My Documents
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">My New Document</span>
										</div>
<?php
	$uname=$_SESSION['uname'];
?>   
	
 <?php include('cal.php');?>
<form action="clientdocumentsinsert.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
  <p>&nbsp;</p>
  <table width="471" height="332" border="0" align="center">
    <tr>
      <td width="157"><strong>Client Name </strong></td>
  
	  <td width="304"><select name="client_id" class="validate[required]" id="client_id" >
        <option value="">select</option>
        <?php
		include('../dbconnect.php');
		
		$sn=1;
		
	    $sql="select * from client_details c,advocates_details a where c.advocate_id=a.advocate_id and a.email_id='$uname'";
		$res=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($res))
		{
		?>
		 <option value="<?php echo $row['client_id']; ?>"><?php echo $row['client_name']; ?></option>
        <?php
          }
        ?>
                  
				  </select></td>
    </tr>
    <tr>
      <td><strong>Document Name </strong></td>
      <td><select name="doc_name" class="validate[required]"  id="doc_name" >
        <option value="">Select Document Name</option>
        <option>Aadhar Card</option>
        <option>Pan Card</option>
        <option>Voter ID</option>
        <option>Driving Licence</option>
        <option>Land Utar</option>
        <option>Other Document</option>
      </select>
      </td>
    </tr>
    <tr>
      <td><strong>Document Files </strong></td>
      <td><input name="upload_doc" type="file" id="upload_doc" class="validate[required]" /></td>
    </tr>
    <tr>
      <td><strong>Upload Date </strong></td>
        <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("upload_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit8" class="btn btn-primary"value="Save" />
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

