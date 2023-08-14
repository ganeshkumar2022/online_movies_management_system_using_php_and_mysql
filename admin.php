
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies world</title>
    <link rel="icon" type="image/png" href="images/logo3.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
<style type="text/css">
input[type=text],input[type=password],.input-group-text
{
    border-radius:0px;
    border-left:0px;
}
.input-group-text
{
    border-right:0px;
    background-color:white;
}
button[type=submit]
{
    border-radius:0px;
    font-weight:bold;
}

</style>
</head>
<body>
<div class="container">
<div class="container-fluid p-1 bg-light">
</div>
<nav class="navbar navbar-expand-md myheadernav">
  <a class="navbar-brand" href="#"><img src="images/logo4.png" class="header_logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container-fluid" style="height:5px;background-color:rgb(0,3,15);">
</div>
</div>
<!-- start login page -->
<div class="container bg-white">
<div class="row">
<div class="col-md-6 offset-md-3 mt-5">
<div class="card bg-dark px-5 pb-2">
<div class="card-body">
<h3 class="text-white mb-5 mt-2">Admin Panel Login</h3>
<form action="verify.php" method="post" autocomplete="off">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa-solid fa-user text-info" ></i></span>
    </div>
    <input type="text" class="form-control fo" name="username" placeholder="Username">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa-solid fa-key text-info"></i></span>
    </div><!-- eye open <i class="fa-solid fa-eye"></i> -->
    <input type="password" class="form-control fo" name="password" id="pass" placeholder="Password" style="border-right:0px;">
    <div class="input-group-append">
      <span class="input-group-text" style="border-left:0px;"><i class="fa-solid fa-eye-slash" id="passshow"></i></span>
    </div>
  </div>
<!--
<input type="checkbox" name="signed_in"> <span class="text-white">Stay signed in</span><br>
-->
  <button type="submit" class="btn btn-light mt-1 p-2 px-4" name="admin_login">Login</button>

</form>
</div>
</div>
</div>
</div>
</div>
<!-- end login page -->
<div class="container fixed-bottom bg-dark text-white">
    <p class="mt-2">Copyright &copy; <?php echo date('Y'); ?> - Movies world</p>
</div>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>