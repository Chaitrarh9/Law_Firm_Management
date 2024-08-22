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
                                	Case Schedules <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                                
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Advocate View</span>
                                        </div>
                                        <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="104" height="38"><strong>Sl No </strong></td>
    <td width="130"><strong>Advocate Name</strong></td>
	<td width="130"><strong>Client Name</strong></td>
	<td width="130"><strong>Case Name</strong></td>
    <td width="103"><strong>Case Date </strong></td>
    <td width="95"><strong>Case Time</strong></td>
    <td width="59"><strong>Status</strong></td>

  </tr>
  </thead>
  <tbody>
  <?php include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from  case_schedules cs,client_case_details cd,advocates_details ad,client_details c where cs.case_detail_id=cd.client_case_id and cd.advocate_id=ad.advocate_id and cd.client_id=c.client_id";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row['advocate_name']?></td>
	<td><?php echo $row['client_name']?></td>
	<td><?php echo $row['case_name']?></td>
    <td><?php echo $row['case_date']?></td>
    <td><?php echo $row['case_time']?></td>
    <td><?php echo $row['c_status']?></td>
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
