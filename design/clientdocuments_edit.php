
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
                                	Client Documents<span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Client Documents Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$clientdoc_id=$_REQUEST['clientdoc_id'];
 
 $sql="select * from client_document where clientdoc_id='$clientdoc_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

?>

<form id="formID" name="form1" method="post" action="clientdocuments_update.php">
<input type="hidden" value="<?php echo $row['clientdoc_id']?>" name="clientdoc_id" />
<table width="358" height="333" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Client Document </div></td>
    </tr>
    <tr>
      <td width="160">Client Id </td>
      <td width="163"><select name="client_id" id="client_id">
        <option value="">select</option>
        <?php
 include('dbconnect.php');

 $sql2="select * from client_details";
$res2=mysql_query($sql2); 
while($row2=mysql_fetch_array($res2))
{
?>
        <option value="<?php echo $row2['client_id']?>" <?php if($row2['client_id']==$row['client_id']) {?> selected <?php } ?>><?php echo $row2['client_name']?></option>
        <?php
}
 
?>
      </select></td>
    </tr>
    <tr>
      <td>Document Name </td>
      <td><input name="doc_name" type="text" id="doc_name" value="<?php echo $row['doc_name']?>" class="validate[required,custom[onlyLetter]]" /></td>
    </tr>
    <tr>
      <td>Upload Date </td>
      <td><input name="upload_date" type="date" id="upload_date" value="<?php echo $row['upload_date']?>" class="validate[required,custom[date]]"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit8" value="update" /></td>
      <td><input type="submit" name="Submit9" value="cancel" /></td>
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
