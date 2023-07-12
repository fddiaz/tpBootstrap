<?php

require_once("../includes/dbconnect.php");

echo("<h1>Select * FROM rols</h1>");
echo $connection->host_info . "<br>";
$sql = "SELECT * FROM rols";
$result = $connection->query($sql);

var_dump($result);

?>