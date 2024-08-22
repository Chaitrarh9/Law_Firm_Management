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
                                	Articles <span>Law_Firm</span>
                                </h1>
                            </div>
							
							<div id="main-content">
                                 <a href="articles.php" class="btn btn-inverse">Add New Articles</a> <p>&nbsp;</p>
                            
                            
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
    <td><strong>Sl No </strong></td>
    <td><strong>Article Name</strong></td>
    <td><strong>Short Description</strong></td>
    <td><strong>Complete Description</strong></td>
    <td><strong>Edit</strong></td>
    <td><strong>Delete</strong></td>
    
  </tr>
  </thead>
  <tbody>
  <?php include('../dbconnect.php');
 
 $sn=1;
 $sql="select * from articles";
$res=mysqli_query($conn,$sql); 
while($row=mysqli_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['article_name']?></td>
    <td>&nbsp;<?php echo $row['short_description']?></td>
    <td>&nbsp;<?php echo $row['complete_description']?></td>
    <td><a href="article_edit.php?article_id=<?php echo $row['article_id'] ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="articles_delete.php?article_id=<?php echo $row['article_id'] ?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>
    
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

	
   
 