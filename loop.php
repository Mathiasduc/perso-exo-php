<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
<div>
	<?php 
	$a = 0;
	$b = rand(0, 100);

	for ($a=0; $a <= 20; $a++) { 
		$a = $a * $b;
		echo  $a . "\n";
	}

	 ?>
</div>
</body>
</html>