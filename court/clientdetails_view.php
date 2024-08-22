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
                                	Client  Details <span>Law Dictionary</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                 <a href="clientdetails.php" class="btn btn-inverse">Add New Client  Details</a> <p>&nbsp;</p>
                            
                            
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
    <td width="54">Sl No </td>
    <td width="188">client name</td>
    <td width="105">Client Address </td>
    <td width="98">City</td>
    <td width="88">Contact Number </td>
    <td width="82">Email Id </td>
    <td width="95">Register Date </td>
    <td width="50">Edit</td>
    <td width="54">Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
include('dbconnect.php');
 
$sn=1;
$sql="select * from client_details";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['client_address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<?php echo $row['email_id']?></td>
    <td>&nbsp;<?php echo $row['reg_date']?></td>
    <td>&nbsp;<a href="clientdetails_edit.php?client_id=<?php echo $row['client_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="clientdetails_delete.php?client_id=<?php echo $row['client_id'] ?>">Delete</a></td>
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

