<?php
if (!isset($_SERVER['HTTPS']) || !$_SERVER['HTTPS']) {
   exit("<h1>YOUR CONNECTION IS NOT SECURE! ACCESS DENIED!</h1>Excuse me, but your connection is not secure and it cannot connect via HTTPS. Please disable sslstrip and activate HTTPS connections or you cannot join! (it is possible you are under a ManInTheMiddle Attack. )");
} else {
  header("Location: ".$_COOKIE['sslcheck_redir']);
}
?>
