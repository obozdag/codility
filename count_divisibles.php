<!DOCTYPE html>
<html>
<head>
	<title>Count Divisibles</title>
</head>
<body>
	<?php
	function solution($a, $b, $k)
	{
		return (int)(floor($b/$k) - floor(($a-1)/$k));
	}

	echo "<pre>";
	print_r(solution(6, 10, 2));
	?>
	<a href="https://app.codility.com/demo/results/training6ARC53-DD9/">Solution</a>
</body>
</html>
