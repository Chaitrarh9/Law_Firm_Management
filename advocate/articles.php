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
  <table width="372" height="336" border="0" align="center">
    <tr>
      <td width="133"><strong>Article Name </strong></td>
      <td width="182"><input name="article_name" maxlength="20"type="text" id="article_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td><strong>Short Description </strong></td>
      <td><textarea name="short_description"maxlength="40" id="short_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td height="122"><strong>Complete Description </strong></td>
      <td><textarea name="complete_description"maxlength="100" id="complete_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td height="53"><div align="center">
        <input type="submit" name="Submit10" class="btn btn-primary"value="Save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Reset"class="btn btn-danger" value="Reset" />
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
