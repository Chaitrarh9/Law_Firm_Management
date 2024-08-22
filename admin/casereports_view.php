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
                                	Case Reports <span>Law_Firm</span>
                                </h1>
                            </div>
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
                                                        <td width="45"><strong>Sl No </strong></td>
                                                        <td width="96"><strong>Client Name </strong></td>
                                                        <td width="78"><strong>Report</strong></td>
                                                        <td width="137"><strong>Upload Date</strong></td>
                                                        <td width="152"><strong>Client Case Name </strong></td>
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                    <?php include('../dbconnect.php');
 
                                                        $sn=1;
                                                        $sql="select * from case_reports cr,client_case_details cc,client_details c where cr.client_case_id=cc.client_case_id and cc.client_id=c.client_id";
                                                        $res=mysqli_query($conn,$sql); 
                                                        while($row=mysqli_fetch_array($res))
                                                            { 

                                                    ?>
                                                    <tr>
                                                        <td>&nbsp;<?php echo $sn++;?></td>
                                                        <td>&nbsp;<?php echo $row['client_name']?></td>
                                                        <td>&nbsp;<?php echo $row['report']?></td>
                                                        <td>&nbsp;<?php echo $row['upload_date']?></td>
                                                        <td>&nbsp;<?php echo $row['case_name']?></td>
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
