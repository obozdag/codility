<!DOCTYPE html>
<html>
<head>
	<title>Count Factors</title>
</head>
<body>
	<?php
	function solution($n)
	{
		$counter = 0;
		$i = 1;
		while ($i * $i <= $n)
		{
			if ($n % $i == 0)
			{
				if ($i * $i == $n)
				{
					$counter += 1;
				}
				else
				{
					$counter += 2;
				}
			}
			$i++;
		}
		return $counter;
	}

	$n = 60;
	echo "<pre>";
	print_r(solution($n));
	?>
	<a href="https://app.codility.com/demo/results/training288ZZN-6EM/">Solution</a>
</body>
</html>
