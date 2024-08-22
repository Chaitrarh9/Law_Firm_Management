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
                                	Advocate Registration <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Advocate Insertion</span>
										</div>
										
										<div class="widget-content form-container">
										


<%@page import="java.sql.*"%>
<%@page import="law.dictionary"%>
<jsp:useBean id="l" class="law.dictionary"/>
<jsp:getProperty name="l" property="conn"/>
<%

ResultSet rs=l.st.executeQuery("select max(Advocate_Id) from advocate ");
rs.next();
int aid=rs.getInt(1);
aid=aid+1;
%>

<form name="formID" id="formID" method="post"  action="adv_insert.jsp">

    
      
    <div class="control-group">
	<label class="control-label">Advocate Id : <span class="required">*</span></label>
	<div class="controls">
        <input name="adv" type="text" id="adv" value="<%=aid%>" readonly="">
		</div>
	</div>
	  
    <div class="control-group">
	<label class="control-label">First Name :<span class="required">*</span></label>
	<div class="controls">
    <input name="fn" type="text" id="fn" class="validate[required,custom[onlyLetter]]">
  </div>
	</div>


 <div class="control-group">
	<label class="control-label"> Middle Name <span class="required">*</span></label>
	<div class="controls">
  
    <input name="mn" type="text" id="mn" class="validate[required,custom[onlyLetter]]">
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label">Last Name <span class="required">*</span></label>
	<div class="controls">
  
    <input name="ln" type="text" id="ln" class="validate[required,custom[onlyLetter]]">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label">Address :<span class="required">*</span></label>
	<div class="controls">
  
    <textarea name="ad" id="ad" class="validate[required]"></textarea>
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label">City :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="ct" type="text" id="ct" class="validate[required,custom[onlyLetter]]">
  </div>
	</div>



 <div class="control-group">
	<label class="control-label"> State :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="st" type="text" id="st" class="validate[required,custom[onlyLetter]]">
  
</div>
	</div>


 <div class="control-group">
	<label class="control-label"> Pincode :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="pc" type="text" id="pc" class="validate[required,custom[onlyNumber]]">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label">Gender :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="gender" type="radio" value="Male" class="validate[required] radio"> 
    Male
    <input name="gender" type="radio" value="Female" class="validate[required] radio">
    Female
</div>
	</div>


  <div class="control-group">
	<label class="control-label">DOB :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="dob" type="text" id="dp-cmy" class="datepicker-cmy">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label">Phone No :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="pno" type="text" id="pno" placeholder="00000-000000" class="validate[required]">
  
</div>
	</div>


  <div class="control-group">
	<label class="control-label">Mobile No :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="mno" type="text" id="mno" placeholder="0123456789" class="validate[required,custom[mobile]]">
</div>
	</div>
  


  <div class="control-group">
	<label class="control-label">Email Id :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="ei" type="text" id="ei" class="validate[required,custom[email]]">
</div>
	</div>
  

<div class="control-group">
	<label class="control-label">
  Website :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="ws" type="text" id="ws" class="validate[required] span12">
</div>
	</div>
  

<div class="control-group">
	<label class="control-label">
  Specialization :<span class="required">*</span></label>
	<div class="controls">
  
    <input name="sp" type="text" id="sp" class="validate[required]">
</div>
	</div>
  

<div class="control-group">
	<label class="control-label">
  Brief Intro :<span class="required">*</span></label>
	<div class="controls">
  
    <textarea name="bi" id="bi" class="validate[required]"></textarea>
</div>
	</div>
  

<div class="control-group">
	<label class="control-label">
  Experiance :<span class="required">*</span></label>
	<div class="controls">
  
    <textarea name="ex" id="ex" class="validate[required]"></textarea>
</div>
	</div>
  

<div class="control-group">
	<label class="control-label">
  Case Details :<span class="required">*</span></label>
	<div class="controls">
  <textarea name="cd" id="cd" class="validate[required] span12"></textarea>
</div>
	</div>


<div class="control-group">
	<label class="control-label">
  User Name :<span class="required">*</span></label>
	<div class="controls">
  <input type="text" name="username" id="username" class="validate[required] span12">
</div>
	</div>

  
      <div align="center">
	          <input type="reset" name="Submit2" class="btn btn-primary pull-right" value="Reset">&nbsp;&nbsp;
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