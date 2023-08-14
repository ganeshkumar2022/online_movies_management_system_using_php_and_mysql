

<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body log-design">
<h5 class="text-center text-white">Success</h5>
<div class="">
<table class="bg-white w-100 text-left">
<tr>
  <td class="text-success py-3">Registered successfully...</td>
</tr>

</table>
</div>
      </div>

   

    </div>
  </div>
</div>
<!-- The Modal login form -->

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body log-design">
<h5 class="text-center text-white">Login</h5>
<form id="lo_form" action="login.php" method="post" autocomplete="off">
<div class="">
<table class="bg-white w-100 text-left">
<tr>
  <td></td>
  <td></td>
</tr>
<tr>
  <td class="w-50"><label class="text-secondary font-weight-bold" for="email">Email</label></td>
  <td><input type="email" name="lemail" id="email"  size="30"></td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="pass">Password</label></td>
  <td><input type="password" name="lpassword" id="lpass" size="30"></td>
</tr>
<tr>
  <td></td>
<td>
  <!--<input type="checkbox" name="check"> Stay signed in<br>
-->
  <input type="submit" name="login" onclick="fun()" class="btn btn-sm px-3 rounded text-white" style="background-color:black" value="Login"><br>
<!--<a href="" class="text-decoration-none text-primary">Forgot password</a> |
<button type="button" id="register_form" class="text-primary text-decoration-none btn btn-link">Register</button>
-->
</td>
</tr>
<tr>
<td colspan="2" class="text-center">
<!--<div class="btn-group btn-group-sm">
<button type="button" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></button>
  <button type="button" class="btn btn-primary">Login with facebook</button>
</div>
<div class="btn-group btn-group-sm">
  <button type="button" class="btn btn-info"><i class="fa-brands fa-twitter"></i></button>
  <button type="button" class="btn btn-info">Signin with twitter</button>
</div><br>
<div class="btn-group btn-group-sm mt-2">
  <button type="button" class="btn btn-danger"><i class="fa-brands fa-google-plus-g"></i></button>
  <button type="button" class="btn btn-danger">Google</button>
</div>
-->
</td>
</tr>
<tr>
  <td colspan="2" class="text-right" style="vertical-align:bottom;">
<button class="btn btn-light btn-sm text-dark rounded-circle font-weight-bold" style="border:1px solid gray;" data-dismiss="modal">x</button>
</td>
</tr>
</table>
</div>
</form>

      </div>

   

    </div>
  </div>
</div>

<!-- register form -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body log-design reg">
<h5 class="text-center text-white">Register</h5>
<form action="register.php" id="regi_form" method="post" autocomplete="off">
<div class="">
<table class="bg-white w-100 text-left">
<tr>
  <td></td>
  <td></td>
</tr>
<tr>
  <td class="w-50"><label class="text-secondary font-weight-bold" for="fname">First name</label></td>
  <td><input type="text" name="firstname" id="fname" size="30"></td>
</tr>
<tr>
  <td class="w-50"><label class="text-secondary font-weight-bold" for="lname">Last name</label></td>
  <td><input type="text" name="lastname" id="lname" size="30"></td>
</tr>
<tr>
  <td class="w-50"><label class="text-secondary font-weight-bold" for="email">Email</label></td>
  <td><input type="text" name="email" id="email" size="30"></td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="pass">Password</label></td>
  <td><input type="password" name="password" id="pass" size="30"></td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="cpass">Re type Password</label></td>
  <td><input type="password" name="cpassword" id="cpass" size="30"></td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="dob">Date of birth</label></td>
  <td><input type="date" name="dob" id="dob" size="30" style="width:100%;"></td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="gen">Gender</label></td>
<td>
  <input type="checkbox" name="gender" value="male"> Male 
  <input type="checkbox" name="gender" value="female"> Female
</td>
</tr>
<tr>
  <td><label class="text-secondary font-weight-bold" for="zip">Zipcode</label></td>
  <td><input type="text" name="zipcode" id="zip" size="30"></td>
</tr>
<tr>
  <td></td>
<td>
  <input type="submit" name="register" class="btn btn-sm px-3 rounded text-white" style="background-color:black" value="Register"><br>
<!--<button type="button" id="lo_form" class="btn btn-link text-decoration-none">Login</button>-->
</td>
</tr>

<tr>
  <td colspan="2" class="text-right" style="vertical-align:bottom;">
<button class="btn btn-light btn-sm text-dark rounded-circle font-weight-bold" style="border:1px solid gray;" data-dismiss="modal">x</button>
</td>
</tr>
</table>
</div>
</form>

      </div>

   

    </div>
  </div>
</div>
<!-- end register  -->

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
$("#login-form").click(function(){
  $("#myModal").modal();
});

$("#signup-form").click(function(){
  $("#myModal2").modal();
});

$("#register_form").click(function(){
$("#myModal").modal("hide");
$("#myModal2").modal('show');
});
$("#lo_form").click(function(){
$("#myModal2").modal("hide");
$("#myModal").modal('show');
});

$("#lo_form").validate({
rules:
{
  lemail:{
    required:true,
    email:true
  },
  lpassword:{
    required:true
  }
},
messages:{
  lemail:
  {
    required:"Please enter the email field",
    email:"Please enter the valid email format"
  },
  lpassword:
  {
    required:"Please enter the password field"
  }
}
});

$("#regi_form").validate({
rules:
{
  firstname:"required",
  lastname:"required",
  email:{
  required:true,
  email:true
  },
  password:
  {
    required:true,
    minlength:8
  },
  cpassword:
  {
    required:true,
    equalTo:"#pass"
  },
  dob:"required",
  zipcode:"required",
},
messages:{
  firstname:"Please enter your first name",
  lastname:"Please enter your last name",
  email:
  {
    required:"Please enter your email",
    email:"please enter a valid email format"
  },
  password:{
  required:"Please enter your password",
  minlength:"Please enter atleast 8 characters"
  },
  cpassword:{
  required:"Please enter your confirm password",
  equalTo:"Please enter the same password as above"
  },
  dob:"Please enter your date of birth",
  zipcode:"Please enter your zipcode",
}
});
  });

</script>