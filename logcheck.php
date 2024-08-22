<?php session_start();?>
<?php


$username=$_POST['username'];
$password=$_POST['password'];

include('dbconnect.php');
 $sql="select * from login where username='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="advocate")
{
header('location:advocate/home.php');
}

else if($type=="client")
{
header('location:clilent/home.php');
}


else if($type=="court")
{
header('location:court/home.php');
}

}
else
{
?>
<script>
alert("Invalid User Or Password");

history.back();
</script>
<?php
}

?>

