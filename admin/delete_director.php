<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from director where dir_id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Director Deleted successfully');window.location.replace('manage_director.php');</script>";
}
else
{
    echo "<script>alert('Error to delete Director');window.location.replace('manage_director.php');</script>";
}
?>