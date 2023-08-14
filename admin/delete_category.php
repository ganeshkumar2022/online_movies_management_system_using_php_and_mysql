<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from category where cid=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Category Deleted successfully');window.location.replace('manage_category.php');</script>";
}
else
{
    echo "<script>alert('Error to delete category');window.location.replace('manage_category.php');</script>";
}
?>