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
                                 <a href="caseschedules.php" class="btn btn-inverse">Add New Case Schedules</a> <p>&nbsp;</p>
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Case Schedule  View</span>
                                        </div>
                                        <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="104" height="38"><strong>Sl No </strong></td>
    <td width="130"><strong>Case Schedule Id</strong></td>
    <td width="103"><strong>Case Date </strong></td>
    <td width="95"><strong>Case Time</strong></td>
    <td width="59"><strong>Status</strong></td>
    <td width="49"><strong>Edit</strong></td>
    <td width="67"><strong>Delete</strong></td>
  </tr>
  </thead>
  <tbody>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from  case_schedules";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row['case_schedule_id']?></td>
    <td><?php echo $row['case_date']?></td>
    <td><?php echo $row['case_time']?></td>
    <td><?php echo $row['status']?></td>
    <td><a href="caseschedules_edit.php?case_detail_id=<?php echo $row['case_detail_id'] ?>" >Edit</a> </td>
    <td><a href="caseschedules_delete.php?case_detail_id=<?php echo $row['case_detail_id'] ?>">Delete</a></td>
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
