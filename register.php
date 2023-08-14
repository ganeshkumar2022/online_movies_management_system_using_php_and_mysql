<?php
session_start();
if(isset($_POST["register"]))
{
    include('db.php');
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $zipcode=$_POST["zipcode"];
    $sql="insert into user values (NULL,'$firstname','$lastname','$email','$password','$dob','$gender','$zipcode','images/avatar.jfif',NULL)";
    if(mysqli_query($con,$sql))
    {
        $_SESSION["flash"]="Registered successfully";
        header("Location:index.php");
    }
    else
    {
        $_SESSION["flash"]="Error to register";
        header("Location:index.php");
    }
    
}
?>