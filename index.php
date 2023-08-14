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
</style>
</head>
<body onload="myfunction()" style="background-color:black;">
<?php
include('header.php');
?>
<!-- content -->

<div class="container">
          <div class="row my-4 ml-2">
           <div class="col-md-2 py-2 ooo text-white" style="background-color:#0366a5;border-right:2px solid white;">Home</div>
           <div class="col-md-2 py-2 ooo text-white" style="background-color:#0366a5;">All Movies category</div><span class="triangle-right"></span>
           <div class="col-md-8"></div>
           </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="card" style="background-color:rgb(1,46,88);">
            <div class="card-header bg-primary text-white">
                <h4><i class="fa-solid fa-video"></i> Recent movies sorted by recent</h4>
            </div>
            <div class="card-body">
                <div class="card">
                <div class="card-body" style="background-color:rgb(1,46,88);border:2px solid rgb(0,123,255);">
                <div class="row">
                  <?php
                  include('db.php');
                  $sql="select * from category";
                  $result=mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row=mysqli_fetch_assoc($result))
                    {
                      ?>
                      <div class="col-md-12">
                        <div class="card my-3" style="height:200px;background-color:rgb(1,46,88);border:2px solid rgb(0,123,255);">
                        <div class="card-body">
                        <a href="movies.php?id=<?=$row['cid']?>" style="text-decoration:none;" class="float-right text-uppercase view-more"><u>View more</u> 
                        <i class="fa-solid fa-caret-right"></i> </a>
                        <h3 style="color:white;"><?=$row["name"]?></h3>
                        <div>
                        

                        </div>
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

<script>
  $(document).ready(function(){
    $(".view-more").css("color","rgb(252,233,107)");
  });
</script>
<!-- end content -->
<?php
include('footer.php');
?>
<?php
include('headercontent.php');
?>
</body>
</html>