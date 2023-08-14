<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from star where star_id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Star Deleted successfully');window.location.replace('manage_star.php');</script>";
}
else
{
    echo "<script>alert('Error to delete Star');window.location.replace('manage_star.php');</script>";
}
?>