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
                                	Client  Documents <span>Law_Firm</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                 <a href="clientdocuments.php" class="btn btn-inverse">Add New Client  Documents</a> <p>&nbsp;</p>
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Advocate View</span>
                                        </div>
                                        <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead
  <tr>
    <td width="50"><strong>Sl No </strong></td>
    <td width="136"><strong>Client Name </strong></td>
    <td width="142"><strong>Document Name</strong></td>
    <td width="90"><strong>Upload Date</strong></td>
    <td width="48"><strong>Edit</strong></td>
    <td width="53"><strong>Delete</strong></td>
  </tr>
  </thead>
  <tbody>
<?php
include('dbconnect.php');
 
$sn=1;
$sql="select * from client_document cd,client_details c where cd.client_id=c.client_id";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['doc_name']?></td>
    <td>&nbsp;<?php echo $row['upload_date']?></td>
    <td>&nbsp;<a href="clientdocuments_edit.php?clientdoc_id=<?php echo $row['clientdoc_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="clientdocuments_delete.php?clientdoc_id=<?php echo $row['clientdoc_id'] ?>">Delete</a></td>
  </tr>
<?php
}
?>
</tbody>
</table>

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

