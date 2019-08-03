<!DOCTYPE html>
<html>
<head>
	<title>Missing Integer</title>
</head>
<body>
	<?php
	// Return missing minimum positive integer in the array
	function solution($arr)
	{
		$arr = array_combine($arr, $arr);
		asort($arr);
		$counter = 1;

		foreach($arr as $key => $value)
		{
			if($arr[$key]<=0) continue;
			if($arr[$key] != $counter) return $counter;
			$counter++;
		}

		return $counter;
	}

	$arr = [15, -4, -3, -5, 1, 2, -8, 9, 0, 19, 4, 7, 16, 15, 9];
	$arr = [3, 1, 2, 4];
	$arr = [1, 3, 6, 3, 1, 2];

	echo "<pre>";
	print_r(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingJ2W938-T5G/">Solution</a>
</body>
</html>
