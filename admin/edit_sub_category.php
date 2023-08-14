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
<!--
<a href="manage_category.php" class="text-decoration-none mana btn btn-primary my-2 float-right mx-2"><i class="fa-solid fa-pen-to-square"></i> Manage Category</a>
-->
<div class="container">
<div class="row">
<div class="col-md-9">
 <!-- <p class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:rgb(127,255,212);font-weight:bold;">Welcome ganesh</span></p>
-->
 <!--hello hi how are you -->
  <div class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
  <form action="" id="edit_sub_category" name="update_profil" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return update_profile()">
  <p class="font-weight-bold ml-4" style="color:rgb(127,255,212);">Edit Sub Category</p>
<p id="prof_upd_success" class=" text-success text-center"></p>
<p id="prof_upd_danger" class=" text-danger text-center"></p>
  <div class="row p-4">

<div class="col-md-6 my-2">
    Category name
</div>
<?php
include('../db.php');
$cid=$_GET["id"];
$sql11="select category.name as cname,category.cid as myid from category inner join subcategory on category.cid=subcategory.category_id where subcategory.scid=$cid";
$result11=mysqli_query($con,$sql11);
$row11=mysqli_fetch_assoc($result11);

$sql13="select * from category";
$result14=mysqli_query($con,$sql13);
?>
<div class="col-md-6 my-2">
<div class="form-group">
  <select class="form-control" id="cat_id" name="category_id">
<?php
if(mysqli_num_rows($result14)>0)
{
    while($row12=mysqli_fetch_assoc($result14))
    {
        if($row11["myid"]==$row12["cid"])
        {
            $a="selected";
        }
        else
        {
            $a="";
        }
        ?>
        
        <option value="<?=$row12['cid']?>" <?=$a?>><?=$row12["name"]?></option>
        <?php
    }
}
?>
  </select>
</div>
</div>
<?php
$id=$_GET["id"];
$sql23="select * from subcategory where scid=$id";
$result23=mysqli_query($con,$sql23);
$row23=mysqli_fetch_assoc($result23);
?>
<div class="col-md-6 my-2">
    Sub Category name
</div>
<div class="col-md-6 my-2">
<div class="form-group">
<input type="text" name="sub_category_id" value="<?=$row23['sub_category_name']?>" class="form-control" id="sub_category_choose" value="">
  <!--<select class="form-control" id="sub_category_choose" name="sub_category_id">
<option value="">----Choose an option ----</option>
</select>-->
</div>
</div>

<div class="col-md-6 offset-md-6 text-danger"><p id="fnameerr"></p></div>
<div class="form-group">
<button type="submit" class=" border-0 ml-3" name="edit_sub_category">Update Sub Category</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#edit_sub_category").validate({
rules:{
    category_id:"required",
    sub_category_id:"required"
},
messages:{
   category_id:"Please select category name",
   sub_category_id:"Please select sub category name"
}
});

$(".mana").hover(function(){
  $(this).css("color","white");
},function(){
  $(this).css("color","white");  
});
});

function choose_sub()
{
    var id=document.getElementById("cat_id").value;
    const xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
        document.getElementById("sub_category_choose").innerHTML=this.responseText;
    }
    xhttp.open("GET","choose_sub.php?cid="+id);
    xhttp.send();
}
</script>
<?php
if(isset($_POST["edit_sub_category"]))
{
  $category_id=$_POST["category_id"];
  $sub_category_name=$_POST["sub_category_id"];
  $id=$_GET["id"];
  include('../db.php');
  $sql24="update subcategory set sub_category_name='$sub_category_name',category_id='$category_id' where scid=$id";
  if(mysqli_query($con,$sql24))
  {
  echo "<script>
  document.getElementById('prof_upd_success').innerHTML='Subcategory updated successfully';
  </script>";
  }
  else
  {
    echo "<script>
  document.getElementById('prof_upd_danger').innerHTML='Error to update Subcategory';
  </script>";
  }
}

?>
</body>
</html>