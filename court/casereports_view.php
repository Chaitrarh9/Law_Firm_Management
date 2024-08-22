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
                                	Case Reports View <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                                 <a href="casereports.php" class="btn btn-inverse">Add New  Case Report Details </a> 
                                 <p>&nbsp;</p>
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Case Reports  View</span>
                                        </div>
                                        <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
 <tr>
    <td width="45">Sl No </td>
    <td width="96"><strong>Case Name </strong></td>
    <td width="62"><strong>Report</strong></td>
    <td width="137"><strong>Upload Date</strong></td>
    <td width="47"><strong>Client Case Id </strong></td>
    <td width="47"><strong>Edit</strong></td>
    <td width="49"><strong>Delete</strong></td>
  </tr>
  </thead>
  <tbody>
   <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from case_reports cr,client_case_details cc where cr.client_case_id=cc.client_case_id";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['case_name']?></td>
    <td>&nbsp;<?php echo $row['report']?></td>
    <td>&nbsp;<?php echo $row['upload_date']?></td>
    <td>&nbsp;<?php echo $row['client_case_id']?></td>
    <td><a href="casereports_edit.php?case_report_id=<?php echo $row['case_report_id'] ?>">Edit</a></td>
    <td><a href="casereports_delete.php?case_report_id=<?php echo $row['case_report_id'] ?>">Delete</a></td>
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
