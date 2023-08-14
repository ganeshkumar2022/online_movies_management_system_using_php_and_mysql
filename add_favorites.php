<?php
session_start();
$mid=$_GET["mid"];
if(isset($_SESSION["uid"]))
{
include('db.php');
$uid=$_SESSION["uid"];
$sql2="select * from favourites where movie_id=$mid";
$result=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result)>0)
    {
        echo "<script>alert('Already add to your favourites');window.location.replace('view_movies.php?id='+$mid);</script>"; 
    }
    else
    {
        $sql="insert into favourites (user_id,movie_id) values ($uid,$mid)";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Add to your favourites successsfully');window.location.replace('view_movies.php?id='+$mid);</script>";
        }
        else
        {
            echo "<script>alert('Error to add your favourites');window.location.replace('view_movies.php?id='+$mid);</script>"; 
        }
    }
}
else
{
    echo "<script>alert('Login to continue');window.location.replace('view_movies.php?id='+$mid);</script>";
}
?>