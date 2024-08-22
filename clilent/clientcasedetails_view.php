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
                                	My Case Details <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                            
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Case Details  View</span>
                                        </div>
                                        <div class="widget-content table-container">
										
  
  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="27"><strong>Sl No </strong></td>
    <td width="39"><strong>My Name</strong></td>
    <td width="63"><strong>Advocate Name </strong></td>
    <td width="53"><strong>Case Name </strong></td>
    <td width="81"><strong>Case Description </strong></td>
    <td width="44"><strong>Court Id </strong></td>
    <td width="61"><strong>First Client Party </strong></td>
    <td width="66"><strong>Second Client Party </strong></td>
    <td width="60"><strong>Date</strong></td>
    <td width="50"><strong>Status</strong></td>
  
  </tr>
  </thead>
  <tbody>
  
  <?php
	$uname=$_SESSION['uname'];
?>   
	
  
   <?php
 include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from  client_case_details ccd, client_details cd, advocates_details ad where ccd.client_id=cd.client_id and ccd.advocate_id=ad.advocate_id and cd.c_email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['advocate_name']?></td>
    <td>&nbsp;<?php echo $row['case_name']?></td>
    <td>&nbsp;<?php echo $row['case_description']?></td>
    <td>&nbsp;<?php echo $row['court_id']?></td>
    <td>&nbsp;<?php echo $row['first_client_party']?></td>
    <td>&nbsp;<?php echo $row['second_client_party']?></td>
    <td>&nbsp;<?php echo $row['date']?></td>
    <td>&nbsp;<?php echo $row['status']?></td>
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

