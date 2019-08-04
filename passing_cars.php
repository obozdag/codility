<!DOCTYPE html>
<html>
<head>
	<title>Passing Cars</title>
</head>
<body>
	<?php

	function solution($arr)
	{
		$len=count($arr);
		$ones = array_count_values($arr)[1];
		$pairs = 0;
		
		for ($i=0; $i < $len-1; $i++)
		{
			if($arr[$i] == 1)
			{
				$ones--;
			}
			if($arr[$i] == 0)
			{
				$pairs += $ones;
			}

		}

		if($pairs > 1000000000) return -1;

		return $pairs;
	}

	$arr = [0, 1, 0, 1, 1];
	echo "<pre>";
	echo print_array(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingFQJU29-6PT/">Solution</a>
</body>
</html>
