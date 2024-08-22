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
	
 
<form action="clientdocumentsinsert.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
  <p>&nbsp;</p>
  <table width="436" height="351" border="0" align="center">
    <tr>
      <td width="165"><strong>Client Name </strong></td>
   
	  <td width="261"><select name="client_id" id="client_id">
        <option>select</option>
        <?php
		include('../dbconnect.php');
		$sql="select * from client_details where c_email_id='$uname'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($res);
		$cid=$row['client_name'];
		?>
		 <option value="<?php echo $row['client_id']; ?>" selected><?php echo $cid;?></option>
        
                  </select></td>
    </tr>
    <tr>
      <td><strong>Document Name </strong></td>
      <td><select name="doc_name" id="doc_name">
        <option>Select Document Name</option>
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
      <td><input name="upload_doc" type="file" id="upload_doc" /></td>
    </tr>
    <tr>
      <td height="90"><strong>Upload Date </strong></td>
      <td><input name="upload_date" type="date" id="upload_date" class="validate[required,custom[date]]" /></td>
    </tr>
    <tr>
      <td><div align="center">
	  <input type="submit" name="Submit8"class="btn btn-primary" value="Save" />
	  </div></td>
      <td><div align="center">
	  <input type="reset" name="Reset" class="btn btn-danger"value="reset" />
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

