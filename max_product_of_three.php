<!DOCTYPE html>
<html>
<head>
	<title>Maximum Product of Three</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		sort($arr);
		$len = count($arr);
		return max($arr[0]*$arr[1]*$arr[$len-1], $arr[$len-1]*$arr[$len-2]*$arr[$len-3]);
	}

	$arr = [-10, -2, -4];
	$arr = [-3, 1, 2, -2, 5, 6];
	$arr = [-5, 5, -5, 4];
	echo "<pre>";
	echo solution($arr);
	?>
	<a href="https://app.codility.com/demo/results/trainingSM68GA-VSW/">Solution</a>
</body>
</html>
