<?php
include('../db.php');
$sscid=$_GET["cid"];
$sql16="select * from subcategory where category_id=$sscid";
$result16=mysqli_query($con,$sql16);
?>
<select class="form-control" id="sub_category" name="sub_category_id">
  <?php
if(mysqli_num_rows($result16)>0)
{
    while($row16=mysqli_fetch_assoc($result16))
    {
?>
<option value="<?=$row16['scid']?>"><?=$row16["sub_category_name"]?></option>
<?php
    }
}
?>
</select>