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
                                	Advocate Registration <span>Law_Firm</span></h1>
                            </div>
							
							<div id="main-content">
                                 <a href="advform.jsp" class="btn btn-inverse">Add New Advocate</a> <p>&nbsp;</p>
                            
                            
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
      <th width="39">Advocate Id</th>
      <th width="39">Full Name</th>
      <th width="39">Address</th>
      <th width="39">Email Id</th>
      <th width="39">Specialization</th>
      <th width="39">Experiance</th>
      <th width="42">Delete</th>
	  <th width="42">Edit</th>
    </tr>
	</thead>
	<tbody>
<%@page import="java.sql.*"%>
<%@page import="law.dictionary"%>
<jsp:useBean id="l" class="law.dictionary"/>
<jsp:getProperty name="l" property="conn"/>
<%
try
{
ResultSet rs=l.st.executeQuery("select * from advocate");
while(rs.next())
{
	int adv_id=rs.getInt("Advocate_Id");
	String fn=rs.getString("Firstname");
	String mn=rs.getString("Middlename");
	String ln=rs.getString("Lastname");
	String ad=rs.getString("Address");
	String ct=rs.getString("City");
	String st=rs.getString("State");
	int pc=rs.getInt("Pincode");
	String gn=rs.getString("Gender");
	String dob=rs.getString("DOB");
	String pno=rs.getString("Phone_No");
	String mno=rs.getString("Mobile_No");
    String eid=rs.getString("Email_id");
	String ws=rs.getString("Website");
	String sp=rs.getString("Specialization");
	String bf=rs.getString("Brief_Intro");
	String ex=rs.getString("Experiance");
	String cd=rs.getString("Case_Details");
	%>
	<tr>
      <td><%=adv_id%></td>
      <td><%=fn%>&nbsp;<%=mn%>&nbsp;<%=ln%></td>
      <td><%=ad%>&nbsp;<%=ct%></td>
      <td><%=eid%></td>
      <td><%=sp%></td>
      <td><%=ex%></td>
      <td><a href="adv_del.jsp?adv_id=<%=adv_id%>" class="btn btn-small" onClick="return confirm('Are You Sure Want To Delete...?')"><li class="icon-trash"></li></a></td>
	  <td><a href="adv_update1.jsp?ad_id=<%=adv_id%>" class="btn btn-small"><li class="icon-pencil"></li></a></td>
    </tr>
	<%
}
}	
catch(Exception e)
{
out.println(e);
}
%>
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

	
   
 


