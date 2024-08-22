<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="618" border="1">
  <tr>
    <td colspan="8"><div align="center">View Articles </div></td>
  </tr>
  <tr>
    <td>Sl No </td>
    <td>Article Name</td>
    <td>Short Description</td>
    <td>Complete Description</td>
    <td>Edit</td>
    <td>Delete</td>
    
  </tr>
  <?php
 include('dbconnect.php');
 
 $sn=1;
 $sql="select * from articles";
$res=mysql_query($sql); 
while($row=mysql_fetch_array($res))
{ 

  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['article_name']?></td>
    <td>&nbsp;<?php echo $row['short_description']?></td>
    <td>&nbsp;<?php echo $row['complete_description']?></td>
    <td><a href="article_edit.php?article_id=<?php echo $row['article_id'] ?>">Edit</a></td>
    <td><a href="articles_delete.php?article_id=<?php echo $row['article_id'] ?>">Delete</a></td>
    
  </tr>
<?php
}
?>
</table>
</body>
</html>

