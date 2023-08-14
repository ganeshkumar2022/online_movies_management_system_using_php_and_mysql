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
input[type=text]:focus
{
background-color:khaki;
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
<div class="col-md-12">
 <!-- <p class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:rgb(127,255,212);font-weight:bold;">Welcome ganesh</span></p>
-->
 <!--hello hi how are you -->
<div class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
<div class="row p-4">

<div class="col-md-3">
<a href="add_director.php">
    <div class="card" style="border:3px solid #0366a5;color:rgb(127,255,212);">
        <div class="card-body text-dark">
            Add Director to Movies
            <center>
            <img src="images/director.png" class="img-fluid" style="height:70px;width:70px;">
            </center>
        </div>
    </div>
</a>
</div>

<div class="col-md-3">
<a href="add_scenes.php">
    <div class="card" style="border:3px solid #0366a5;color:rgb(127,255,212);">
        <div class="card-body text-dark">
            Add scenes to Movies
            <center>
            <img src="images/scenes.png" class="img-fluid" style="height:70px;width:70px;">
            </center>
        </div>
    </div>
</a>
</div>

<div class="col-md-3">
<a href="add_stars.php">
    <div class="card" style="border:3px solid #0366a5;color:rgb(127,255,212);">
        <div class="card-body text-dark">
            Add Stars to Movies
            <center>
            <img src="images/stars.png" class="img-fluid" style="height:70px;width:70px;">
            </center>
        </div>
    </div>
</a>
</div>


</div>
</div>
  </div>

</div>
  </div>
  </div>
</div>
</div>
<?php
include('../footer.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#add_category").validate({
rules:{
    name:"required"
},
messages:{
   name:"Please enter category name"
}
});

$(".mana").hover(function(){
  $(this).css("color","white");
},function(){
  $(this).css("color","white");  
});
});
</script>
</body>
</html>