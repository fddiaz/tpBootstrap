<?php 
session_start();

session_unset();

session_destroy();

header('location: ./index.php', true, 301);
exit();

?>