
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
                                	Client Documents <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Documents Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('../dbconnect.php');

$clientdoc_id=$_REQUEST['clientdoc_id'];
 
 $sql="select * from client_document where clientdoc_id='$clientdoc_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

?>

<form id="formID" name="form1" method="post" action="clientdocuments_update.php">
<input type="hidden" value="<?php echo $row['clientdoc_id']?>" name="clientdoc_id" />
<table width="358" height="333" border="0" align="center">
    <tr>
      <td width="160"><strong>Client Id </strong></td>
      <td width="163"><select name="client_id" id="client_id">
        <option value="">select</option>
        <?php
 include('../dbconnect.php');

 $sql2="select * from client_details";
$res2=mysqli_query($conn,$sql2); 
while($row2=mysqli_fetch_array($res2))
{
?>
        <option value="<?php echo $row2['client_id']?>" <?php if($row2['client_id']==$row['client_id']) {?> selected <?php } ?>><?php echo $row2['client_name']?></option>
        <?php
}
 
?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Document Name </strong></td>
      <td><input name="doc_name" type="text" id="doc_name" value="<?php echo $row['doc_name']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><strong>Upload Date </strong></td>
      <td><input name="upload_date" type="date" id="upload_date" value="<?php echo $row['upload_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit8" class="btn btn-primary"value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit9" class="btn btn-danger"value="cancel" />
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
