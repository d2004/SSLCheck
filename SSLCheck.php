<?php
if (!isset($_SERVER['HTTPS']) || !$_SERVER['HTTPS']) {
   setcookie("sslcheck_redir",$_SERVER['HTTP_REFERER']);
   header("Location: SSLCheck2.php");
}
?>
