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
                                	Case Schedules <span>Law_Firm</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                
                            
                         <a href="caseschedules.php" class="btn btn-inverse">Add new Case Schedule Details </a>
                         <p>&nbsp;</p>   
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
    <td width="104" height="38">Sl No </td>
	<td width="104" height="38">Advocate Name </td>
	<td width="104" height="38">Client Name </td>
    <td width="130">Case Name</td>
    <td width="103">Case Date </td>
    <td width="95">Case Time</td>
    <td width="59">Status</td>
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
 
$uname=$_SESSION['uname'];
 $sn=1;
 $sql="SELECT * FROM case_schedules cs JOIN client_case_details cd ON cs.client_case_id = cd.client_case_id JOIN client_details c ON cd.client_id = c.client_id JOIN advocates_details ad ON cd.advocate_id = ad.advocate_id WHERE ad.email_id = '$uname'";
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
	<td>&nbsp;<a href="caseschedules_edit.php?case_detail_id=<?php echo $row['case_detail_id']; ?>" class="btn btn-primary">Edit</a></td>
     <td>&nbsp;<a href="caseschedules_delete.php?case_detail_id=<?php echo $row['case_detail_id']; ?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>   
  </tr>

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
