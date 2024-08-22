<?php include('metatags.php');?>
	
<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style3 {font-weight: bold}
.style4 {font-weight: bold}
.style5 {font-weight: bold}
-->
</style>

        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
 <?php include('sidebar.php');?>

                        
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	
                                
                                <h1 id="main-heading">
                                	Advocate Registration <span>Law Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Advocate Insertion</span>
										</div>
										
										<div class="widget-content form-container">
										



<form name="formID" id="formID" method="post"  action="adv_insert.jsp">

    
      
      
    <div class="control-group">
	<label class="control-label"><strong>First Name :<span class="required">*</span></strong></label>
	<div class="controls">
    <input name="fn" type="text" id="fn" class="validate[required,custom[onlyLetter]]">
  </div>
	</div>


 <div class="control-group">
	<label class="control-label"><strong> Middle Name <span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="mn" type="text" id="mn" class="validate[required,custom[onlyLetter]]">
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label"><strong>Last Name <span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="ln" type="text" id="ln" class="validate[required,custom[onlyLetter]]">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label"><strong>Address :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <textarea name="ad" id="ad" class="validate[required]"></textarea>
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label"><strong>City :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="ct" type="text" id="ct" class="validate[required,custom[onlyLetter]]">
  </div>
	</div>



 <div class="control-group">
	<label class="control-label"><strong> State :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="st" type="text" id="st" class="validate[required,custom[onlyLetter]]">
  
</div>
	</div>


 <div class="control-group">
	<label class="control-label"><strong> Pincode :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="pc" type="text" id="pc" class="validate[required,custom[onlyNumber]]">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label"><strong>Gender :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="gender" type="radio" value="Male" class="validate[required] radio"> 
    Male
    <input name="gender" type="radio" value="Female" class="validate[required] radio">
    Female
</div>
	</div>


  <div class="control-group">
	<label class="control-label"><strong>DOB :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="dob" type="text" id="dp-cmy" class="datepicker-cmy">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label"><strong>Phone No :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="pno" type="text" id="pno" placeholder="00000-000000" class="validate[required]">
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label"><strong>Mobile No :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <input name="mno" type="text" id="mno" placeholder="0123456789" class="validate[required,custom[mobile]]">
</div>
	</div>
  


  <div class="control-group">
	<span class="style1">
	<label class="control-label">Email Id :*</label>
	</span>
	<div class="controls"><strong>
  
    <input name="ei" type="text" id="ei" class="validate[required,custom[email]]">
    </strong></div>
	</div>
  

<div class="control-group style3">
	<label class="control-label">
  Website :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="ws" type="text" id="ws" class="validate[required] span12">
</div>
	</div>
  

<div class="control-group">
	<strong>
	<label class="control-label">
  Specialization :*</label>
        </strong>	
	<div class="controls">
  
    <input name="sp" type="text" id="sp" class="validate[required]">
</div>
	</div>
  

<div class="control-group">
	<label class="control-label"><strong>
  Brief Intro :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <textarea name="bi" id="bi" class="validate[required]"></textarea>
</div>
	</div>
  

<div class="control-group">
	<label class="control-label"><strong>
  Experiance :<span class="required">*</span></strong></label>
	<div class="controls">
  
    <textarea name="ex" id="ex" class="validate[required]"></textarea>
</div>
	</div>
  

<div class="control-group">
	<label class="control-label style4">
  Case Details :<span class="required">*</span></label>
	<div class="controls">
  <textarea name="cd" id="cd" class="validate[required] span12"></textarea>
</div>
	</div>


<div class="control-group">
	<label class="control-label style5">
  User Name :<span class="required">*</span></label>
	<div class="controls">
  <input type="text" name="username" id="username" class="validate[required] span12">
</div>
	</div>

  
      <div align="center">	          
        <input type="reset" name="Submit2" class="btn btn-primary pull-right" value="Reset">
        &nbsp;&nbsp;
        <input type="submit" class="btn btn-primary pull-right" name="Submit" value="Submit">

      </div>
 
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