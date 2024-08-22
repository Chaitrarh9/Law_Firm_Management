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
                                	Dictionary <span>Law_Firm </span></h1>
                            </div>
							
							<div id="main-content">
                                 <a href="dictionaries.php" class="btn btn-inverse">Add New Dictionaries</a> <p>&nbsp;</p>
                            
                            
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
    <td width="189"><strong>Sl No </strong></td>
    <td width="201"><strong>Dictionary word </strong></td>
    <td width="198"><strong>Description</strong></td>
    <td width="164"><strong>Edit</strong></td>
    <td width="101"><strong>Delete</strong></td>
  </tr>
  </thead>
  <tbody>
   <?php
 include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from  dictionaries";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['dictionary_word']?></td>
    <td>&nbsp;<?php echo $row['description']?></td>
    <td>&nbsp;<a href="dictionaries_edit.php?dictionary_id=<?php echo $row['dictionary_id'] ?>">Edit</a></td>
	<td>&nbsp;<a href="dictionaries_delete.php?dictionary_id=<?php echo $row['dictionary_id']?>">Delete</a></td>
  </tr>
  <?php
}
?>
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

	
   
 



