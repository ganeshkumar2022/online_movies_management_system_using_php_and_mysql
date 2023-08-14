<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<?php
$GLOBALS['con']=mysqli_connect("localhost","root","","movies_world");

/* admin login */
if(isset($_POST["admin_login"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$sql="select * from admin where username='$username'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);
    $pass=$row["password"];
    $id=$row["id"];
    if(password_verify($password,$pass))
    {
     //$_SESSION["aid"]=$id;
     //$i=$_SESSION["aid"];
     //echo "<script>alert($i);</script>"; 
     setcookie("admin",$id,time()+3600,"/");
     header("Location:admin/dashboard.php");
     exit;
    }
    else
    {
        $message="Invalid username or password";
    }
}
else
{
    $message="Invalid username or password";
}
}


mysqli_close($con);
?>
<div id="ex1" class="modal">
  <p style="color:red;font-weight:bold;"><?php echo $message; ?></p>
</div>


<script type="text/javascript">
$(document).ready(function(){
$("#ex1").modal({fadeDuration: 100});
$("*").click(function(){
window.location.replace("admin.php");
});
});

</script>
