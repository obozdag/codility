<!DOCTYPE html>
<html>
<head>
	<title>Max Slice Sum</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		$len = count($arr);
		$tmp_max = $max_slice = $arr[0];

		for ($i=1; $i < $len; $i++)
		{
			$tmp_max = max($arr[$i], $tmp_max+$arr[$i]);
			$max_slice = max($max_slice, $tmp_max);
		}

		return $max_slice;
	}

	$arr = [5, -7, 3, 5, -2, 4, -1];
	$arr = [-1, -2];
	$arr = [-3, -4, -2];
	$arr = [3, 2, -6, 4, 0];
	echo "<pre>";
	echo solution($arr);
	?>
	<a href="https://app.codility.com/demo/results/training9WV2UF-TQX/">Solution</a>
</body>
</html>
