<?php include('metatags.php');?>
	
<?php include('header.php');?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
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
                                	Article Form <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Articles Insertion</span>
										</div>
										
<form id="formID" name="form1" method="post" action="articlesinsert.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="433" height="316" border="0" align="center">
    <tr>
      <td width="204"><strong>Article Name </strong></td>
      <td width="219"><input name="article_name" type="text" id="article_name" class="validate[required]"/></td>
    </tr>
    <tr>
      <td><strong>Short Description </strong></td>
      <td><textarea name="short_description" id="short_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td><strong>Complete Description </strong></td>
      <td><textarea name="complete_description" id="complete_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td height="73"><div align="center">
        <input type="submit" name="Submit10"class="btn btn-primary" value="Save" />
      </div></td>
      <td>
        <div align="center">
          <input type="reset" name="Reset" class="btn btn-danger"value="Reset" />
        </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
