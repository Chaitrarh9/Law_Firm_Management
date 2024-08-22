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
                                	Payment <span>Law_Firm</span></h1>
                      </div>
							
							<div id="main-content">
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <p class="title">Payments View
</p>
                                            <p class="title">&nbsp;                                            </p>
                                        </div>
                                        <div class="widget-content table-container">
										

  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="34"><strong>Sl No </strong></td>
    <td width="50"><strong>Client Name </strong></td>
    <td width="75"><strong>Amount Paid </strong></td>
    <td width="73"><strong>Description</strong></td>
    <td width="87"><strong>Paymode</strong></td>
    <td width="57"><strong>Bank Name </strong></td>
    <td width="65"><strong>Cheque No </strong></td>
    <td width="51"><p><strong>Payment Date </strong></p></td>
    
  </tr>
   </thead>
  <tbody>
  <?php
 include('../dbconnect.php');
 $sn=1;
$uname=$_SESSION['uname'];
 $sql="select * from payment p,client_details cd where p.client_id=cd.client_id and cd.c_email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['amount_paid']?></td>
    <td>&nbsp;<?php echo $row['description']?></td>
    <td>&nbsp;<?php echo $row['paymode']?></td>
    <td>&nbsp;<?php echo $row['bank_name']?></td>
    <td>&nbsp;<?php echo $row['cheque_no']?></td>
    <td>&nbsp;<?php echo $row['payment_date']?></td>
    
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

	
   
 



