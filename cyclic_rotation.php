<!DOCTYPE html>
<html>
<head>
	<title>Cyclic Rotation</title>
</head>
<body>
	<?php
	function solution($arr, $rot)
	{
		$count = count($arr);
		if(!$rot || !$count) return $arr;
		$rot = $rot % $count;
		return array_values(array_slice($arr, - $rot, null, true)+$arr);
	}

	$arr = [3, 2, 8, 15, 5, 77];
	$arr = [3, 8, 9, 7, 6];
	$rot = 3;
	echo "<pre>";
	print_r($arr);
	print_r(solution($arr, $rot));
	?>
	<a href="https://app.codility.com/demo/results/trainingZRBDHR-A9E/">Solution</a>
</body>
</html>
