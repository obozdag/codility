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
		$max_profit = 0;
		$min_price = max($arr);

		for ($i=0; $i < $len; $i++)
		{
			$min_price = min($arr[$i], $min_price);
			$max_profit = max($max_profit, $arr[$i] - $min_price);
		}

		return $max_profit;
	}

	$arr = [23171, 21011, 21123, 21366, 21013, 21367];
	$arr = [];
	echo "<pre>";
	echo solution($arr);
	?>
	<a href="https://app.codility.com/demo/results/trainingEWAUKZ-AYQ/">Solution</a>
</body>
</html>
