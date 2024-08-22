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
                                 Dictionary <span>Law_Firm</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Dictionary Insertion</span>
										</div>

<form id="formID" name="form1" method="post" action="dictionariesinsert.php">
  <p>&nbsp;</p>
  <table width="415" height="280" border="0" align="center">
    <tr>
      <td width="162" height="93"><strong>Dictionary Word </strong></td>
      <td width="243"><input name="dictionary_word"maxlength="100" type="text"  class="validate[required,custom[onlyLetter]]" id="dictionary_word"/></td>
    </tr>
    <tr>
      <td height="89"><strong>Description</strong></td>
      <td><textarea name="description"maxlength="100" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="77">
        <div align="center">
          <input type="submit" name="Submit12" class="btn btn-primary"value="save" /> 
        </div></td>
      <td><div align="center">
        <input type="reset" name="Submit13" class="btn btn-danger"value="cancel" />
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
