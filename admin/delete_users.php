<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from user where id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('User Deleted successfully');window.location.replace('manage_users.php');</script>";
}
else
{
    echo "<script>alert('Error to delete User');window.location.replace('manage_users.php');</script>";
}
?>