<?php include('metatags.php');?>
	
<?php include('header.php');?>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
 <?php include('sidebar.php');?>
 

                        
                        <section id="main" class="clearfix">
<div id="main-header" class="page-header">
                            	
    <?php
	$email=$_SESSION['uname'];
	?>                            
                                <h1 id="main-heading">
                                	Wel-Come To <?php echo $email; ?> <span>	
									<p>&nbsp;</p>
										<p>&nbsp;</p>
											<p>&nbsp;</p>
<span><h2>Advocate Details</h2></span>
                                </h1>	<p>&nbsp;</p>
                            </div>
                            
                            <div id="main-content">
                            	<img src="../image/law.jpg" width="1000" height="500"> 
                            	<div id="dashboard-demo" class="tabbable analytics-tab paper-stack">
                                	<ul class="nav nav-tabs">
                                        <li class="active">
										
										<?php include('footer.php');?>