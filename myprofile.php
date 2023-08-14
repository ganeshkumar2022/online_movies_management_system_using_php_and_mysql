<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("Location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies world</title>
    <link rel="icon" type="image/png" href="images/logo3.png">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <link rel="stylesheet" href="css/style.css">
  <?php
if(isset($_SESSION["flash"]))
{
?>
<script>
  $(document).ready(function(){
  $("#myModal3").modal();
});
</script>
<?php
unset($_SESSION["flash"]);
}
?>
<style>
.log-design
{
    background-color:#024b6e;
}
td
{
padding:10px;
}
table
{
  
}
.reg td
{
  padding:5px;
}
.error
{
  color:red;
}
</style>
</head>
<body onload="myfunction()">
<?php
include('header.php');
?>
<div class="bg-dark">
<div class="container">
<div class="row">
<?php
include('db.php');
$id=$_SESSION["uid"];
$sql="select * from user where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="col-md-9">
<!-- update profile start -->
<script type="text/javascript">

function update_profile()
{
    var status=false;
    var fname=document.update_profil.fname.value;
    var lname=document.update_profil.lname.value;
    var dob=document.update_profil.dob.value;
    var email=document.update_profil.myemail.value;
    var zipcode=document.update_profil.zipcode.value;
    var myimage=document.update_profil.myimage.value;
    var gender=document.update_profil.gender.value;
    if(fname=="" || fname==null)
    {
       document.getElementById("fnameerr").innerHTML="Please enter first name";
       status=false;
    }
    if(lname=="" || lname==null)
    {
       document.getElementById("lnameerr").innerHTML="Please enter last name";
       status=false;
    }
    if(dob=="" || dob==null)
    {
       document.getElementById("doberr").innerHTML="Please enter date of birth";
       status=false;
    }
    if(email=="" || email==null)
    {
       document.getElementById("emailerr").innerHTML="Please enter Email";
       status=false;
    }
    if(zipcode=="" || zipcode==null)
    {
       document.getElementById("ziperr").innerHTML="Please enter zip code";
       status=false;
    }
    if(myimage=="" || myimage==null)
    {
       document.getElementById("myimageerr").innerHTML="Please enter my image";
       status=false;
    }
    if(gender=="" || gender==null)
    {
       document.getElementById("gendererr").innerHTML="Please enter gender";
       status=false;
    }

    if(fname.length>0 && lname.length>0 && dob.length>0 && email.length>0 && zipcode.length>0 && myimage.length>0 && gender.length>0 )
    {
        status=true;
    }
    return status;
}
</script>
<!-- update profile end -->
<?php
include('db.php');
$uuid=$_SESSION["uid"];
$ssql="select * from user where id=$uuid";
$rresult=mysqli_query($con,$ssql);
$rrow=mysqli_fetch_assoc($rresult);
?>
  <div class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
  <form action="" name="update_profil" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return update_profile()">
  <p class="font-weight-bold ml-4" style="color:rgb(127,255,212);">Edit profile</p>
<p id="prof_upd_success" class=" text-success text-center"></p>
<p id="prof_upd_danger" class=" text-danger text-center"></p>
  <div class="row p-4">

<div class="col-md-6 my-2">
    First name
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="fname" value="<?=$rrow['firstname']?>" placeholder="Enter first name" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="fnameerr"></p></div>
<div class="col-md-6 my-2">
    Last name
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="lname" value="<?=$rrow['lastname']?>" placeholder="Enter last name" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="lnameerr"></p></div>
<div class="col-md-6 my-2">
    Date of birth
</div>
<div class="col-md-6 my-2">
    <input type="date" class="form-control form-control-sm" name="dob" value="<?=$rrow['dob']?>" placeholder="Enter date of birth" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="doberr"></p></div>
<div class="col-md-6 my-2">
    Email
</div>
<div class="col-md-6 my-2">
    <input type="email" class="form-control form-control-sm" name="myemail"  value="<?=$rrow['email']?>"placeholder="Enter email" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="emailerr"></p></div>
<div class="col-md-6 my-2">
    Zip code
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="zipcode" value="<?=$rrow['zipcode']?>" placeholder="Enter zip code" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="ziperr"></p></div>
<div class="col-md-6 my-2">
    Profile image
</div>
<div class="col-md-6 my-2">
    <input type="file" name="myimage" id="email">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="myimageerr"></p></div>
<div class="col-md-6 my-2">
    Gender
</div>
<div class="col-md-6 my-2">
    <input type="radio" name="gender" value="male" <?php if($rrow["gender"]=="male") { echo "checked"; } ?>> Male
    <input type="radio" name="gender" value="female" <?php if($rrow["gender"]=="female") { echo "checked"; } ?>> Female
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="gendererr"></p></div>
<div class="form-group">
<button type="submit" class=" border-0 ml-3" name="update_prof">Update</button>
</div>
</form>
</div>
</div>
<?php
if(isset($_POST["update_prof"]))
{
    include('db.php');
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dob=$_POST["dob"];
    $myemail=$_POST["myemail"];
    $zipcode=$_POST["zipcode"];
    $gender=$_POST["gender"];
    $target_dir="profile_images";
    $target_file=$target_dir.basename($_FILES["myimage"]["name"]);
    if(strstr($target_file,".jpg") || strstr($target_file,".jpeg") || strstr($target_file,".png") || strstr($target_file,".jpeg") || strstr($target_file,".jfif"))
    {
    if(move_uploaded_file($_FILES["myimage"]["tmp_name"],$target_file))
    {
        $uid=$_SESSION["uid"];
        $sql="update user set firstname='$fname',lastname='$lname',email='$myemail',dob='$dob',gender='$gender',zipcode='$zipcode',myimage='$target_file' where id=$uid";
        if(mysqli_query($con,$sql))
        {
            echo "<script>
            document.getElementById('prof_upd_success').innerHTML='Profile updated successully';
            </script>";
        }
        else
        {
            echo "<script>
            document.getElementById('prof_upd_danger').innerHTML='Error to update profile';
            </script>";
        }
    }
    else
    {
         echo "<script>
            document.getElementById('prof_upd_danger').innerHTML='Error to upload image';
            </script>";
    }
}
else
{
    echo "<script>
            document.getElementById('prof_upd_danger').innerHTML='Please select image format only';
            </script>";
}
}
?>
<!-- change password -->
<script type="text/javascript">

function change_password()
{
    var status=false;
    var oldpass=document.change_pass.old_password.value;
    var newpass=document.change_pass.new_password.value;
    var confirmpass=document.change_pass.confirm_password.value;
    if(oldpass=="" || oldpass==null)
    {
       document.getElementById("ope").innerHTML="Please enter old password";
       status=false;
    }
    if(newpass=="" || newpass==null)
    {
       document.getElementById("npe").innerHTML="Please enter new password";
       status=false;
    }
    if(confirmpass=="" || confirmpass==null)
    {
       document.getElementById("cpe").innerHTML="Please enter confirm password";
       status=false;
    }
    if(oldpass.length>0 && newpass.length>0 && confirmpass.length>0 && newpass==confirmpass)
    {
        status=true;
    }
    else
    {
        document.getElementById("cpe").innerHTML="Please enter same password as above";
       status=false;
    }
    return status;
}
</script>
<div class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
<center><p id="submitpassword_error" class="text-danger"></p></center>
<center><p id="submitpassword_success" class="text-success"></p></center>
<form action="" name="change_pass" method="post" autocomplete="off" onsubmit="return change_password()">
  <p class="font-weight-bold ml-4" style="color:rgb(127,255,212);">Change password</p>

  <div class="row p-4">
<div class="col-md-6 my-2">
    Old password
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="old_password" placeholder="Enter old password" id="oldpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="ope"></p></div>
<div class="col-md-6 my-2">
    New password
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="new_password" placeholder="Enter new password" id="newpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="npe"></p></div>
<div class="col-md-6 my-2">
    Confirm password
</div>
<div class="col-md-6 my-2">
    <input type="text" class="form-control form-control-sm" name="confirm_password" placeholder="Enter confirm password" id="confirmpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="cpe"></p></div>
<div class="form-group">
<button type="submit" class=" border-0 ml-3" name="update_password">Reset password</button>
</div>
</form>
</div>
<!-- change password -->
</div>
  </div>
  <div class="col-md-3">
<div class="card p-2 m-4" style="height:400px;">
<div class="card-body">
<img src="images/email.png" style="height:150px;width:150px;">
<h5 class="font-weight-bold text-center my-3" style="color:blue;">Subscribe to our mailing list</h5>
<div>
<center>
<?php
include('subscribe.php');
?>
</center>
</div>
</div>
</div>

  </div>
  </div>
</div>
</div>
<?php
include('footer.php');
?>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#change_password").validate({
rules:
{
    old_password:"required",
    new_password:"required"
}
});
});
</script> -->
<?php
include('headercontent.php');
?>
<?php
if(isset($_POST["update_password"]))
{
    $old_password=$_POST["old_password"];
    $new_password=$_POST["new_password"];
    $confirm_password=$_POST["confirm_password"];
    $uid=$_SESSION["uid"];
    $sql="select * from user where id=$id and password='$old_password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $id=$_SESSION["uid"];
        $sql2="update user set password='$new_password' where id=$id";
        if(mysqli_query($con,$sql2))
        {
            echo "<script>document.getElementById('submitpassword_success').innerHTML='Password updated successfully';</script>"; 
        }
        else
        {
            echo "<script>document.getElementById('submitpassword_error').innerHTML='Error to update password';</script>"; 
        }
    }
    else
    {
       echo "<script>document.getElementById('submitpassword_error').innerHTML='Old password not match';</script>";
    }
    
}
?>
</body>
</html>