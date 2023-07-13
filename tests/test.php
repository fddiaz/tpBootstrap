<?php

require_once('../includes/dbconnect.php');

echo('<h1>Select * FROM rols</h1>');
// echo $connection->host_info . "<br>";
$sql = "SELECT * FROM roles";
$result = $connection->query($sql);
?>

<html>
<head>	
	<title>MariaDB Rolodex</title>
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	<table style="border: solid 1px black;">
		<tr>
			<td style="border: solid 1px black;">Id</td>
			<td style="border: solid 1px black;">Name</td>
			<td style="border: solid 1px black;">Description</td>
		</tr>
<?php
while($res = mysqli_fetch_array($result)) { 		
    echo '<tr>';
    echo '<td>'.$res['id'].'</td>';
    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['description'].'</td>';	
}
?>
    </table>
</body>
</html>