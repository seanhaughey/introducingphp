<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Challenge: using loops</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Multiplication Table</h1>
	<table>
		<?php
		echo "<tr>";
		echo "<th>&nbsp;</th>";
		foreach($numbers as $number):
			echo "<th>$number</th>";
		endforeach;
		echo "</tr>";
		foreach($numbers as $number):
			echo "<tr>";
			echo "<th>$number</th>";
			foreach($numbers as $multiplier):
				echo "<td>" . $number * $multiplier . "</td>";
			endforeach;
			echo "</tr>";
		endforeach;
    	?>
	</table>
	
</body>
</html>