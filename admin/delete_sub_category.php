<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from subcategory where scid=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Subcategory Deleted successfully');window.location.replace('manage_sub_category.php');</script>";
}
else
{
    echo "<script>alert('Error to delete Subcategory');window.location.replace('manage_sub_category.php');</script>";
}
?>