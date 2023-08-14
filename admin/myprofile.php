<?php
if(!isset($_COOKIE["admin"]))
{
    header("Location:../admin.php");
    exit;
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
  <link rel="stylesheet" href="../css/style.css">
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
<!--<div class="container-fluid py-5" style="background-color:rgb(1,22,41);border-bottom:2px solid white;">
    <div class="container" style="background-color:rgb(26,39,61);">
        <div class="row">
            <p><h6 class="text-white my-2 ml-4 p-2 text-uppercase">Latest Updates</h6> <span style="font-size:40px;color:white;" class="mt-n2 mr-3 font-weight-light">|</span><a href="" style="margin-top:15px;">Watch movie : The Big Ugly</a></p>
        </div>
    </div>
</div>
-->
<div class="bg-dark">
<div class="container">
<div class="row">

<div class="col-md-9">
<!--
  <p class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:rgb(127,255,212);font-weight:bold;">Welcome admin</span></p>
-->
  <!--hello hi how are you -->
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
<form action="verify.php" name="change_pass" method="post" autocomplete="off" onsubmit="return change_password()">
  <p class="font-weight-bold ml-4" style="color:rgb(127,255,212);">Change password</p>

  <div class="row p-4">
<div class="col-md-6 my-2">
    Old password
</div>
<div class="col-md-6 my-2">
    <input type="password" class="form-control form-control-sm" name="old_password" placeholder="Enter old password" id="oldpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="ope"></p></div>
<div class="col-md-6 my-2">
    New password
</div>
<div class="col-md-6 my-2">
    <input type="password" class="form-control form-control-sm" name="new_password" placeholder="Enter new password" id="newpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="npe"></p></div>
<div class="col-md-6 my-2">
    Confirm password
</div>
<div class="col-md-6 my-2">
    <input type="password" class="form-control form-control-sm" name="confirm_password" placeholder="Enter confirm password" id="confirmpass">
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="cpe"></p></div>
<div class="form-group">
<button type="submit" class=" border-0 ml-3" name="update_password">Reset password</button>
</div>
</form>
</div>
  </div>
  <div class="col-md-3">

  </div>
</div>
  </div>
  </div>
</div>
</div>
<?php
include('../footer.php');
?>

</body>
</html>