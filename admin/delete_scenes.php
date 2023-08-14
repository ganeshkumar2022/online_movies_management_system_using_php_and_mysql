<?php
include('../db.php');
$id=$_GET["id"];
$sql="delete from movie_scenes where scenes_id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Movie scene Deleted successfully');window.location.replace('manage_scenes.php');</script>";
}
else
{
    echo "<script>alert('Error to delete movie scenes');window.location.replace('manage_scenes.php');</script>";
}
?>