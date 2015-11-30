<?php
setcookie("userlogin","",time()-1);
header("Location: logged_out.php");
?>
