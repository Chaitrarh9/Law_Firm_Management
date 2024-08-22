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
                                	Case Reports <span>Law_Firm</span></h1>
                                <p><a href="casereports.php" class="btn btn-inverse">Add New Case Reports Details</a> </p>
                        	</div>
							
							<div id="main-content">
                              
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                          <p class="title">&nbsp;</p>
                                            <p class="title">Case Report View
                                            </p>
                                            <p class="title">&nbsp;                                            </p>
                                        </div>
                                      <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
 <tr>
    <td width="45"><strong>Sl No </strong></td>
    <td width="96"><strong>case name </strong></td>
    <td width="62"><strong>Report</strong></td>
    <td width="137"><strong>Upload Date</strong></td>
    <td width="47"><strong>client case id </strong></td>
	<td width="50"><strong>Edit</strong></td>
    <td width="54"><strong>Delete</strong></td>
    
  </tr>
  </thead>
  <tbody>
  <?php
	$email=$_SESSION['uname'];
	?>  
   <?php
 include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from case_reports cr,client_case_details cc,advocates_details ad where cr.client_case_id=cc.client_case_id and cc.advocate_id=ad.advocate_id and ad.email_id='$email'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['case_name']?></td>
    <td>&nbsp;<?php echo $row['report']?></td>
    <td>&nbsp;<?php echo $row['upload_date']?></td>
    <td>&nbsp;<?php echo $row['client_case_id']?></td>
	<td>&nbsp;<a href="casereports_edit.php?case_report_id=<?php echo $row['case_report_id']; ?>" class="btn btn-primary">Edit</a></td>
     <td>&nbsp;<a href="casereports_delete.php?case_report_id=<?php echo $row['case_report_id']; ?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>   
  </tr>
<?php
}
?>
</tbody>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
