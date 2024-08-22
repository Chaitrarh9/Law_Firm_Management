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
                                	Article Form <span>Law_Dictionary</span>
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
  <table width="372" height="280" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><span class="style1">Articles </span></div></td>
    </tr>
    <tr>
      <td width="133">Article Name </td>
      <td width="182"><input name="article_name" type="text" id="article_name" class="validate[required,custom[onlyLetter]]"/></td>
    </tr>
    <tr>
      <td>Short Description </td>
      <td><textarea name="short_description" id="short_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td>Complete Description </td>
      <td><textarea name="complete_description" id="complete_description" class="validate[required,custom[onlyLetter]]" /></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit10" value="Save" /></td>
      <td><input type="submit" name="Submit" value="Reset" /></td>
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
