<!DOCTYPE html>
<html>
<head>
	<title>Binary Gap</title>
</head>
<body>
	<?php

	function solution($n)
	{	
		$arr = decbin($n);
		$len = strlen($arr);
		$gap = $max_gap = 0;

		$countable = false;

		for ($i=0; $i < $len; $i++)
		{
			if($arr[$i] === '1')
			{
				$max_gap = max($max_gap, $gap);
				$gap = 0;
				$countable = true;
			}
			else
			{
				if ($countable)
				{
					$gap++;
				}
			}
		}

		return $max_gap;
	}


	$n = 1041;
	$n = 15;
	$n = 20;
	$n = 529;
	$n = 32;

	echo solution($n).PHP_EOL;
	?>
	<a href="https://app.codility.com/demo/results/training2BCZPW-EMS/">Solution</a>
</body>
</html>
