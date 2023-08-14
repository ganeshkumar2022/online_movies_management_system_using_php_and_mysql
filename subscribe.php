<p id="serror" class="text-danger small"></p>
<p id="ssuccess" class="text-success small"></p>
<form action="" method="post" autocomplete="off">
<span class="font-weight-bold">Email Address</span><br>
<input type="email" name="semail" style="width:100%;" required>
<input type="submit" value="Subscribe" class="btn btn-sm bg-primary my-2 text-white text-center" name="subscribe">
</form>
<?php
if(isset($_POST["subscribe"]))
{
$semail=$_POST["semail"];
if(empty($semail))
{
echo "<script>
document.getElementById('serror').innerHTML='please fill the field';
</script>";
}
else
{
    include('db.php');
    
    $sql="insert into subscriber (email) values ('$semail')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>
        document.getElementById('ssuccess').innerHTML='Subscribed successfully';
        </script>";
    }
    else
    {
        echo "<script>
        document.getElementById('ssuccess').innerHTML='Error to Subscribe';
        </script>";
    }
}
}
?>