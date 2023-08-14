<?php
session_start();
if(isset($_POST["login"])) 
{
    $email=$_POST["lemail"];
    $password=$_POST["lpassword"];
    include('db.php');
    $sql="select * from user where email='$email' and password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION["uid"]=$row["id"];
        #setcookie("mycookie",$row["id"],time()+(86400),"/");
        header("Location:index.php");
        exit;
    }
    else
    {
        #echo "incorrect email or password";
        echo "<script>alert('Email or password incorrect');window.location.replace('index.php');</script>";
    }
}
?>