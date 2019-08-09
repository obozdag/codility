<!DOCTYPE html>
<html>
<head>
	<title>Minimum Perimeter Rectangle</title>
</head>
<body>
	<?php
	function solution($n)
	{
		$i = 1;

		while ($i * $i <= $n)
		{
			if($n % $i == 0)
			{
				$side1 = $i;
			}

			$i++;
		}

		$side2 = $n/$side1;

		return 2 * ($side1+$side2);
	}

	$n = 30;
	echo "<pre>";
	print_r(solution($n));
	?>
	<a href="https://app.codility.com/demo/results/training3BRF35-S2J/">Solution</a>
</body>
</html>
