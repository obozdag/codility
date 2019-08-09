<!DOCTYPE html>
<html>
<head>
	<title>Max Profit</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		$len = count($arr);
		$max_ending = $max_slice = -1000000000;

		for ($i=0; $i < $len; $i++)
		{
			$max_ending = max($arr[$i], $max_ending+$arr[$i]);
			$max_slice = max($max_slice, $max_ending);
		}

		return $max_slice;
	}

	$arr = [3, 2, -6, 4, 0];
	$arr = [5, -7, 3, 5, -2, 4, -1];
	$arr = [-1, -2];
	$arr = [-3, -4, -2];
	echo "<pre>";
	echo solution($arr);
	?>
	<a href="https://app.codility.com/demo/results/trainingZBP9QB-YS6/">Solution</a>
</body>
</html>
