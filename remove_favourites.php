<?php
session_start();
if(isset($_SESSION["uid"]))
{
$id=$_GET["id"];
$uid=$_SESSION["uid"];
include('db.php');
$sql="delete from favourites where movie_id=$id and user_id=$uid";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Remove favourites successfully');window.location.replace('myfavourites.php');</script>";
    }
    else
    {
        echo "<script>alert('Remove favourites successfully');window.location.replace('myfavourites.php');</script>";
    }
}
else
{
    echo "<script>alert('Login to continue');window.location.replace('index.php');</script>";
}
?>