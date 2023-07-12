<?php

echo("<h1>Select * FROM rols</h1>");

require_once("../includes/dbconnect.php");

$sql = "SELECT * FROM rols";
$result = $connection->query($sql);

var_dump($result);

?>