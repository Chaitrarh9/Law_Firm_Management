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
                                	Change Password <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Change Password</span>
										</div>
										
										<div class="widget-content form-container">
										


						
					<form name="form2" method="post" action="changepin.php">
<p>Old Password </p>
  <label>
  <input type="password" name="old_pwd">
  </label>
  <p>New password </p>
  <p>
    <label>
      <input type="password" name="new_pwd">
      </label>
	  <p>Confirm password </p>
  <p>
    <label>
      <input type="password" name="conf_pwd">
      </label>
  </p>


  <label>
  <input type="submit" name="Submit" value="Change" />
  </label>
</form>
     
										</div>
									
									</div>
									
									
									</div>
								
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