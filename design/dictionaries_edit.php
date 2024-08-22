
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
                                	Dictionary <span>Law_Dictionary</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                
                                <div class="row-fluid">
								
									<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Dictionary Insertion</span>
										</div>
										
										<div class="widget-content form-container">
<?php
 include('dbconnect.php');

$dictionary_id=$_REQUEST['dictionary_id'];
 
 $sql="select * from dictionaries where dictionary_id='$dictionary_id'";
$res=mysql_query($sql); 
$row=mysql_fetch_array($res);
 

  ?>

<form id="form1" name="form1" method="post" action="dictionaries_update.php">
<input type="hidden" value="<?php echo $row['dictionary_id']?>" name="dictionary_id" />
<table width="343" height="195" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center"><span class="style1">Dictionary</span></div></td>
    </tr>
    <tr>
      <td width="110">Dictionary Word </td>
      <td width="217"><input name="dictionary_word" type="text" id="dictionary_word" value="<?php echo $row['dictionary_word']?>" /></td>
    </tr>
    <tr>
      <td height="40">Description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description']?>" /></td>
    </tr>
    <tr>
      <td height="40"><input type="submit" name="Submit12" value="Update" /></td>
      <td><input type="submit" name="Submit13" value="cancel" /></td>
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