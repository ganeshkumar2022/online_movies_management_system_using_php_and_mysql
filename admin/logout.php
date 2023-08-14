<?php
setcookie("admin","",time()-3600,"/");
header("Location:../admin.php");
exit;
?>