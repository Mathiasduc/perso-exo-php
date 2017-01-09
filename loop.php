<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
	<div>
		<?php 
		$a = 1;
		while ($a < 10) {
			echo $a . "\n";
			$a = $a + $a / 2;
		}

	?>
</div>
</body>
</html>