<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';



//get data
$sqlget = "SELECT * FROM project";

$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		

echo "<table>";

echo "<tr><th>Title</th><th>Requirements</th><th>Description</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo '<tr><td>';
		echo $row['title'];
		echo '</td><td>';
		echo $row['Requirements'];
		echo '</td><td>';
		echo $row['description'];
		echo '</td></tr>';
		
	}

echo "</table>";
?>


