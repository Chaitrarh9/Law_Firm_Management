
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
                                	Article Form <span>Law_Firm</span></h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Article Insertion</span>
										</div>
										
										<div class="widget-content form-container">

<?php include('../dbconnect.php');

$article_id=$_REQUEST['article_id'];
 
 $sql="select * from articles where article_id='$article_id'";
$res=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($res);
 

  ?>
  
<form id="formID" name="form1" method="post" action="articles_update.php">
<p>
  <input type="hidden" value="<?php echo $row['article_id']?>" name="article_id" />
</p>
<table width="416" height="430" border="0" align="center">
    <tr>
      <td width="186"><strong>Article Name </strong></td>
      <td width="214"><input name="article_name" maxlength="20" type="text" id="article_name" value="<?php echo $row['article_name']?>"class="validate[required]" /></td>
    </tr>
    <tr>
      <td><strong>Short Description </strong></td>
      <td></textarea>
        <textarea name="short_description" maxlength="100" id="short_description"><?php echo $row['short_description']?></textarea></td>
    </tr>
    <tr>
      <td><strong>Complete Description </strong></td>
      <td></textarea>
        <textarea name="complete_description" maxlength="100" id="complete_description"><?php echo $row['complete_description']?></textarea></td>
    </tr>
    <tr>
      <td height="82"><div align="center">
        <input type="submit" name="Submit10" class="btn btn-primary" value="update" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Reset"class="btn btn-danger" value="clear" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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