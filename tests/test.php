<?php

require_once("../includes/dbconnect.php");

echo("<h1>Select * FROM rols</h1>");
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
			<!-- <td><a class="button" href="add.php">Add Contact</a></td> -->
		</tr>
<?php
while($res = mysqli_fetch_array($result)) { 		
    echo "<tr>";
    echo "<td>".$res['id']."</td>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['description']."</td>";	
    // echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";		
}
?>
    </table>
</body>
</html>