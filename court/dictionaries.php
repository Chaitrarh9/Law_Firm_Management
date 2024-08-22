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
  <table width="415" height="181" border="0" align="center">
    <tr>
      <td width="110" height="93">Dictionary Word </td>
      <td width="217"><input name="dictionary_word" type="text"  class="validate[required,custom[onlyLetter]]" id="dictionary_word" value="<?php echo $row['dictionary_word']?>"/></td>
    </tr>
    <tr>
      <td height="40">Description</td>
      <td><textarea name="textarea"><?php echo $row['description']?></textarea></td>
    </tr>
    <tr>
      <td height="40"><div align="center">
        <input type="submit" name="Submit12" class="btn btn-primary" value="save" />
      </div></td>
      <td><div align="center">
        <input type="reset" name="Submit13"class="btn btn-danger" value="cancel" />
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
