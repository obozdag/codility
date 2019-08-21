<!DOCTYPE html>
<html>
<head>
	<title>Odd Occurences in Array</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		$result = 0;
		foreach($arr as $val)
		{
			$result ^= $val;
		}

		return $result;
	}

	$arr = [7, 9, 3, 9, 3, 9, 9];
	$arr = [4];
	$arr = [7, 3, 9, 3, 9, 9, 7];

	echo "<pre>";
	print_r(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingRY63SH-3ZA/">Solution</a>
</body>
</html>
