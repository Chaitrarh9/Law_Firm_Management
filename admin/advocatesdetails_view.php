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
                                	Advocates  Details <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                                 <p><a href="advocatesdetails.php" class="btn btn-inverse">Add New Advocates Details</a>
</p>
                                 <p>&nbsp;                                 </p>
                                 <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <p><span class="title "><strong>Advocate View</strong></span></p>
                                        </div>
                                        <div class="widget-content table-container">
										
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="49" height="52"><strong>Sl No </strong></td>
    <td width="111"><strong>Advocate Name </strong></td>
    <td width="46"><strong>Dob</strong></td>
    <td width="151"><strong>Qualification</strong></td>
    <td width="89"><strong>Address</strong></td>
    <td width="49"><strong>City</strong></td>
    <td width="97"><strong>Contact Number</strong></td>
    <td width="75"><strong>Email Id </strong></td>
    <td width="126"><strong>Experience</strong></td>
    <td width="97"><strong>Bar Council Name</strong></td>
    <td width="170"><strong>Advocate Type</strong></td>
    <td width="70"><strong>Edit</strong></td>
    <td width="82"><strong>Delete</strong></td>
   
  </tr>
   </thead>
  <tbody>
  <?php include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from advocates_details";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['advocate_name']?></td>
    <td>&nbsp;<?php echo $row['date_of_birth']?></td>
    <td>&nbsp;<?php echo $row['qualification']?></td>
    <td>&nbsp;<?php echo $row['address']?></td>
    <td>&nbsp;<?php echo $row['city']?></td>
    <td>+91&nbsp;<?php echo $row['contact_no']?></td>
    <td>&nbsp;<?php echo $row['email_id']?></td>
    <td>&nbsp;<?php echo $row['experience']?></td>
    <td>&nbsp;<?php echo $row['bar_council_name']?></td>
    <td>&nbsp;<?php echo $row['advocate_type']?></td>
    <td><a href="advocatesdetails_edit.php?advocate_id=<?php echo $row['advocate_id'] ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="advocatesdetails_delete.php?advocate_id=<?php echo $row['advocate_id'] ?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>
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

	
   
 






