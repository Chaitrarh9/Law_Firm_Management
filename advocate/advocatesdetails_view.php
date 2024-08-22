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
    <td width="49" height="52"><strong>Sl No </strong></td>
    <td width="63"><strong>Advocate Name </strong></td>
    <td width="45"><strong>Dob</strong></td>
    <td width="75"><strong>Qualification</strong></td>
    <td width="67"><strong>Address</strong></td>
    <td width="48"><strong>City</strong></td>
    <td width="62"><strong>Contact Number</strong></td>
    <td width="38"><strong>Email Id </strong></td>
    <td width="67"><strong>Experience</strong></td>
    <td width="71"><strong>Bar Council Name</strong></td>
    <td width="69"><strong>Advocate Type</strong></td>
    
  </tr>
   </thead>
  <tbody>
  <?php
 include('../dbconnect.php');
 
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

	
   
 






