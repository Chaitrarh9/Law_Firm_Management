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
                                	Court  Details <span>Law Dictionary</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                 <a href="courtdetails.php" class="btn btn-inverse">Add New Court  Details</a> <p>&nbsp;</p>
                            
                            
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
    <td width="45">Sl No </td>
    <td width="60">Court Name </td>
    <td width="66">Address</td>
    <td width="52">City</td>
    <td width="68">Contact No </td>
    <td width="72">Edit</td>
    <td width="146">Delete</td>
  </tr>
   </thead>
  <tbody>
  <?php
 include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from  court_details";
$res=mysqli_query($sql); 
while($row=mysqli_fetch_array($res))
{ 
?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['court_name']?></td>
    <td>&nbsp;<?php echo $row['address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<a href="courtdetails_edit.php?court_id=<?php echo $row['court_id'] ?>">Edit</a></td>
    <td>&nbsp;<a href="courtdetails_delete.php?court_id=<?php echo $row['court_id'] ?>">Delete</a></td>
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

