<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
<div>
	<?php 
	$a = 100;
	$b = rand(1, 100);
	echo "$b ";
	for (; $a >= 10; $a--) { 
		$c = $a * $b;
		echo "$c"."\n";
	}

	 ?>
</div>
</body>
</html>