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
                                Client Documents <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Documents Insertion</span>
										</div>
<form id="formID" name="form1" method="post" action="clientdocumentsinsert.php">
  <p>&nbsp;</p>
  <table width="370" height="332" border="0" align="center">
    <tr>
      <td width="160"><strong>Client Id </strong></td>
      <td width="163"><select name="client_id" id="client_id" class="validate[required]">
        <option value="">select</option>
		<?php include('../dbconnect.php');

 $sql="select * from client_details";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{
?>

<option value="<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
<?php
}
 
?>
      </select>      </td>
    </tr>
    <tr>
      <td><strong>Document Name </strong></td>
      <td><input name="doc_name" type="text" id="doc_name" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td><strong>Upload Date </strong></td>
      <td><input name="upload_date" type="date" id="upload_date" class="validate[required,custom[date]]" /></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit8" class="btn btn-primary"value="Save" />
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

