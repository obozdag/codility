<!DOCTYPE html>
<html>
<head>
	<title>Max Counters</title>
</head>
<body>
	<?php

	function print_array($arr)
	{
		return "[".implode(', ', $arr)."]";
	}

	function solution($n, $arr)
	{
		$max = $last_max = 0;
		$counters = array_fill(0, $n, 0);
		for ($i=0, $len=count($arr); $i < $len; $i++)
		{
			if($arr[$i] == $n+1)
			{
				$last_max = $max; 
			}
			
			if($arr[$i] <= $n && $arr[$i] >= 1)
			{
				$counters[$arr[$i]-1] = max($last_max, $counters[$arr[$i]-1]) + 1;
				$max = max($max, $counters[$arr[$i]-1]);
			}
		}
		for ($i=0, $len=count($counters); $i < $len; $i++)
		{
			$counters[$i] = max($last_max, $counters[$i]);
		}
		return $counters;
	}


	$arr = [3, 4, 4, 6, 1, 4, 4];
	$n = 5;
	echo "<pre>";
	echo print_array(solution($n, $arr))."\n";
	echo "</pre>";
	?>
	<a href="https://app.codility.com/demo/results/trainingM7VET6-EA7/">Solution</a>
</body>
</html>
