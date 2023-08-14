<?php
session_start();
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
.triangle-right {
	width: 0;
	height: 0;
	border-top: 25px solid transparent;
	border-left: 30px solid #0366a5;
	border-bottom: 25px solid transparent;
}
.my-image
{
    height:700px;
    border:10px solid transparent;
    outline:1px solid white;
}
.my-image:hover
{
    border:10px solid white;
}
</style>
</head>
<body onload="myfunction()">
<?php
include('header.php');
?>


<!-- movies content start -->
<div class="container-fluid py-5" style="background-color:black;">
<div class="container">
    <?php
    include('db.php');
    $id=$_GET["id"];
    $sql23="select * from add_movies where mid=$id";
    $result23=mysqli_query($con,$sql23);
    $row23=mysqli_fetch_assoc($result23);
    $sql24="select * from add_movies inner join category on category.cid=add_movies.mcategory_id inner join subcategory on subcategory.scid=add_movies.msub_category_id where add_movies.mid=$id";
    $result24=mysqli_query($con,$sql24);
    $row24=mysqli_fetch_assoc($result24);
    ?>
        <div>
          <div class="row my-4 ml-2">
           <div class="col-md-1 py-2 ooo text-white" style="background-color:#0366a5;border-right:1px solid white;">Home</div>
           <div class="col-md-1 py-2 ooo text-white" style="background-color:#0366a5;border-right:1px solid white;">Movies</div>
           <div class="col-md-4 py-2 ooo text-white" style="background-color:#0366a5;"><?=$row23["movie_name"]?></div><span class="triangle-right"></span>
           <div class="col-md-6"></div>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="card" style="background-color:rgb(1,46,88);">
            <div class="card-header bg-primary text-white">
                <h4><i class="fa-solid fa-video"></i> Download <?=$row23["movie_name"] ?> free full movie online Free</h4>
            </div>
            <div class="card-body">
                <div class="card">
                <div class="card-body" style="background-color:rgb(1,46,88);border:2px solid rgb(0,123,255);">
                <h3 style="color:yellow;"><?=$row23["movie_name"] ?> (<?=$row23["movie_year"]?>)</h3>
                <p class="small" style="color:RGB(53 235 232);"><?=$row24["name"]?> | <?=$row24["sub_category_name"]?></p>
                <p class="small font-weight-bold"><a href="add_favorites.php?mid=<?php echo $row23['mid']; ?>"><i class="fa-solid fa-plus"></i> Favoruite</a></p>
                <p class="mt-5 text-white" style="font-family:arial;"><?=$row23["movie_story"]?></p>
                    <div class="embed-responsive embed-responsive-16by9">
                         <iframe class="embed-responsive-item" src="<?=$row23['movie_trailor']?>"></iframe>
                    </div>
                    <img src="admin/<?=$row23['movie_image']?>" class="my-image mx-auto d-block my-5 img-fluid" style="">
                    <center>
                        <?php
                        if(isset($_SESSION["uid"]))
                        {
                            ?>
                            <a href="admin/<?=$row23['torrent_file']?>" class="btn btn-primary" download>Download Torrent</a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <button class="btn btn-primary" onclick="alert('Login to download the file')">Download Torrent</button>
                            <?php
                        }
                        ?>
                    </center><br><br>
<!-- others start movie scenes -->

<div class="container">
    <div class="container mb-4">
        <div class="card" style="background-color:rgb(1,46,88);">
            <div class="card-header bg-primary text-white">
                <h4><?=$row23["movie_name"] ?> (<?=$row23["movie_year"]?>) Photos</h4>
            </div>
            <div class="card-body" style="background-color:rgb(26,39,61);border:2px solid #0366a5;">
                <div class="row">
                  <div class="col-md-12 text-white" style="background-color:rgb(26,39,61);">
                  <div class="row">
<?php
include('db.php');
$id=$_GET["id"];
$sqlq="select * from movie_scenes where movies_id=$id";
$resultq=mysqli_query($con,$sqlq);
if(mysqli_num_rows($resultq)>0)
{
    while($rowq=mysqli_fetch_assoc($resultq))
    {
?>
  <div class="col-md-4 mb-3">
    <div class="card">
    <img class="card-img-top" style="height:150px;" src="admin/<?=$rowq['scene_image']?>" class="img-fluid" alt="Card image">
       
    </div>
 </div>
<?php
    }
}
?>
                  
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- director -->


<div class="container">
    <div class="container mb-4">
        <div class="card" style="background-color:rgb(1,46,88);">
            <div class="card-header bg-primary text-white">
                <h4><?=$row23["movie_name"] ?> (<?=$row23["movie_year"]?>) Director</h4>
            </div>
            <div class="card-body" style="background-color:rgb(26,39,61);border:2px solid #0366a5;">
                <div class="row">
                  <div class="col-md-12 text-white" style="background-color:rgb(26,39,61);">
                  <div class="row">
<?php
include('db.php');
$id=$_GET["id"];
$sqlq="select * from director where movie_id=$id";
$resultq=mysqli_query($con,$sqlq);
if(mysqli_num_rows($resultq)>0)
{
    while($rowq=mysqli_fetch_assoc($resultq))
    {
?>
  <div class="col-md-3 mb-3">
    <div class="card">
    <img class="card-img-top" style="height:150px;" src="admin/<?=$rowq['director_image']?>" class="img-fluid" alt="Card image">
       <div class="card-body" style="padding:5px;color:black;text-align:center;">
        <?=$rowq["director_name"]?>
       </div>
    </div>
 </div>
<?php
    }
}
?>
                  
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  actress images -->

<div class="container">
    <div class="container mb-4">
        <div class="card" style="background-color:rgb(1,46,88);">
            <div class="card-header bg-primary text-white">
                <h4><?=$row23["movie_name"] ?> (<?=$row23["movie_year"]?>) Movie Stars</h4>
            </div>
            <div class="card-body" style="background-color:rgb(26,39,61);border:2px solid #0366a5;">
                <div class="row">
                  <div class="col-md-12 text-white" style="background-color:rgb(26,39,61);">
                  <div class="row">
<?php
include('db.php');
$id=$_GET["id"];
$sqlq="select * from star where movie_id=$id";
$resultq=mysqli_query($con,$sqlq);
if(mysqli_num_rows($resultq)>0)
{
    while($rowq=mysqli_fetch_assoc($resultq))
    {
?>
  <div class="col-md-3 mb-3">
    <div class="card">
    <img class="card-img-top" style="height:150px;" src="admin/<?=$rowq['star_image']?>" class="img-fluid" alt="Card image">
       <div class="card-body" style="padding:5px;color:black;text-align:center;">
        <?=$rowq["star_name"]?>
       </div>
    </div>
 </div>
<?php
    }
}
?>
                  
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- others stop -->
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- movies content end -->
<?php
include('footer.php');
?>
<?php
include('headercontent.php');
?>
</body>
</html>