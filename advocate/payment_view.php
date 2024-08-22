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
                                	Payment  <span>Law_Firm</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                 <a href="payment.php" class="btn btn-inverse">Add New Payment</a> <p>&nbsp;</p>
                            
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Client Payment Details View</span>
                                        </div>
                                        <div class="widget-content table-container">
										

  <table id="demo-dtable-01" class="table table-striped">
  <thead>
  <tr>
    <td width="34"><strong>Sl No </strong></td>
    <td width="50"><strong>Client Name </strong></td>
    <td width="75"><strong>Amount Paid </strong></td>
	 <td width="75"><strong>Pan Card </strong></td>
    <td width="73"><strong>Description</strong></td>
    <td width="87"><strong>Paymode</strong></td>
    <td width="57"><strong>Bank Name </strong></td>
    <td width="65"><strong>Cheque No </strong></td>
    <td width="51"><p><strong>Payment Date </strong></p></td>
    <td width="59"><strong>Delete</strong></td>
  </tr>
   </thead>
  <tbody>
  <?php
  
 include('../dbconnect.php');
 $sn=1;
 $total=0;
 $tot=0;
 $uname=$_SESSION['uname'];
 $sql="select * from payment p,client_details cd,advocates_details ad  where p.client_id=cd.client_id and ad.advocate_id=cd.advocate_id and ad.email_id='$uname'";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 
$tot=$tot+$row['amount_paid'];
  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['client_name']?></td>
    <td>&nbsp;<?php echo $row['amount_paid']?></td>
	<td>&nbsp;<?php echo $row['pan_card']?></td>
    <td>&nbsp;<?php echo $row['description']?></td>
    <td>&nbsp;<?php echo $row['paymode']?></td>
    <td>&nbsp;<?php echo $row['bank_name']?></td>
    <td>&nbsp;<?php echo $row['cheque_no']?></td>
    <td>&nbsp;<?php echo $row['payment_date']?></td>   
    <td>&nbsp;<a href="payment_delete.php?payment_id=<?php echo $row['payment_id']?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>
 </tr>
<?php
}
?>
</tbody>
</table>
<b>Total Client Amount Collect : <?php echo $tot; ?></b>
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

	
   
 



