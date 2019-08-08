<!DOCTYPE html>
<html>
<head>
	<title>Dominator</title>
</head>
<body>
	<?php

	function solution($arr)
	{	
		$index = -1;
		if(!$arr) return $index;
		$len = count($arr);

		$counts = array_count_values($arr);
		arsort($counts);

		if(current($counts)>intdiv($len, 2)) 
			$index = array_search(key($counts), $arr);

		return $index;
	}

	$arr = [];
	$arr = [1, 2, 1];
	$arr = [5];
	$arr = [1, 2, 3, 4, 5, 6];
	$arr = [-2147483648,2147483647,999999,1,999999,2,999999,3,999999,999999,999999,999999,999999,999999,999999,-2147483648];
	$arr = [5, 3, 4, 3, 2, 3, -1, 3, 3];
	$arr = [2147483647];
	$arr = [1, 1, 1, 3, 3, 3, 3];
	echo "<pre>";
	print_r(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingFQG49P-VV3/">Solution</a>
</body>
</html>
