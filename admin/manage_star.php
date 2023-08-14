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
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
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
<div class="p-3 m-4" style="border:3px solid #0366a5;background-color:#1a273d;"><span class="ml-4" style="margin-top:15px;color:white;font-weight:bold;">
<p class="font-weight-bold ml-2" style="color:rgb(127,255,212);">Manage Star</p>
<table id="example" class="table table-striped table-bordered bg-white text-dark" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Movie name</th>
                <th>Star name</th>
                <th>Star image</th>
                <th>Edit / Delete</th>
            </tr>
        </thead>
        <tbody>
<?php
include('../db.php');
#$sql="select * from subcategory inner join category where subcategory.category_id=category.cid order by subcategory.scid desc";
$sql="select * from star inner join add_movies on star.movie_id=add_movies.mid order by star_id desc";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
<tr>
<td><?=$i?></td>
<td><?=$row["movie_name"]?></td>
<td><?=$row["star_name"]?></td>
<td><img src='<?=$row["star_image"]?>' style="height:80px;width:60px;"></td>
<td>
    <a href="edit_star.php?id=<?=$row["star_id"]?>" class="mana btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
    <a href="delete_star.php?id=<?=$row["star_id"]?>" class="mana btn btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></a>
</td>
</tr>
<?php
$i++;
    }
}
?>
        </tbody>
</table>
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

$('#example').DataTable();
});
</script>
</body>
</html>