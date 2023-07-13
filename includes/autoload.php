<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/session.php';
Session::init();

echo '<pre>';
var_dump(Session::GetAll());
echo '</pre>';

?>