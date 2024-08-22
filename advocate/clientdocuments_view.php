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
                                	Client  Documents <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                                 <a href="clientdocuments.php" class="btn btn-inverse">Add New Documents</a> <p>&nbsp;</p>
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">My Documents</span>
                                        </div>
                                      <div class="widget-content table-container">
										
  
                                        <table id="demo-dtable-01" class="table table-striped">
                                          <thead
  >
                                            <tr>
                                              <td width="50"><strong>Sl No </strong></td>
                                              <td width="136"><strong>Client Name </strong></td>
                                              <td width="142"><strong>Document Name</strong></td>
                                              <td><strong>Document Details</strong></td>
                                              <td width="90"><strong>Upload Date</strong></td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
include('../dbconnect.php');
 
$sn=1;
$uname=$_SESSION['uname'];
$sql="select * from client_document cd,client_details c, advocates_details ad where cd.client_id=c.client_id and c.advocate_id=ad.advocate_id and ad.email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

?>
                                            <tr>
                                              <td>&nbsp;<?php echo $sn++?></td>
                                              <td>&nbsp;<?php echo $row['client_name']?></td>
                                              <td>&nbsp;<?php echo $row['doc_name']?></td>
                                              <td><a href="../clilent/upload/<?php echo $row['upload_doc'];?>" target="san"> Download Document </a></td>
                                              <td>&nbsp;<?php echo $row['upload_date']?></td>
                                            </tr>
                                            <?php
}
?>
                                          </tbody>
                                        </table>
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

