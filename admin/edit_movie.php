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
.textinput:focus
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
</div>-->
<div class="bg-dark">
<div class="container">
<div class="row">
<div class="col-md-7">
 <!-- <p class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:rgb(127,255,212);font-weight:bold;">Welcome ganesh</span></p>
-->
 <!--hello hi how are you -->
<?php
$id=$_GET["id"];
include('db.php');
$sql="select * from add_movies where mid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
  <div class="p-2 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
  <form action="verify.php" id="add_category" name="update_profil" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return update_profile()">
  <p class="font-weight-bold ml-4" style="color:rgb(127,255,212);">Edit Movies</p>
<p id="prof_upd_success" class=" text-success text-center"></p>
<p id="prof_upd_danger" class=" text-danger text-center"></p>
  <div class="row p-4">
<div class="col-md-6 my-2">
    Choose category
</div>
<div class="col-md-6 my-2">
    <div class="form-group">
    <select class="form-control form-control-sm" id="cat_id" name="category_id" onchange="choose_sub()">
        <option value="">----Choose category---</option>
<?php
include('../db.php');
$sql_c="select * from category";
$resultc=mysqli_query($con,$sql_c);
if(mysqli_num_rows($resultc)>0)
{
    while($rowc=mysqli_fetch_assoc($resultc))
    {
        ?>
        <option value="<?=$rowc['cid']?>" <?php if($row["mcategory_id"]==$rowc["cid"]) { echo "selected"; } ?>><?=$rowc["name"]?></option>
        <?php
    }
}
?>
    </select>
    </div>
</div>
<div class="col-md-6 my-2">
    Subcategory name
</div>
<?php
$sql3="select * from subcategory where category_id=".$row["mcategory_id"]." and scid=".$row['msub_category_id'];
$result3=mysqli_query($con,$sql3);
$row3=mysqli_fetch_assoc($result3);
?>
<div class="col-md-6 my-2">
<select class="form-control" id="sub_category_choose" name="sub_category_id">
<option value="<?=$row['msub_category_id']?>"><?=$row3["sub_category_name"]?></option>
</select>
</div>
<div class="col-md-6 my-2">
Movie name
</div>
<div class="col-md-6 my-2">
<input type="text" name="movie_name" value="<?=$row['movie_name']?>" class="form-control" placeholder="Enter movie name">
<input type="hidden" name="id" value="<?=$_GET['id']?>">
</div>
<div class="col-md-6 my-2">
Released year
</div>
<div class="col-md-6 my-2">
<input type="number" name="movie_year" value="<?=$row['movie_year']?>" class="form-control" placeholder="Enter movie released year">
</div>
<div class="col-md-6 my-2">
Image
</div>
<div class="col-md-6 my-2">
<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="movie_image">
    <label class="custom-file-label" for="customFile">Choose Movie image</label>
  </div>
  <script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</div>
<div class="col-md-6 my-2">
Movie Story
</div>
<div class="col-md-6 my-2">
<textarea style="resize:none;" class="form-control textinput" rows="4" id="comment" name="movie_story" placeholder="Enter movie story">
<?=$row['movie_story']?>
</textarea>
</div>
<div class="col-md-6 my-2">
Movie trailor
</div>
<div class="col-md-6 my-2">
<input type="text" name="movie_trailor" value="<?=$row['movie_trailor']?>" class="form-control" placeholder="Enter movie trailor">
</div>
<div class="col-md-6 my-2">
Torrent File
</div>

<div class="col-md-6 my-2">
<div class="custom-file">
    <input type="file" name="torrent_file" value="tre.torrent">
  </div>
</div>
<div class="col-md-6 offset-md-6 text-danger"><p id="fnameerr"></p></div>
<div class="form-group">
<button type="submit" class=" border-0 ml-3" name="edit_movies">Update Movie</button>
</div>
</form>
</div>

  </div>
</div>
<div class="col-md-5 my-4">
  <img src="images/download.jpg" class="img-fluid" style="height:300px;">
  <img src="images/2.webp" class="img-fluid my-4" style="height:300px;">
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
    sub_category_id:"required",
    category_id:"required",
    movie_name:"required",
    movie_year:"required",
    movie_story:"required",
    movie_trailor:"required"
},
messages:{
    sub_category_id:"Please choose sub category name",
    category_id:"Please choose category name",
    movie_name:"Please enter movie name",
    movie_year:"Please enter movie year",
    movie_story:"Please enter movie story",
    movie_trailor:"Please enter movie trailor"
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
</body>
</html>