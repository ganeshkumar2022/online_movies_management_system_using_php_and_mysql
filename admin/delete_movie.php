<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from add_movies where mid=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Movie Deleted successfully');window.location.replace('manage_movies.php');</script>";
}
else
{
    echo "<script>alert('Error to delete Movie');window.location.replace('manage_movies.php');</script>";
}
?>