<?php
session_start();
unset($_SESSION['access_token']); 
session_destroy();
$URL="login.php";
echo "<script>location.href='$URL'</script>";
exit();
?>