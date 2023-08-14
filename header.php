<div class="container-fluid p-1 bg-light">
</div>
<nav class="navbar navbar-expand-md myheadernav">
  <a class="navbar-brand" href="#"><img src="images/logo4.png" class="header_logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  font-weight-bold ahov" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold ahov" href="movies.php">MOVIES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold ahov" href="contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold ahov" href="aboutus.php">ABOUT US</a>
      </li>
      <li class="nav-item">
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" style="background-color:rgb(197,219,233);"><i class="fa-solid fa-magnifying-glass" style="color:black;"></i></span>
    </div>
    <form autocomplete="off" action="movies.php" method="get">
    <input type="text" class="form-control" id="search" name="search" placeholder="Search" style="background-color:rgb(32,46,72);color:white;">
    </form>
    
  </div>
</li>
<?php
if(isset($_SESSION["uid"]))
{
  ?>
  <?php
}
else
{
  ?>
  <li class="nav-item">
        <a class="nav-link font-weight-bold ahov" id="login-form" style="cursor:pointer;"><i class="fa-solid fa-right-to-bracket"></i> LOGIN</a>
  </li>
  <li class="nav-item">
        <a class="nav-link font-weight-bold ahov" id="signup-form" style="cursor:pointer;"><i class="fa-solid fa-right-to-bracket"></i> SIGNUP</a>
  </li>

  <li class="nav-item">
      <div id="google_translate_element" style="position:absolute;top:-1px;"></div>
      </li>
  <?php
  
}
?>
      
     
<?php
if(isset($_SESSION["uid"]))
{
?>
      <li class="nav-item" style="position:absolute;right:10px;top:-1px;">
        <a class="text-info small" href="dashboard.php" style="text-decoration:underline;">My Dashboard</a>
        <a class="text-info small" href="myfavourites.php" style="text-decoration:underline;">My Favourites</a>
        <a class="text-info small" href="myprofile.php" style="text-decoration:underline;">My Profile</a>
        <!--<a class="text-primary small" href="">Submit Link</a>-->
        <a class="text-info small" href="logout.php" style="text-decoration:underline;">Logout</a>
      </li>
<?php
}
?>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="height:5px;background-color:rgb(0,3,15);">
</div>
<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en',layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
                'google_translate_element'
            );
        }
        $(document).ready(function(){
          $("a").css("color","white");
          $(".ahov").hover(function(){
          $(this).css("color","rgb(151,211,249)");
          },function(){
          $(this).css("color","white");
          });
        });
</script>
<div class="container-fluid py-5" style="background-color:rgb(0,14,39);border-bottom:2px solid white;">
    <div class="container" style="background-color:rgb(26,39,61);">
        <div class="row">
            <p><h6 class="text-white my-2 ml-4 p-2 text-uppercase">Latest Updates</h6> <span style="font-size:40px;color:white;" class="mt-n2 mr-3 font-weight-light">|
          </span><span style="margin-top:15px;color:white;" id="one"></span>
        </div>
    </div>
</div>
<?php
include('db.php');
$sql="select * from add_movies order by mid desc limit 1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<script>
var i = 0;
var txt = 'Watch movie : <?=$row["movie_name"]?>(<?=$row["movie_year"]?>)          ';
function myfunction() {
  if (i <= txt.length) {
    if(i==txt.length)
    {
      document.getElementById("one").innerHTML="";
      i=0;
    }
    document.getElementById("one").innerHTML += txt.charAt(i);
    i++;
    
    setTimeout(myfunction,150);
  }
}
</script>